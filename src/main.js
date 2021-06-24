import Vue from "vue";
import App from "./App.vue";
import VueRouter from "vue-router";
import "./registerServiceWorker";
import { BootstrapVue, IconsPlugin } from "bootstrap-vue";
import "bootstrap-vue/dist/bootstrap-vue.css";
import "../src/scss/bootstrap.css";
// Import for fontAwesome : svg-core, brand icons and vue
import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { fab } from "@fortawesome/free-brands-svg-icons";
import { fas } from '@fortawesome/free-solid-svg-icons';
import VueMeta from "vue-meta";

library.add(fab, fas);
// import { fas } from "@fortawesome/free-solid-svg-icons";


// library.add(fab, fas);
// fontawesome component neccesary to call
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

const resultsRoute = { path: "/results", name: "resultsRoute", component: results, props: true };
const indexRoute = { path: "/", component: index, props: true };
const pageNotFoundRoute = { path: "*", component: pageNotFound };
const webshopRoute = { path: "/webshop", component: webshop };

const routes = [resultsRoute, indexRoute, pageNotFoundRoute, webshopRoute];

const router = new VueRouter({
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    },

    mode: "history",
});



Vue.config.productionTip = false;

new Vue({
    router,
    render: function(h) {
        return h(App);
    },
}).$mount("#app");