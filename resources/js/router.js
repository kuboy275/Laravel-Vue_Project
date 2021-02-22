import Vue from 'vue'
import VueRouter from 'vue-router';
Vue.use(VueRouter);


import Header from './components/Header';
import Footer from './components/Footer';
import MainInventory from './components/Inventory/MainInventory';
import MainHome from './components/Home/MainHome';
import MainShop from './components/Shop/MainShop';
import MainCarDetail from './components/CarDetail/MainCarDetail';
import MainContact from './components/Contact/MainContact';
import MainGallery from './components/Gallery/MainGallery'
import RelatedProducts from './components/RelatedProduct/RelatedProduct';
import PageNotFound from './components/404.vue';
import Blog from './components/Blog/MainBlog';
import BlogDetail from './components/Blog/BlogDetail';
import About from './components/About.vue';

import Sign from './components/SignIn/Sign';


const routes = [

    {
        path: '/sign',
        component: Sign
    },
    {
        name: 'header',
        path: '/header',
        component: Header
    },
    {
        name: 'About',
        path: '/about',
        component: About
    },
    {
        name: 'footer',
        path: '/footer',
        component: Footer
    },
    {
        name: 'MainHome',
        path: '/',
        component: MainHome,
        meta: {
            auth: true
        }
    },
    {
        name: 'MainInventory',
        path: '/MainInventory',
        component: MainInventory
    },
    {
        name: 'MainShop',
        path: '/MainShop',
        component: MainShop
    },
    {
        name: 'MainCarDetail',
        path: '/MainCarDetail/:id',
        component: MainCarDetail,
    },
    {
        name: 'MainContact',
        path: '/MainContact',
        component: MainContact
    },
    {
        name: 'MainGallery',
        path: '/MainGallery',
        component: MainGallery
    },
    {
        name: 'RelatedProducts',
        path: '/RelatedProducts',
        component: RelatedProducts
    },
    {
        name: 'MainBlog',
        path: '/MainBlog',
        component: Blog
    },
    {
        name: 'BlogDetail',
        path: '/blog-detail/:id',
        component: BlogDetail
    },
    {
        name: 'PageNotFound',
        path: '/PageNotFound',
        component: PageNotFound
    },

];



const router = new VueRouter({ mode: 'history', routes: routes });
export default router