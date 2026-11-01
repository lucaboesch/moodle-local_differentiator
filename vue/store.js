/* jshint esversion: 11 */
/* global window, document */
import { createStore } from 'vuex';
import moodleAjax from 'core/ajax';
import Notification from 'core/notification';

// Moodle removed the `core/localstorage` AMD module in MDL-88762 (migrated to an ESM
// module), so this bundle can no longer depend on it. Use the browser's localStorage
// directly, guarded against environments where it is unavailable (e.g. private mode).
const moodleStorage = {
    get(key) {
        try {
            return window.localStorage.getItem(key);
        } catch (e) {
            return null;
        }
    },
    set(key, value) {
        try {
            window.localStorage.setItem(key, value);
            return true;
        } catch (e) {
            return false;
        }
    },
};

export const store = new createStore({
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
        // Mutations are synchronous.
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
            const lang = document.documentElement.lang.replace(/-/g, '_');
            context.commit('setLang', lang);
        },
        /**
         * Fetches the i18n data for the current language.
         *
         * @param context
         * @returns {Promise<void>}
         */
        async loadComponentStrings(context) {
            const lang = document.documentElement.lang.replace(/-/g, '_');
            // Include the jsrev so the cached strings are invalidated whenever the
            // Moodle JavaScript revision changes (e.g. on upgrade or cache purge).
            const jsrev = (window.M && window.M.cfg && window.M.cfg.jsrev) ? window.M.cfg.jsrev : '';
            const cacheKey = 'local_differentiator/strings/' + lang + '/' + jsrev;
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
