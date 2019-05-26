<template>
    <div class="learninggoal-edit">
        <h3>{{strings.learninggoal_edit}}</h3>
        <div v-for="goal in learninggoal">
            <p><input type="text"
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
                       class="thinking_skill">
                <input type="text"
                       v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                       v-model="goal.content"
                       class="content">
                <input type="text"
                       v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                       v-model="goal.subject">
                <input type="text"
                       v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                       v-model="goal.pre_resource">
                <input type="text"
                       v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                       v-model="goal.resource"
                       class="resource">
                <input type="text"
                       v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                       v-model="goal.pre_product">
                <input type="text"
                       v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                       v-model="goal.product"
                       class="product">
                <input type="text"
                       v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                       v-model="goal.pre_group">
                <input type="text"
                       v-autowidth="{maxWidth: '960px', minWidth: '20px', comfortZone: 0}"
                       v-model="goal.group"
                       class="group">.
            </p>
        </div>
        <div>
            <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"
                :class=" { 'active show': selectedTab === tab }"
                v-for="(tab, index) in tabs"
                :key="index"
                @click="selectedTab = tab">
                <a class="nav-link" href="#linkroot" data-toggle="tab" role="tab" aria-selected="false">{{ tab }}</a>
            </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import { mapState } from 'vuex';

    export default {
        name: "learninggoal-edit",
        data: function() {
            return {
                modal: null,
                tabs: ['Thinking Skill', 'Content', 'Resources', 'Products', 'Groups'],
                selectedTab: 'Thinking Skill'  // set from @click
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
