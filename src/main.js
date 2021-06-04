import Vue from "vue";
import App from "./App.vue";
import VueRouter from "vue-router";
import "./registerServiceWorker";
import { BootstrapVue, IconsPlugin } from "bootstrap-vue";
// Import Bootstrap an BootstrapVue CSS files (order is important)
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue);
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin);
// install router
Vue.use(VueRouter);

import results from "./components/pages/Results";
import index from "./components/pages/Index";
import pageNotFound from "./components/pages/PageNotFound"
import webshop from "./components/pages/Webshop"

const resultsRoute = { path: "/results", component: results };
const indexRoute = { path: "/", component: index };
const pageNotFoundRoute = { path: "*", component: pageNotFound };
const webshopRoute = { path: "/webshop", component: webshop }

const routes = [resultsRoute, indexRoute, pageNotFoundRoute, webshopRoute];


const router = new VueRouter({
    routes,
    mode: "history",
});

Vue.config.productionTip = false;

new Vue({
    router,
    render: function(h) { return h(App) },
}).$mount('#app')