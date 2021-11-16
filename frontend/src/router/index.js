import Vue from 'vue';
import VueRouter from 'vue-router';

import DriverAbout from '../views/driver/DriverAbout.vue';
import DriverHome from '../views/driver/DriverHome.vue';
import DriverCalendar from '../views/driver/DriverCalendar.vue';
import DriverUpdate from '../views/driver/DriverUpdate.vue';
import Login from '../views/Login.vue';
import DesktopCalendar from '../views/desktop/DesktopCalendar.vue';
import AddEdit from '../views/appointment/AddEdit.vue';

Vue.use(VueRouter);

const routes = [
  {
    path: '/',
    name: 'Login',
    component: Login,
  },
  {
    path: '/driver',
    name: 'DriverHome',
    component: DriverHome,
    meta: { driver: true },
  },
  {
    path: '/calendar',
    name: 'DesktopCalendar',
    component: DesktopCalendar,
    meta: { admin: true },
  },
  {
    path: '/driver/calendar',
    name: 'DriverCalendar',
    component: DriverCalendar,
    meta: { driver: true },
  },
  {
    path: '/driver/about',
    name: 'DriverAbout',
    component: DriverAbout,
    meta: { driver: true },
  },
  {
    path: '/driver/update',
    name: 'DriverUpdate',
    component: DriverUpdate,
    meta: { driver: true },
  },
  {
    path: '/appointment',
    name: 'AddEdit',
    component: AddEdit,
    meta: { admin: true },
  },
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes,
});

export default router;
