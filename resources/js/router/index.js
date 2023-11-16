import { createRouter, createWebHistory } from 'vue-router'
import store from "../store"

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    { path: '/', redirect: '/dashboard' },
    {
      path: '/',
      component: () => import('../layouts/default.vue'),
      meta: {
        requiresAuth: true,
      },
      children: [
        {
          path: 'dashboard',
          name: 'dashboard',
          component: () => import('../pages/dashboard.vue'),
        },
        {
          path: 'estimates',
          name: 'estimates',
          component: () => import('../pages/estimates.vue'),
        },
        {
          path: 'account-settings',
          component: () => import('../pages/account-settings.vue'),
        },
        {
          path: 'typography',
          component: () => import('../pages/typography.vue'),
        },
        {
          path: 'icons',
          component: () => import('../pages/icons.vue'),
        },
        {
          path: 'cards',
          component: () => import('../pages/cards.vue'),
        },
        {
          path: 'tables',
          component: () => import('../pages/tables.vue'),
        },
        {
          path: 'form-layouts',
          component: () => import('../pages/form-layouts.vue'),
        },
      ],
    },
    {
      path:'/estimates',
      component: () => import('../layouts/default.vue'),
      meta: {
        requiresAuth: true,
      },
      children: [
        {
          path: 'new',
          name: 'new_estimate',
          component: () => import('../pages/new_estimate.vue'),
        },
      ],
    },
    {
      path: '/',
      component: () => import('../layouts/blank.vue'),
      meta: {
        isGuest: true,
      },
      children: [
        {
          path: 'login',
          name: 'login',
          component: () => import('../pages/login.vue'),
        },
        {
          path: 'register',
          name: 'register',
          component: () => import('../pages/register.vue'),
        },
        {
          path: '/:pathMatch(.*)*',
          component: () => import('../pages/[...all].vue'),
        },
      ],
    },
  ],
})

router.beforeEach (( to, from, next) => {
  if (to.meta.requiresAuth && !store.state.user.token) {
    next({ name: "login" })
  } else if (store.state.user.token && to.meta.isGuest) {
    next({ name: "dashboard" })
  } else {
    next()
  }
})


export default router
