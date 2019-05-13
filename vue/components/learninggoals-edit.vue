<template>
    <div class="learninggoals-edit">
        <h3>{{strings.learninggoals_edit_site_name}}</h3>
        <div class="description">{{strings.learninggoals_edit_site_description}}</div>
        <ul class="learninggoals-edit-list">
            <li v-for="room in rooms">
                <div class="learninggoal-top-level">
                    <b>{{ room.name }}</b>
                    <p>{{ room.description }}
                    <router-link :to="{ name: 'learninggoal-edit', params: { roomId: room.id }}">
                        <i class="icon fa fa-pencil fa-fw iconsmall" :title="strings.edit"></i>
                    </router-link>
                    </p>
                </div>
            </li>
        </ul>
        <div v-if="rooms !== null && rooms.length == 0">
            {{strings.learninggoals_edit_no_learninggoals}}
        </div>
        <div class="learninggoals-edit-add">
            <router-link :to="{ name: 'learninggoal-new' }" tag="button" class="btn btn-primary">{{strings.learninggoal_form_title_add}}</router-link>
        </div>
    </div>
</template>

<script>
    import { mapState } from 'vuex';
    import { MFormModal } from '../mform';

    export default {
        name: "learninggoals-edit",
        data: function() {
            return {
                modal: null,
            };
        },
        computed: mapState(['strings', 'rooms']),
        methods: {
            async showForm(roomId = null) {
                let title = '';
                let args = {};
                if (roomId) {
                    title = this.strings.room_form_title_edit;
                    args.roomid = roomId;
                } else {
                    title = this.strings.room_form_title_add;
                }

                this.modal = new MFormModal('room_edit', title, this.$store.state.contextID, args);
                try {
                    await this.modal.show();
                    const success = await this.modal.finished;
                    if (success) {
                        this.$store.dispatch('fetchRooms');
                    }
                    this.$router.push({name: 'learninggoals-edit-overview'});
                } catch (e) {
                    // This happens when the modal is destroyed on a page change. Ignore.
                } finally {
                    this.modal = null;
                }
            },
            checkRoute(route) {
                if (this.modal) {
                    this.modal.destroy(false);
                }

                if (route.name === 'learninggoal-edit') {
                    this.$nextTick(this.showForm.bind(this, route.params.roomId));
                } else if (route.name === 'learninggoal-new') {
                    this.$nextTick(this.showForm.bind(this, null));
                }
            }
        },
        created: function() {
            this.$store.dispatch('fetchRooms');
            this.checkRoute(this.$route);
        },
        beforeRouteUpdate(to, from, next) {
            this.checkRoute(to);
            next();
        },
    }
</script>

<style scoped>
    .learninggoals-edit-list {
        padding-top: 5px;
    }

    .learninggoals-edit-add {
        padding-top: 20px;
    }
</style>
