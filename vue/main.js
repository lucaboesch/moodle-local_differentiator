import Vue from 'vue';
import VueRouter from 'vue-router';
import { store } from './store';
import notFound from './components/not-found';
import learninggoalsEdit from './components/learninggoals-edit';
import VueInputAutowidth from 'vue-input-autowidth';
import Toasted from 'vue-toasted';

function init() {
    // We need to overwrite the variable for lazy loading.
    __webpack_public_path__ = M.cfg.wwwroot + '/local/differentiator/amd/build/';

    Vue.use(VueRouter);
    Vue.use(VueInputAutowidth);
    Vue.use(Toasted, {position: 'bottom-center', duration: '1500'});

    store.commit('setContextID', 1);
    store.dispatch('loadComponentStrings');

    // You have to use child routes if you use the same component. Otherwise the component's beforeRouteUpdate
    // will not be called.
    const routes = [
        {
            path: '/',
            redirect: {
                name: 'learninggoals-edit-overview'
            }
        }, {
            path: '/learninggoals/edit',
            component: learninggoalsEdit,
            name: 'learninggoals-edit-overview',
            meta: { title: 'learninggoals_edit_site_name' },
            children: [
                {
                    path: '/learninggoals/edit/:learninggoalId(\\d+)',
                    component: learninggoalsEdit,
                    name: 'learninggoal-edit',
                    meta: { title: 'learninggoal_form_title_edit' },
                }, {
                    path: '/learninggoals/edit/new',
                    component: learninggoalsEdit,
                    name: 'learninggoal-new',
                    meta: { title: 'learninggoal_form_title_add' }
                 },
            ],
        }, {
            path: '*',
            component: notFound,
            meta: { title: 'route_not_found' }
        },
    ];

    // base URL is /local/differentiator/learninggoals/edit/[learning goal id]/
    // const currenturl = window.location.pathname;
    // const base = currenturl.substr(0, currenturl.indexOf('.php')) + '.php/' + learninggoalid + '/';

    const currenturl = window.location.pathname;
    const base = currenturl;

    const router = new VueRouter({
        mode: 'hash',
        routes,
        base
    });

    router.beforeEach((to, from, next) => {
        // Find a translation for the title.
        if (to.hasOwnProperty('meta') && to.meta.hasOwnProperty('title')) {
            if (store.state.strings.hasOwnProperty(to.meta.title)) {
                document.title = store.state.strings[to.meta.title];
            }
        }
        next()
    });

    new Vue({
        el: '#local-differentiator-app',
        data: {
        },
        store,
        router,
        editingadding: false,
        selectedTabId: 0,
    });
}

export { init };
