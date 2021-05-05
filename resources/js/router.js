import Vue from 'vue'
import VueRouter from 'vue-router'
import store from './store/index'
import '../../node_modules/nprogress/nprogress.css'
import NProgress from 'nprogress'

Vue.use(VueRouter);
Vue.use(NProgress);

import PageNotFound from './components/404';

import home from './pages/home/home';
import shop from './pages/shop/shop';
import shopdetail from './pages/detail/shopdetail';
import confirm from './pages/Confirm';
import checkout from './pages/Checkout';
import blog from './pages/blog/Blog';
import BlogDetail from './pages/blog/BlogDetail';
import gallery from './pages/gallery';
import about from './pages/About';
import UserDash from './pages/Dash';
import login from './pages/sign/login';
import register from './pages/sign/register';


const isAuth = (to, from, next) => {
    if (store.getters.IF_AUTH == false) {
        next();
    } else {
        next({ name: 'home' })
    }
};




const routes = [{
        path: "*",
        name: "notfound",
        component: PageNotFound
    },
    {
        name: 'home',
        path: '/',
        component: home
    },
    {
        name: 'shop',
        path: '/shop',
        component: shop
    },
    {
        name: 'shop-detail',
        path: '/shop-detail/:id',
        component: shopdetail
    },
    {
        name: 'checkout',
        path: '/checkout',
        component: checkout,
        props: (route) => ({ pid: route.query.pid })
    },
    {
        name: 'confirm',
        path: '/confirm',
        component: confirm,
    },
    {
        name: 'blog',
        path: '/blog',
        component: blog,
    },
    {
        name: 'gallery',
        path: '/gallery',
        component: gallery,
    },

    {
        name: 'login',
        path: '/login',
        component: login,
        beforeEnter: isAuth,
    },
    {
        name: 'register',
        path: '/register',
        component: register,
        beforeEnter: isAuth,
    },
    {
        name: 'user-dash',
        path: '/user-dash',
        component: UserDash,
        meta: {
            requireAuth: true,
        }
    },
    {
        name: 'blog-detail',
        path: '/blog-detail/:id',
        component: BlogDetail
    },
    {
        name: 'about',
        path: '/about',
        component: about
    },



];

const router = new VueRouter({
    mode: 'history',
    routes: routes,
    scrollBehavior(to, from, savedPosition) {
        return { x: 0, y: 0, behavior: 'smooth' }
        // return desired position
    }
});


router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requireAuth)) {
        if (store.getters.GET_TOKEN == null) {
            next({
                name: 'login',
                params: { nextUrl: to.path },
            })
        } else {
            let user = store.getters.GET_USER;
            if (to.matched.some(record => record.meta.is_admin)) {
                if (user.is_admin == 1) {
                    next()
                } else {
                    window.location.replace("/")
                }
            }
            next();
        }
    } else {
        next();
    }
})


router.beforeResolve((to, from, next) => {
    if (to.name) {
        NProgress.start();
        NProgress.set(1);
        NProgress.inc();
        NProgress.configure({ ease: 'ease', speed: 2200 });
        NProgress.configure({ trickleSpeed: 3000 });

    }
    next();
})

router.afterEach((to, from) => {
    NProgress.done();
})



export default router