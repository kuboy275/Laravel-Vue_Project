import axios from "axios";

export default {

    state: {
        category: [],
        products: [],
        productImage: [],
        detailProduct: [],
        sliders: [],
    },
    getters: {
        getCategory(state) {
            return state.category;
        },
        getProducts(state) {
            return state.products;
        },
        getProductImage(state) {
            return state.productImage;
        },
        detailProduct(state) {
            return state.detailProduct
        },
        getSlide(state) {
            return state.sliders;
        }
    },
    actions: {

        getApiCategory(context) {
            axios.get("http://127.0.0.1:8000/api/category")
                .then((response) => {
                    context.commit('categories', response.data.categories)
                })
        },

        getApiProducts(context) {
            axios.get("http://127.0.0.1:8000/api/products")
                .then((response) => {
                    context.commit('products', response.data.products)
                })
        },

        getApiProductImage(context) {
            axios.get("http://127.0.0.1:8000/api/product-image")
                .then((response) => {
                    context.commit('productImage', response.data.productImage)
                })
        },

        getProductById(context, payload) {
            axios.get("http://127.0.0.1:8000/api/products/" + payload)
                .then((response) => {
                    context.commit('detailProduct', response.data)
                })
        },

        getApiSlideCustomer(context) {
            axios.get("http://127.0.0.1:8000/api/slide")
                .then((response) => {
                    context.commit('slideCustomer', response.data.slide);
                })
        }
    },
    mutations: {
        categories(state, data) {
            return state.category = data;
        },

        products(state, data) {
            return state.products = data;
        },

        productImage(state, data) {
            return state.productImage = data;
        },

        detailProduct(state, payload) {
            return state.detailProduct = payload;
        },

        slideCustomer(state, payload) {
            return state.sliders = payload;
        }

    }

}