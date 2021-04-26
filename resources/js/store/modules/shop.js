import axios from 'axios';
// import router from '@/router'

const state = {
    products: [],
    product_detail: '',
    image_detail: '',
    category: '',
};


const getters = {
    GET_PRODUCT_DETAIL(state) {
        return state.product_detail;
    },
    GET_PRODUCTS(state) {
        return state.products;
    },
    GET_IMAGE_DETAIL(state) {
        return state.image_detail;
    },
    GET_CATEGORY(state) {
        return state.category;
    }

};

const actions = {

    products({ commit }) {
        axios.get('/api/products/latest').then(response => {
            commit("SET_PRODUCTS", response.data.data);
        })
    },
    category({ commit }) {
        axios.get('/api/products/category').then(response => {
            commit("SET_CATEGORY", response.data.data);
        })
    },

    productDetail({ commit }, query) {
        axios.get('/api/products/index/' + query).then(response => {
            commit("SET_PRODUCT_DETAIL", response.data.data);
        }).catch(error => {
            console.log("error", error);
        })
    },

    imageDetail({ commit }, query) {
        axios.get('/api/products/images/' + query).then(response => {
            commit("SET_IMAGE_DETAIL", response.data.data);
        })
    }

};


const mutations = {
    SET_PRODUCTS(state, products) {
        return state.products = products;
    },
    SET_PRODUCT_DETAIL(state, data) {
        return state.product_detail = data;
    },
    SET_IMAGE_DETAIL(state, data) {
        return state.image_detail = data;
    },
    SET_CATEGORY(state, data) {
        return state.category = data;
    }
};


export default {
    state,
    getters,
    actions,
    mutations
};