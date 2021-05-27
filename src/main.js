import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import './registerServiceWorker'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
// install router
Vue.use(VueRouter)

import RouterTest from './components/pages/RouterTestPage'
import Index from './components/pages/Index'

const RouterTestRoute = { path: '/router', component: RouterTest }
const IndexRoute = { path: '/', component: Index }


const routes = [
  RouterTestRoute,
  IndexRoute
]

const router = new VueRouter({
  routes,
  mode: 'history'
})

Vue.config.productionTip = false

new Vue({
  router,
  render: function (h) { return h(App) },
}).$mount('#app')
