// imports modules
import Vue from 'vue'
import { sync } from 'vuex-router-sync'

import componentsGlobal from './config/componentsGlobal'
componentsGlobal(Vue)

// import libraries
import Root from './root'
import router from './config/router'
import store from './config/store'

sync(store, router)

const app = new Vue({
  router,
  store,
  ...Root
})

export {app, router, store}
