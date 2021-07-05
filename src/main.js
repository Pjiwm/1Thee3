//Vue imports
import Vue from "vue";
import App from "./App.vue";
import VueRouter from "vue-router";

//Service worker import for the PWA
import "./registerServiceWorker";
//Bootstrap/Bootstrap-vue import
import { BootstrapVue, IconsPlugin } from "bootstrap-vue";
import "bootstrap-vue/dist/bootstrap-vue.css";
//Custom scss, see bootstrap.scss
import "../src/scss/bootstrap.css";

//Fontawesome imports via the fortawasome packages.
import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { fab } from "@fortawesome/free-brands-svg-icons";
import { fas } from "@fortawesome/free-solid-svg-icons";
import VueMeta from "vue-meta";

//Enable packages
library.add(fab, fas);
Vue.component("font-awesome-icon", FontAwesomeIcon, fab, fas);
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
Vue.use(VueRouter);
Vue.use(VueMeta);

//Define routes. The routes are lazy loaded
const results = () =>
    import ('./components/pages/Results')
const index = () =>
    import ('./components/pages/Index')
const pageNotFound = () =>
    import ('./components/pages/PageNotFound')
const webshop = () =>
    import ('./components/pages/Webshop')

const resultsRoute = { path: "/results", name: "resultsRoute", component: results, props: true };
const indexRoute = { path: "/", component: index, props: true };
const pageNotFoundRoute = { path: "*", component: pageNotFound };
const webshopRoute = { path: "/webshop", component: webshop };

const routes = [resultsRoute, indexRoute, pageNotFoundRoute, webshopRoute];

const router = new VueRouter({
    routes,
    /**
     * @description Scrolls to location, unless parameter has no value,
     * the page will go to the top of the page. Is used to scroll to the top of the page
     * when going from the moodfinder (QuizFinished.vue) to QuizResult.vue
     * @param {*} savedPosition - the position you want to store.
     * @returns {object} - X and y location on website.
     */
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    },
// Ensures normal website routing behavior (eg 1T3.nl/webshop actually goes to the webshop).
    mode: "history",
});

Vue.config.productionTip = false;

new Vue({
  router,
  render: function(h) {
    return h(App);
  },
}).$mount("#app");
