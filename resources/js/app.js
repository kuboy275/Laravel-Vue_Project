require('./bootstrap.js');
window.Vue = require('vue');


Vue.config.productionTip = false;

import Vue from 'vue';
import "bootstrap"
import 'es6-promise/auto'
import '../css/main.css';
import router from './router.js'
import VueLazyload from 'vue-lazyload';
import VueAxios from 'vue-axios';
import axios from 'axios';
import App from './App.vue';
import store from './store'


Vue.use(VueLazyload, {
    preLoad: 1,
    error: 'images/gif-404.gif',
    loading: 'images/gif-loader.gif',
    attempt: 1
});
Vue.use(VueAxios, axios);

var numeral = require("numeral");
Vue.filter("formatNumber", function(value) {
    return numeral(value).format("0,0");
});
const app = new Vue(
    Vue.util.extend({ router, store }, App)
).$mount('#app');