import axios from "axios";

export default {

    state: {
        category: [],
        products: [],
        productImage: [],
        detailProduct: [],
        sliders: [],
        links: [],
        productsLatest: [],
        tags: [],
        productsTag: [],
        posts: [],
        postDetail: [],
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
        },
        getLinks(state) {
            return state.links;
        },
        getProductslatest(state) {
            return state.productsLatest;
        },
        getTags(state) {
            return state.tags;
        },
        getproductsTag(state) {
            return state.productsTag;
        },
        getPosts(state) {
            return state.posts;
        },
        getPostDetail(state) {
            return state.postDetail;
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



        getApiSlideCustomer(context) {
            axios.get("http://127.0.0.1:8000/api/slide")
                .then((response) => {
                    context.commit('slideCustomer', response.data.slide);
                })
        },
        getApiLinks(context) {
            axios.get("http://127.0.0.1:8000/api/links")
                .then((response) => {
                    context.commit("links", response.data.links);
                })
        },
        getApiProductsLatest(context) {
            axios.get("/api/product-latest")
                .then((response) => {
                    context.commit("productsLatest", response.data.data.products)
                })
        },
        getApiTags(context) {
            axios.get("/api/tags")
                .then((response) => {
                    context.commit("tags", response.data.tags)
                })
        },
        getApiProductsTag(context) {
            axios.get("/api/product-tag")
                .then((response) => {
                    context.commit("product_tag", response.data.product_tag);
                })
        },

        getProductById(context, payload) {
            axios.get("http://127.0.0.1:8000/api/products/" + payload)
                .then((response) => {
                    context.commit('detailProduct', response.data)
                })
        },

        getApiPosts(context) {
            axios.get("/api/posts")
                .then((response) => {
                    context.commit("posts", response.data.posts);
                })
        },

        getApiPostDetail(context, payload) {
            axios.get("/api/posts/" + payload)
                .then((response) => {
                    context.commit('detailPost', response.data)
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
        },

        links(state, payload) {
            return state.links = payload;
        },

        productsLatest(state, data) {
            return state.productsLatest = data
        },

        tags(state, data) {
            return state.tags = data
        },
        product_tag(state, data) {
            return state.productsTag = data;
        },

        posts(state, data) {
            return state.posts = data;
        },

        detailPost(state, data) {
            state.postDetail = data;
        }


    }

}