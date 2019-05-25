<template>
    <div class="learninggoal-edit">
        <h3>{{strings.learninggoal_edit}}</h3>
        <div v-for="goal in learninggoal">
            <p><b>{{ goal.name }}</b></p>
            <p>{{ goal.pre_thinking_skill }} {{ goal.thinking_skill }} {{ goal.content }} {{ goal.subject }} {{ goal.pre_resource }}
               {{ goal.resource }} {{ goal.pre_product }} {{ goal.product }} {{ goal.pre_group }} {{ goal.group }}.</p>
        </div>
<!--        <div class="description">{{strings.learninggoals_edit_site_description}}</div>-->
<!--
        <ul class="learninggoals-edit-list">
            <li v-for="learninggoal in learninggoals">
                <div class="learninggoal-top-level">
                    <b>{{ learninggoal.name }}</b>
                    <p>{{ learninggoal.description }}
                    <router-link :to="{ name: 'learninggoal-edit', params: { learninggoalId: learninggoal.id }}">
                        <i class="icon fa fa-pencil fa-fw iconsmall" :title="strings.edit"></i>
                    </router-link>
                    </p>
                </div>
            </li>
        </ul>
        <div v-if="learninggoals !== null && learninggoals.length == 0">
            {{strings.learninggoals_edit_no_learninggoals}}
        </div>
-->
    </div>
</template>

<script>
    import { mapState } from 'vuex';

    export default {
        name: "learninggoal-edit",
        data: function() {
            return {
                modal: null,
            };
        },
        computed: mapState(['strings', 'learninggoal']),
        methods: {
            async showForm(learninggoalId = null) {
                let title = '';
                let args = {};
                if (learninggoalId) {
                    title = this.strings.learninggoal_form_title_edit;
                    args.learninggoalid = learninggoalId;
                } else {
                    title = this.strings.learninggoal_form_title_add;
                }
                this.$store.dispatch('fetchLearninggoal');

                // this.modal = new MFormModal('learninggoal_edit', title, this.$store.state.contextID, args);
                // try {
                //     await this.modal.show();
                //     const success = await this.modal.finished;
                //     if (success) {
                //         this.$store.dispatch('fetchLearninggoals');
                //     }
                //     this.$router.push({name: 'learninggoals-edit-overview'});
                // } catch (e) {
                //     // This happens when the modal is destroyed on a page change. Ignore.
                // } finally {
                //     this.modal = null;
                // }
            },
            checkRoute(route) {
                if (this.modal) {
                    this.modal.destroy(false);
                }

                if (route.name === 'learninggoal-edit') {
                    this.$nextTick(this.showForm.bind(this, route.params.learninggoalId));
                } else if (route.name === 'learninggoal-new') {
                    this.$nextTick(this.showForm.bind(this, null));
                }
            }
        },
        created: function() {
            this.$store.dispatch('fetchLearninggoal');
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
        padding-top: 1rem;
    }

    .learninggoals-edit-add {
        padding-top: 20px;
    }
</style>
