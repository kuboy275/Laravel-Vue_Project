import Vue from 'vue'
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import CreateComponent from './components/CreateComponent.vue';
import IndexComponent from './components/IndexComponent.vue';
import EditComponent from './components/EditComponent.vue';
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

const routes = [{
        name: 'header',
        path: '/header',
        component: Header
    },
    {
        name: 'footer',
        path: '/footer',
        component: Footer
    },
    {
        name: 'MainHome',
        path: '/',
        component: MainHome
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
        path: '/MainCarDetail',
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
        name: 'PageNotFound',
        path: '/PageNotFound',
        component: PageNotFound
    },
    {
        name: 'create',
        path: '/create',
        component: CreateComponent
    },
    {
        name: 'posts',
        path: '/posts',
        component: IndexComponent
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditComponent
    }
];

const router = new VueRouter({ mode: 'history', routes: routes });
export default router