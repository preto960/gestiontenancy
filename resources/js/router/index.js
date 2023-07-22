import { createRouter, createWebHistory } from 'vue-router';

import Home from '../components/ExampleComponent.vue';
import Auth from "../components/auth/login.vue";
import store from '../store';
import routesTheme from './theme';

// Vue.use(VueRouter);
// import { createApp } from 'vue';
// const app = createApp();
// app.use(createRouter);

const routes = [
    //dashboard
    { 
        path: '/', 
        name: 'Home', 
        component: Home,
        meta: { layout: 'auth' },
    },
    {
        path: '/login',
        name: 'Login',
        component: Auth,
        meta: { layout: 'auth' },
    },
    {
        path: '/dashboard',
        name: 'Dashboard',
        component: () => import( '../components/home/tablero.vue')
    },

    ...routesTheme
];

const router = new createRouter({
    // mode: 'history',
    history: createWebHistory(),
    linkExactActiveClass: 'active',
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition;
        } else {
            return { left: 0, top: 0 };
        }
    },
});

router.beforeEach((to, from, next) => {
    if (to.meta && to.meta.layout && to.meta.layout == 'auth') {
        store.commit('setLayout', 'auth');
    } else {
        store.commit('setLayout', 'app');
    }
    next(true);
});

export default router;
