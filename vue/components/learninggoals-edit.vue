<template>
    <div class="learninggoals-edit">
        <div v-if="editingadding == false">
            <h3>{{strings.learninggoals_edit_site_name}}</h3>
            <div class="description">{{strings.learninggoals_edit_site_description}}</div>
                <span v-if="learninggoals && learninggoals[0].name !== 'not found' && learninggoals[0].description !== ''">
                    <ul class="learninggoals-edit-list">
                        <li v-for="singlelearninggoal in learninggoals" style="margin-bottom: 10px">
                            <div class="learninggoal-top-level" v-if="singlelearninggoal.name !== 'not found'">
                                <router-link :to="{ name: 'learninggoal-edit', params: { learninggoalId: singlelearninggoal.id }}" :title="strings.edit">
                                    <b>{{ singlelearninggoal.name }}</b>
                                </router-link>
                                <div>{{ singlelearninggoal.description }}
                                    <router-link :to="{ name: 'learninggoal-edit', params: { learninggoalId: singlelearninggoal.id }}" :title="strings.edit">
                                        <i class="icon fa fa-pencil fa-fw iconsmall m-r-0" :title="strings.edit"></i>
                                    </router-link>
                                    <a href="" v-on:click.prevent="duplicateLearninggoal(singlelearninggoal.id)" :title="strings.duplicate">
                                        <i class="icon fa fa-copy fa-fw iconsmall m-r-0" :title="strings.duplicate"></i>
                                    </a>
                                    <a href="" v-on:click.prevent="addToClipboard(singlelearninggoal.description)">
                                        <i
                                            class="icon fa fa-clipboard fa-fw iconsmall" :title="strings.toclipboard"></i>
                                    </a>
                                    <a href="" v-on:click.prevent="showDeleteConfirm(singlelearninggoal.id)" :title="strings.delete">
                                        <i class="icon fa fa-trash fa-fw iconsmall" :title="strings.delete"></i>
                                    </a>
                                </div>
                                <div class="alert-danger p-3 m-t-1 m-b-1" v-show="clicked[singlelearninggoal.id]">
                                    <div>{{strings.deletepromptpre}}{{singlelearninggoal.name}}{{strings.deletepromptpost}}</div>
                                    <div class="m-t-1">
                                        <button class="btn btn-danger m-r-0" @click="deleteLearninggoalConfirm(singlelearninggoal.id)" :title="strings.btnconfirmdelete">
                                        {{ strings.btnconfirmdelete }}</button>
                                        <button type=button @click="cancelDeleteConfirm(singlelearninggoal.id)" class="btn btn-secondary">{{strings.cancel}}</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </span>
                <span v-if="learninggoals && learninggoals[0].name == 'not found' && learninggoals[0].description == ''">
                    <p>&#160;</p>
                    <p v-for="singlelearninggoal in learninggoals">
                        {{strings.learninggoals_edit_no_learninggoals}}
                    </p>
                </span>
            <div class="learninggoals-edit-add">
                <router-link :to="{ name: 'learninggoal-new' }" tag="button" class="btn btn-primary">{{strings.learninggoal_form_title_add}}</router-link>
            </div>
        </div>
        <div v-if="editingadding == true">
            <h3>{{strings.learninggoal_form_title_edit}}</h3>
            <div class="learninggoals-edit-add-form">
                <div v-for="goal in learninggoal">
                    <p>

                        <input v-if="$store.state.learningGoalID == 0"
                               v-bind:placeholder="strings.goalnameplaceholder"
                               autofocus
                               type="text"
                               v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                               v-model="goalname">
                        <input v-else
                               type="text"
                               v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                               v-model="goal.name">
                    </p>
                    <p>
                        <input type="text"
                            v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                            v-model="goal.pre_thinking_skill">
                        <input type="text"
                            v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                            v-model="goal.thinking_skill"
                            class="thinking_skill"
                            @click="switchTab(0)">
                        <input type="text"
                            v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                            v-model="goal.content"
                            class="content"
                            @click="switchTab(1)">
                        <input v-if="$store.state.learningGoalID == 0"
                            type="text"
                            v-bind:placeholder="strings.subject"
                            v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                            v-model="goalsubject">
                        <input v-else
                            type="text"
                            v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                            v-model="goal.subject">
                        <input type="text"
                            v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                            v-model="goal.pre_resource">
                        <input type="text"
                            v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                            v-model="goal.resource"
                            class="resource"
                            @click="switchTab(2)">
                        <input type="text"
                            v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                            v-model="goal.pre_product">
                        <input type="text"
                            v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                            v-model="goal.product"
                            class="product"
                            @click="switchTab(3)">
                        <input type="text"
                            v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                            v-model="goal.pre_group">
                        <input type="text"
                            v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                            v-model="goal.group"
                            class="group"
                            @click="switchTab(4)">
                        .
                    </p>
                </div>
                <div v-for="tabelements in handlers">
                    <div v-for="tabs in tabelements">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"
                                :class=" { 'active show': selectedTabId === tab.id }"
                                v-for="(tab, index) in tabs"
                                :ref="'tab'+index"
                                :key="index"
                                @click="selectedTabId = tab.id">
                                <a class="nav-link" :href="'#link' + index" data-toggle="tab" role="tab" aria-selected="false"
                                   v-bind:style="[selectedTabId === tab.id ? {borderRightColor: tab.tabcolor, borderTopColor: tab.tabcolor, borderLeftColor: tab.tabcolor, 'border-top-width': '2px', 'padding-top': '8px'} : {}, {'color': tab.tabcolor}]">{{ tab.tabtitle }}</a>
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
                                                        <button class="pl-0" v-bind:style="[selectedTabId == tab.id ? {'background-color': 'transparent', 'border': '0', 'word-break': 'break-word', 'width': '100%'} : {}]"
                                                                v-on:click="fillword($event, tabs.id, index, word.targetinput, word.text)">{{ word.title }}</button>
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
                <div class="mt-3">
                    <button type=button @click.prevent="onSave" class="btn btn-primary" :title="strings.save">{{strings.save}}</button>
                    <button type=button @click.prevent="onCancel" class="btn btn-secondary" :title="strings.cancel">{{strings.cancel}}</button>
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
                goalname: '',
                goalsubject: '',
                editingadding: false,
                selectedTabId: 0,
                clicked: {},
            };
        },
        computed: mapState(['strings', 'learninggoals', 'learninggoal', 'handlers', 'learningGoalID']),
        watch: {
            goalname: function () {
                this.learninggoal[0].name = this.goalname
            },
            goalsubject: function () {
                this.learninggoal[0].subject = this.goalsubject
            }
        },
        methods: {
            switchTab: function (id) {
                this.$refs['tab'+id][0].click()
            },
            addToClipboard: function (data) {
                navigator.clipboard.writeText(data);
                this.$toasted.show(this.strings.toclipboarddone);
            },
            async showForm(learninggoalId = null, selectedTabId = 0) {
                this.goalname = '';
                this.goalsubject = '';
                let args = {};
                if (learninggoalId) {
                    this.$store.state.learningGoalID = learninggoalId;
                    this.$store.dispatch('fetchLearninggoal');
                    this.editingadding = true;
                    // Do something here in case of an edit.
                } else {
                    this.$store.dispatch('fetchLearninggoal');
                    this.editingadding = true;
                    // Do something here in case of an add.
                }
                if (selectedTabId) {
                    this.selectedTabId = selectedTabId;
                }
                window.scrollTo(0,0);
                // This has to happen after the save button is hit.
            },
            checkRoute(route) {
                if (route.name === 'learninggoal-edit') {
                    this.$nextTick(this.showForm.bind(this, route.params.learninggoalId, 0));
                } else if (route.name === 'learninggoal-new') {
                    this.$nextTick(this.showForm.bind(this, null, 0));
                }
            },
            onCancel(){
                this.$store.state.learningGoalID = 0;
                this.editingadding = false;
                this.selectedTabId = 0;
                this.$router.push({name: 'learninggoals-edit-overview'});
                this.$store.dispatch('fetchLearninggoals');
            },
            onSave() {
                let result = {
                    learninggoalid: this.$store.state.learningGoalID,
                    name: this.learninggoal[0].name,
                    pre_thinking_skill: this.learninggoal[0].pre_thinking_skill,
                    thinking_skill: this.learninggoal[0].thinking_skill,
                    content: this.learninggoal[0].content,
                    subject: this.learninggoal[0].subject,
                    pre_resource: this.learninggoal[0].pre_resource,
                    resource: this.learninggoal[0].resource,
                    pre_product: this.learninggoal[0].pre_product,
                    product: this.learninggoal[0].product,
                    pre_group: this.learninggoal[0].pre_group,
                    group: this.learninggoal[0].group,
                };
                this.$store.dispatch('saveLearninggoal', result);
                this.$store.state.learningGoalID = 0;
                this.editingadding = false;
                this.selectedTabId = 0;
                this.$router.push({name: 'learninggoals-edit-overview'});
                this.$store.dispatch('fetchLearninggoals');
                window.scrollTo(0,0);
            },
            fillword: function (event, id, index, field, text) {
                switch(field) {
                    case "content":
                        this.learninggoal[0].content = text;
                        break;
                    case "resource":
                        this.learninggoal[0].resource = text;
                        break;
                    case "product":
                        this.learninggoal[0].product = text;
                        break;
                    case "group":
                        this.learninggoal[0].group = text;
                        break;
                    default:
                        this.learninggoal[0].thinking_skill = text;
                }
            },
            showDeleteConfirm(index){
                // Dismiss other open confirm delete prompts.
                this.clicked = {};
                // Show the confirm delete prompt.
                this.$set(this.clicked, index, true)
            },
            cancelDeleteConfirm(index){
                if (this.clicked.hasOwnProperty(index))
                    this.$set(this.clicked, index, !this.clicked[index])
            },
            deleteLearninggoalConfirm(learninggoalid) {
                let result = {
                    learninggoalid: learninggoalid,
                };
                this.$store.dispatch('deleteLearninggoal', result);
                this.$store.dispatch('fetchLearninggoals');
                this.clicked = {};
            },
            duplicateLearninggoal(learninggoalid) {
                let result = {
                    learninggoalid: learninggoalid,
                };
                this.$store.dispatch('duplicateLearninggoal', result);
                this.$store.dispatch('fetchLearninggoals');
            }
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
    .learninggoals-edit-add-form > div > p > input {
        margin-bottom: 5px;
        font-size: 1rem;
    }
    input.thinking_skill[type="text"] {
        border: 1.5px solid #009;
        border-bottom: 2.5px solid #009;
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
        border-bottom: 2.5px solid #600;
    }
    input.content[type="text"]:focus {
        outline: none;
        border: 1.5px solid #600;
        border-bottom: 2.5px solid #600;
    }
    input.resource[type="text"] {
        border: 1.5px solid #090;
        border-bottom: 2.5px solid #090;
    }
    input.resource[type="text"]:focus {
        outline: none;
        border: 1.5px solid #090;
        border-bottom: 2.5px solid #090;
    }
    input.product[type="text"] {
        border: 1.5px solid #909;
        border-bottom: 2.5px solid #909;
    }
    input.product[type="text"]:focus {
        outline: none;
        border: 1.5px solid #909;
        border-bottom: 2.5px solid #909;
    }
    input.group[type="text"] {
        border: 1.5px solid #990;
        border-bottom: 2.5px solid #990;
    }
    input.group[type="text"]:focus {
        outline: none;
        border: 1.5px solid #990;
        border-bottom: 2.5px solid #990;
    }
    input[type="text"] {
        transition: border-color 250ms ease;
        appearance: none;
        border-radius: 4px;
        border: 1.5px solid #e9ebeb;
        border-bottom: 2.5px solid #e9ebeb;
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
    .fa-clipboard {
        cursor: pointer;
        margin-right: 0px;
    }
</style>
