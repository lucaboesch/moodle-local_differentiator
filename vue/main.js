import Vue from 'vue';
import VueRouter from 'vue-router';
import { store } from './store';
import notFound from './components/not-found';
import learninggoalEdit from './components/learninggoals-edit';
const exampleLazyLoading = () => import('./components/example-lazy-loading');

function init() {
    // We need to overwrite the variable for lazy loading.
    __webpack_public_path__ = M.cfg.wwwroot + '/local/differentiator/amd/build/';

    Vue.use(VueRouter);

    store.commit('setCourseModuleID', 1);
    store.commit('setContextID', 1);
    store.dispatch('loadComponentStrings');

    // You have to use child routes if you use the same component. Otherwise the component's beforeRouteUpdate
    // will not be called.
    const routes = [
        { path: '/', redirect: { name: 'learninggoals-edit-overview' }},
        { path: '/learninggoals/edit', component: learninggoalEdit, name: 'learninggoals-edit-overview', meta: { title: 'learninggoals_edit_site_name' },
            children: [
                { path: '/learninggoals/edit/:learninggoalId(\\d+)', component: learninggoalEdit, name: 'learninggoal-edit', meta: { title: 'learninggoal_form_title_edit' }},
                { path: '/learninggoals/edit/new', component: learninggoalEdit, name: 'learninggoal-new', meta: { title: 'learninggoal_form_title_add' }},
            ],
        },
        { path: '/lazy-loading', component: exampleLazyLoading},
        { path: '*', component: notFound, meta: { title: 'route_not_found' } },
    ];

    // base URL is /local/differentiator/edit.php/[learning goal id]/
    // const currenturl = window.location.pathname;
    // const base = currenturl.substr(0, currenturl.indexOf('.php')) + '.php/' + learninggoalid + '/';

    const currenturl = window.location.pathname;
    const base = currenturl;


    const router = new VueRouter({
        mode: 'history',
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
    });
}

export { init };
