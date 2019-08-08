<template>
    <div class="learninggoals-edit">
        <div v-if="editingadding == false">
            <h3>{{strings.learninggoals_edit_site_name}}</h3>
            <div class="description">{{strings.learninggoals_edit_site_description}}</div>
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
            <div class="learninggoals-edit-add">
                <router-link :to="{ name: 'learninggoal-new' }" tag="button" class="btn btn-primary">{{strings.learninggoal_form_title_add}}</router-link>
            </div>
        </div>
        <div v-if="editingadding == true">
            <h3>{{strings.learninggoal_form_title_edit}}</h3>
            <div class="learninggoals-edit-add-form">
                Some editing is on. ID: {{learninggoalid}}
                <div>
                    <button type=button @click.prevent="onSave"  class="btn btn-primary">{{strings.save}}</button>
                    <button type=button @click.prevent="onCancel" class="btn btn-secondary">{{strings.cancel}}</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapState } from 'vuex';

    export default {
        name: "learninggoals-edit",
        data: function() {
            return {
                editingadding: false,
                learninggoalid: 0,
                selectedTabID: 0 // Set from @click.
            };
        },
        computed: mapState(['strings', 'learninggoals']),
        methods: {
            async showForm(learninggoalId = null) {
                let title = '';
                // let args = {};
                if (learninggoalId) {
                    title = this.strings.learninggoal_form_title_edit;
                    this.learninggoalid = learninggoalId;
                    this.editingadding = true;
                    // Do something here in case of an edit.
                } else {
                    title = this.strings.learninggoal_form_title_add;
                    this.editingadding = true;
                    // Do something here in case of an add.
                }
                this.$store.dispatch('fetchLearninggoal');
                this.$store.dispatch('getHandlers');
                // This has to happen after the save button is hit.
                // this.$store.dispatch('fetchLearninggoals');
            },
            checkRoute(route) {
                if (route.name === 'learninggoal-edit') {
                    this.$nextTick(this.showForm.bind(this, route.params.learninggoalId));
                } else if (route.name === 'learninggoal-new') {
                    this.$nextTick(this.showForm.bind(this, null));
                }
            },
            onCancel(){
                this.editingadding = false;
                this.learninggoalid = 0;
                this.$router.push({name: 'learninggoals-edit-overview'});
                // TODO: Change back the URL.
            },
            onSave(){
                this.editingadding = false;
                this.learninggoalid = 0;
                this.$router.push({name: 'learninggoals-edit-overview'});
                // TODO: Change back the URL.
            }
        },
        created: function() {
            this.$store.dispatch('fetchLearninggoals');
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
