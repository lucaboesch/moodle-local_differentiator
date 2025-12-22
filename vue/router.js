/* jshint esversion: 11 */
/* global console */
import { createRouter, createWebHashHistory } from 'vue-router';
import learninggoalsEdit from "./components/learninggoals-edit.vue";
import notFound from "./components/not-found.vue";
import { store } from "./store";

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
                path: ':learninggoalId(\\d+)',
                component: learninggoalsEdit,
                name: 'learninggoal-edit',
                meta: { title: 'learninggoal_form_title_edit' },
            }, {
                path: 'new',
                component: learninggoalsEdit,
                name: 'learninggoal-new',
                meta: { title: 'learninggoal_form_title_add' }
            },
        ],
    }, {
        path: '/:pathMatch(.*)*',
        component: notFound,
        meta: { title: 'route_not_found' }
    },
];


const router = createRouter({
    history: createWebHashHistory(),
    routes,
});

router.beforeEach((to, from, next) => {

    // Find a translation for the title.
    const matchedWithTitle = [...to.matched].reverse().find(record => record.meta?.title);
    const titleKey = matchedWithTitle?.meta?.title;
    if (titleKey && store.state?.strings?.[titleKey]) {
        document.title = store.state.strings[titleKey];
    }
    next();
});

export default router;
