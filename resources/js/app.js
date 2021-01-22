require('./bootstrap.js');
window.Vue = require('vue');

const EventBus = new Vue()
Object.defineProperties(Vue.prototype, {
    $bus: {
        get: function() {
            return EventBus;
        }
    }
});


import Vuex from 'vuex';
Vue.use(Vuex);
import storeData from './store/store.js'

const store = new Vuex.Store(
    storeData
)

import mainCss from '../css/main.css';
Vue.use(mainCss);

import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue)

import VueLazyload from 'vue-lazyload';
Vue.use(VueLazyload, {
    preLoad: 1.3,
    error: 'storage/footer/error.jpg',
    loading: 'photos/footer/id-loading-1.gif',
    loader: 'photos/footer/id-loading-1.gif',
    attempt: 1,
    throttleWait: 1000,
    listenEvents: ['scroll', 'wheel', 'mousewheel', 'resize', 'animationend', 'transitionend', 'touchmove']
})


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


var numeral = require("numeral");
Vue.filter("formatNumber", function(value) {
    return numeral(value).format("0,0");
    // displaying other groupings/separators is possible, look at the docs
});

import router from './router.js'

const app = new Vue(
    Vue.util.extend({ router, store }, App)
).$mount('#app');