import Vue from "vue";
import App from "./App.vue";
import VueRouter from "vue-router";
import "./registerServiceWorker";
import { BootstrapVue, IconsPlugin } from "bootstrap-vue";
import "bootstrap-vue/dist/bootstrap-vue.css";
import "../src/scss/bootstrap.css";
import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { fab } from "@fortawesome/free-brands-svg-icons";
import { fas } from '@fortawesome/free-solid-svg-icons';
import VueMeta from "vue-meta";

library.add(fab, fas);
Vue.component("font-awesome-icon", FontAwesomeIcon, fab, fas);
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
Vue.use(VueRouter);
Vue.use(VueMeta);

const results = () =>
    import ('./components/pages/Results')
const index = () =>
    import ('./components/pages/Index')
const pageNotFound = () =>
    import ('./components/pages/PageNotFound')
const webshop = () =>
    import ('./components/pages/Webshop')
// router routes
const resultsRoute = { path: "/results", name: "resultsRoute", component: results, props: true };
const indexRoute = { path: "/", component: index, props: true };
const pageNotFoundRoute = { path: "*", component: pageNotFound };
const webshopRoute = { path: "/webshop", component: webshop };

const routes = [resultsRoute, indexRoute, pageNotFoundRoute, webshopRoute];

const router = new VueRouter({
    routes,
    /**
     * @description scrolls to location, unless parameter has no value,
     * the page will go to the top of the page.
     * @param {*} savedPosition - the position you wanna store
     * @returns {object} - x and y location on website
     */
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    },
// ensures we have actual normal website routing behavior.
    mode: "history",
});

Vue.config.productionTip = false;

new Vue({
    router,
    render: function(h) {
        return h(App);
    },
}).$mount("#app");