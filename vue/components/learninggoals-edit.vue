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
                <div v-for="tabelements in handlers">
                    <div v-for="tabs in tabelements">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"
                                :class=" { 'active show': selectedTabId === tab.id }"
                                v-for="(tab, index) in tabs"
                                :key="index"
                                @click="selectedTabId = tab.id">
                                <a class="nav-link" :href="'#link' + index" data-toggle="tab" role="tab" aria-selected="false"
                                   v-bind:style="[selectedTabId === tab.id ? {borderRightColor: tab.tabcolor, borderTopColor: tab.tabcolor, borderLeftColor: tab.tabcolor, 'border-top-width': '2px', 'padding-top': '7px'} : {}]">{{ tab.tabtitle }}</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane"
                                 :class=" { 'active show': selectedTabId === tab.id }"
                                 v-for="(tab, index) in tabs"
                                 :id="'#link' + index"
                                 role="tabpanel">
                                <div class="col-12 mt-3">
                                    <div class="row">
                                        <template v-for="category in tab.categories">
                                            <div class="col-2 mb-1 pr-1 pl-0" v-if="selectedTabId == category.parenttabid">
                                                <div class="pt-2 pr-2 pl-2 pb-0"
                                                     v-bind:style="[selectedTabId == tab.id ? {borderColor: tab.tabcolor, 'border-width': '1px', 'border-style': 'solid', 'border-radius': '.5rem'} : {}]">
                                                    <h5 class="pb-2" v-bind:style="[selectedTabId === tab.id ? {color: tab.tabcolor, 'word-break': 'break-word'} : {'word-break': 'break-word'}]">{{category.cattitle}}</h5>
                                                    <p v-for="word in category.words" v-bind:style="[selectedTabId === tab.id ? {borderTopColor: tab.tabcolor, 'border-top-width': '1px', 'border-top-style': 'solid'} : {}]" class="mb-2 pt-1">
                                                        <button v-bind:style="[selectedTabId == tab.id ? {'text-align': 'left', 'background-color': 'transparent', 'border': '0', 'padding-left': '0', 'word-break': 'break-word'} : {}]">{{ word.title }}</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                selectedTabId: 0,
            };
        },
        computed: mapState(['strings', 'learninggoals', 'handlers']),
        methods: {
            async showForm(learninggoalId = null, selectedTabId = 0) {
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
                if (selectedTabId) {
                    this.selectedTabId = selectedTabId;
                }
                // this.$store.dispatch('fetchLearninggoal');
                this.$store.dispatch('getHandlers');
                // This has to happen after the save button is hit.
                // this.$store.dispatch('fetchLearninggoals');
            },
            checkRoute(route) {
                if (route.name === 'learninggoal-edit') {
                    this.$nextTick(this.showForm.bind(this, route.params.learninggoalId, 0));
                } else if (route.name === 'learninggoal-new') {
                    this.$nextTick(this.showForm.bind(this, null, 0));
                }
            },
            onCancel(){
                this.editingadding = false;
                this.learninggoalid = 0;
                this.selectedTabId = 0;
                this.$router.push({name: 'learninggoals-edit-overview'});
                // TODO: Change back the URL.
            },
            onSave(){
                this.editingadding = false;
                this.learninggoalid = 0;
                this.selectedTabId = 0;
                this.$router.push({name: 'learninggoals-edit-overview'});
                // TODO: Change back the URL.
            },
        },
        created: function() {
            this.$store.dispatch('fetchLearninggoals');
            this.$store.dispatch('getHandlers');
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
    input.thinking_skill[type="text"] {
        border: 1.5px solid #009;
    }
    input.thinking_skill[type="text"]:focus {
        outline: none;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        --webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        --moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        border-color: #009;
        transition: border linear .2s, box-shadow linear .2s;
    }
    input.content[type="text"] {
        border: 1.5px solid #600;
    }
    input.content[type="text"]:focus {
        outline: none;
        border: 1.5px solid #600;
    }
    input.resource[type="text"] {
        border: 1.5px solid #090;
    }
    input.resource[type="text"]:focus {
        outline: none;
        border: 1.5px solid #090;
    }
    input.product[type="text"] {
        border: 1.5px solid #909;
    }
    input.product[type="text"]:focus {
        outline: none;
        border: 1.5px solid #909;
    }
    input.group[type="text"] {
        border: 1.5px solid #990;
    }
    input.group[type="text"]:focus {
        outline: none;
        border: 1.5px solid #990;
    }
    input[type="text"] {
        transition: border-color 250ms ease;
        appearance: none;
        border-radius: 4px;
        border: 1.5px solid #e9ebeb;
        padding: 0.15em 0.3em;
    }
    input[type="text"]:focus {
        outline: none;
        border-color: #999;
    }
    input[type="text"]::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: rgba(19, 40, 48, 0.54);
    }
</style>
