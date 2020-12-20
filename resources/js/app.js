require('./bootstrap.js');
window.Vue = require('vue');

import mainCss from '../css/main.css';
Vue.use(mainCss);

import VueRouter from 'vue-router';
Vue.use(VueRouter);


import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue)

import { library } from '@fortawesome/fontawesome-svg-core'
import { fab } from '@fortawesome/free-brands-svg-icons'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(fab, fas, far)
Vue.component('font-awesome-icon', FontAwesomeIcon)


import VuePaginate from 'vue-paginate';
Vue.use(VuePaginate);




import VueAxios from 'vue-axios';
import axios from 'axios';
import App from './App.vue';
Vue.use(VueAxios, axios);


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
        path: '/vue',
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
        component: MainCarDetail
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
const app = new Vue(
    Vue.util.extend({ router }, App)
).$mount('#app');