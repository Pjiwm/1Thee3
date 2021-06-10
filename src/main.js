import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router';
import './registerServiceWorker';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import '../src/scss/bootstrap.css';
// Import for fontAwesome : svg-core, brand icons and vue
import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { fab } from '@fortawesome/free-brands-svg-icons';
import VueMeta from 'vue-meta';

library.add(fab);
// fontawesome component neccesary to call
Vue.component('font-awesome-icon', FontAwesomeIcon, fab);
// Make BootstrapVue available throughout your project
Vue.component('font-awesome-icon', FontAwesomeIcon, fab);
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
Vue.use(VueRouter);
Vue.use(VueMeta);

import results from './components/pages/Results';
import index from './components/pages/Index';
import pageNotFound from './components/pages/PageNotFound';
import webshop from './components/pages/Webshop';

const resultsRoute = { path: '/results', name: 'results', component: results, props: true, };
const indexRoute = { path: '/', name: 'index', component: index };
const pageNotFoundRoute = { path: '*', name: 'pageNotFound', component: pageNotFound };
const webshopRoute = { path: '/webshop', name: 'webshop', component: webshop };

const routes = [resultsRoute, indexRoute, pageNotFoundRoute, webshopRoute];

const router = new VueRouter({
    routes,
    mode: 'history',
});

Vue.config.productionTip = false;

new Vue({
    router,
    render: function(h) {
        return h(App);
    },
}).$mount('#app');