import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/views/Home.vue'
import Redirect from '@/views/Redirect.vue'
import PrivacyPolicy from '@/views/PrivacyPolicy.vue'
import Loading from '@/views/Loading.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },    
    {
      path: '/redirect',
      name: 'Redirect',
      component: Redirect
    },    
    {
      path: '/privacy-policy',
      name: 'Privacy Policy',
      component: PrivacyPolicy
    }, 
    { path: "/:pathMatch(.*)*", component: Loading }
  ]
})

export default router
