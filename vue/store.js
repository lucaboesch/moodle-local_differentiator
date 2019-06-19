import Vue from 'vue';
import Vuex from 'vuex';
import moodleAjax from 'core/ajax';
import moodleStorage from 'core/localstorage';
import Notification from 'core/notification';
import $ from 'jquery';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        courseModuleID: 0,
        contextID: 0,
        strings: {},
        handlers: null,
        learninggoals: null,
        learninggoal: null,
    },
    //strict: process.env.NODE_ENV !== 'production',
    mutations: {
        setCourseModuleID(state, id) {
            state.courseModuleID = id;
        },
        setContextID(state, id) {
            state.contextID = id;
        },
        setHandlers(state, ajaxdata) {
            state.handlers = ajaxdata;
        },
        setLearninggoals(state, ajaxdata) {
            state.learninggoals = ajaxdata;
        },
        setLearninggoal(state, ajaxdata) {
            state.learninggoal = ajaxdata;
        },
        setStrings(state, strings) {
            state.strings = strings;
        },
    },
    actions: {
        async loadComponentStrings(context) {
            const lang = $('html').attr('lang').replace(/-/g, '_');
            const cacheKey = 'local_differentiator/strings/' + lang;
            const cachedStrings = moodleStorage.get(cacheKey);
            if (cachedStrings) {
                context.commit('setStrings', JSON.parse(cachedStrings));
            } else {
                const request = {
                    methodname: 'core_get_component_strings',
                    args: {
                        'component': 'local_differentiator',
                        lang,
                    },
                };
                const loadedStrings = await moodleAjax.call([request])[0];
                let strings = {};
                loadedStrings.forEach((s) => {
                    strings[s.stringid] = s.string;
                });
                context.commit('setStrings', strings);
                moodleStorage.set(cacheKey, JSON.stringify(strings));
            }
        },
        async getHandlers(context) {
            const handlers = await ajax('local_differentiator_get_handlers');
            context.commit('setHandlers', handlers);
        },
        async fetchLearninggoals(context) {
            const learninggoals = await ajax('local_differentiator_get_learninggoals');
            context.commit('setLearninggoals', learninggoals);
        },
        async fetchLearninggoal(context) {
            const learninggoal = await ajax('local_differentiator_get_learninggoal');
            context.commit('setLearninggoal', learninggoal);
        },
    }
});

/**
 * Single ajax call to Moodle.
 */
export async function ajax(method, args) {
    const request = {
        methodname: method,
        args: Object.assign({
            id: 1
        }, args),
    };

    try {
        return await moodleAjax.call([request])[0];
    } catch (e) {
        Notification.exception(e);
        throw e;
    }
}
