import { createRouter, createWebHistory } from 'vue-router'
import HomePage from '../views/HomePage.vue'
import AboutUs from '../views/AboutUs.vue'
import HousesList from '../views/HousesList.vue'
import HomeApp from '../views/HomeApp.vue'
import ApartList from '../views/ApartList.vue'
import Login from '../views/Login.vue'
import Register from '../views/Register.vue'
import Profile from '../views/Profile.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomePage
    },
    {
      path: '/aboutus',
      name: 'aboutus',
      component: AboutUs
    },
    {
      path: '/HousesList',
      name: 'HousesList',
      component: HousesList
    },
    {
      path: '/HouseApp',
      name: 'HouseOnePage',
      component: HomeApp
    },
    {
      path: '/ApartList',
      name: 'ApartList',
      component: ApartList
    },
    {
      path: '/Login',
      name: 'Login',
      component: Login
    },
    {
      path: '/Register',
      name: 'Register',
      component: Register
    },
    {
      path: '/Profile',
      name: 'Profile',
      component: Profile
    }
  ]
});

export default router
