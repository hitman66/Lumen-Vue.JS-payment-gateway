import Vue from 'vue'
import Router from 'vue-router'
import store from './store.js'
import Login from './views/Login.vue'
import Pay_confirm from './views/Pay_confirm.vue'
import form from './views/form.vue'

Vue.use(Router)

let router = new Router({
  mode: 'history',
  routes: [
    {
      path: '/login/:hash',
      name: 'login_view',
      component: Login
    },
    {
      path: '/payment_confirmation/:hash',
      name: 'payment_confirm_view',
      component: Pay_confirm,
      meta: {
        requiresAuth: true
      }
    },
    {
      path: '/form',
      name: 'form_view',
      component: form
    },
    {
      path: '/payment_confirmation',
      name: 'payment_confirmation',
      component: Pay_confirm,
      meta: {
        requiresAuth: true
      }
    }  
  ]
})

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.requiresAuth)) {
    if (store.getters.isLoggedIn) {
      next()
      return
    }
    next('/form')
  } else {
    next()
  }
})

export default router
