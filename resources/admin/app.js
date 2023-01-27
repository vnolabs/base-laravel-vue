require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VTooltip from 'v-tooltip';
Vue.use(VTooltip);

import VueI18n from 'vue-i18n';
Vue.use(VueI18n);

import NProgress from 'nprogress';

import routes from './router';
const router = new VueRouter({
    routes,
    mode: 'history'
});

import { globalVariable } from './mixin';
globalVariable(Vue);

global.APP_NAME = 'Administration';

router.beforeResolve((to, from, next) => {
    if (to.path) {
        NProgress.start();
    }
    next();
});

router.afterEach(() => {
    setTimeout(() => NProgress.done(), 100)
});

import MainApp from './components/layouts/Main.vue';
const app = new Vue({
    el: '#app',
    router,
    render: h => h(MainApp)
});

require('./assets/js/lib.vendor.bundle');
require('./theme');
