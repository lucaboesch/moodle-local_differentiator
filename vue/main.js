/* jshint esversion: 11 */
/* global console, __webpack_public_path__ */
import { createApp, h } from 'vue';
import router from './router.js';
import { store } from './store';
import { RouterView } from 'vue-router';
import { plugin as VueInputAutowidth } from 'vue-input-autowidth';
import Vue3Toastify from 'vue3-toastify';

__webpack_public_path__ = M.cfg.wwwroot + '/local/differentiator/amd/build/';

function init() {

    store.commit('setContextID', 1);
    store.dispatch('loadComponentStrings').then(() => {});

    const appElement = document.getElementById('local-differentiator-app');
    if (!appElement) {
        console.error('Element #local-differentiator-app not found');
        return;
    }

    const app = createApp({
        render: () => h(RouterView),
        data() {
            return {
                editingadding: false,
                selectedTabId: 0
            };
        }
    }).use(router).use(store).use(VueInputAutowidth).use(Vue3Toastify);

    app.mount(appElement);
}
export { init };