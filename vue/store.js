import Vue from 'vue';
import Vuex from 'vuex';
import moodleAjax from 'core/ajax';
import moodleStorage from 'core/localstorage';
import Notification from 'core/notification';
import $ from 'jquery';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        learningGoalID: 0,
        contextID: 0,
        strings: {},
        handlers: null,
        learninggoals: null,
        learninggoal: null,
    },
    //strict: process.env.NODE_ENV !== 'production',
    mutations: {
        // Mutations are synchroneous.
        setLearningGoalID(state, id) {
            state.learningGoalID = id;
        },
        setContextID(state, id) {
            state.contextID = id;
        },
        setStrings(state, strings) {
            state.strings = strings;
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
    },
    actions: {
        // Actions are asynchroneous.
        /**
         * Determines the current language.
         *
         * @param context
         *
         * @returns {Promise<void>}
         */
        async loadLang(context) {
            const lang = $('html').attr('lang').replace(/-/g, '_');
            context.commit('setLang', lang);
        },
        /**
         * Fetches the i18n data for the current language.
         *
         * @param context
         * @returns {Promise<void>}
         */
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
        /**
         * Fetches a learning goal.
         *
         * @param context
         *
         * @returns {Promise<void>}
         */
        async fetchLearninggoal(context) {
            const learninggoal = await ajax('local_differentiator_get_learninggoal',
                { userid: 0, learninggoalid: store.state.learningGoalID });
            context.commit('setLearninggoal', learninggoal);
        },
        /**
         * Fetches all of a user's learning goal.
         *
         * @param context
         *
         * @returns {Promise<void>}
         */
        async fetchLearninggoals(context) {
            const learninggoals = await ajax('local_differentiator_get_learninggoals');
            context.commit('setLearninggoals', learninggoals);
        },
        /**
         * Fetches the differentiator handlers.
         *
         * @param context
         *
         * @returns {Promise<void>}
         */
        async getHandlers(context) {
            const handlers = await ajax('local_differentiator_get_handlers');
            context.commit('setHandlers', handlers);
        },
        /**
         * Saves a learning goal.
         *
         * @param context
         * @param payload
         *
         * @returns {Promise<void>}
         */
        async saveLearninggoal(context, payload) {
            const result = await ajax('local_differentiator_save_learninggoal', payload);
            context.dispatch('fetchLearninggoals');
            return result.result;
        },
        /**
         * Deletes a learning goal.
         *
         * @param context
         * @param payload
         *
         * @returns {Promise<void>}
         */
        async deleteLearninggoal(context, payload) {
            const result = await ajax('local_differentiator_delete_learninggoal', payload);
            context.dispatch('fetchLearninggoals');
            return result.result;
        },
        /**
         * Duplicates a learning goal.
         *
         * @param context
         * @param payload
         *
         * @returns {Promise<void>}
         */
        async duplicateLearninggoal(context, payload) {
            const result = await ajax('local_differentiator_duplicate_learninggoal', payload);
            context.dispatch('fetchLearninggoals');
            return result.result;
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
            userid: 0,
            learninggoalid: store.state.learningGoalID,
        }, args),
    };

    try {
        return await moodleAjax.call([request])[0];
    } catch (e) {
        Notification.exception(e);
        throw e;
    }
}
