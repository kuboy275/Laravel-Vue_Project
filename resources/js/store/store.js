import axios from "axios";
import createPersistedState from 'vuex-persistedstate';

const getDefaultState = () => {
    return {
        token: "",
        user: {}
    };
};

export default {
    strict: true,
    plugins: [createPersistedState()],
    stateAuth: getDefaultState(),

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
        user: {},
        token: '',
        cart: [],
        product: null,
    },
    getters: {
        cart(state) {
            return state.cart;
        },
        cartLength(state) {
            let length = 0;
            state.cart.forEach(item => {
                length += item.quantity
            });
            return length;
        },
        cartTotalPrice(state) {
            let total = 0;
            state.cart.forEach(item => {
                total += item.product.price * item.quantity;
            });
            return total;
        },
        isLoggedIn(state) {
            return state.token;
        },

        getUser(state) {
            return state.user;
        },

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

        removeProductFromCart(context, product) {
            context.commit("REMOVE_PRODUCT_FROM_CART", product);
        },

        removeAllCart(context) {
            context.commit("REMOVE_ALL");
        },

        login: ({ commit, dispatch }, { token, user }) => {
            commit('SET_TOKEN', token);
            commit('SET_USER', user);
            axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
        },

        logout: ({ commit }) => {
            commit('RESET', '');
        },

        addProductToCart(context, { product, quantity }) {
            context.commit('ADD_TO_CART', { product, quantity });
        },

        getApiCategory(context) {
            axios.get("/api/category")
                .then((response) => {
                    context.commit('categories', response.data.categories)
                })
        },

        getApiProducts(context) {
            axios.get("/api/products")
                .then((response) => {
                    context.commit('products', response.data.products)
                })
        },

        getApiProductImage(context) {
            axios.get("/api/product-image")
                .then((response) => {
                    context.commit('productImage', response.data.productImage)
                })
        },



        getApiSlideCustomer(context) {
            axios.get("/api/slide")
                .then((response) => {
                    context.commit('slideCustomer', response.data.slide);
                })
        },
        getApiLinks(context) {
            axios.get("/api/links")
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
            axios.get("/api/products/" + payload)
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
        },

        postApiContact(context, payload) {
            axios.post("/api/customer", payload)
        }
    },
    mutations: {
        REMOVE_ALL(state) {
            return state.cart = [];
        },
        REMOVE_PRODUCT_FROM_CART(state, product) {
            state.cart = state.cart.filter(item => {
                return item.product.id !== product.id
            })
        },

        ADD_TO_CART(state, { product, quantity }) {

            let productInCart = state.cart.find(item => {
                return item.product.id === product.id;
            })

            if (productInCart) {
                productInCart.quantity += quantity;
                return;
            }

            return state.cart.push({
                product,
                quantity
            })
        },

        SET_TOKEN: (stateAuth, token) => {
            stateAuth.token = token;
        },
        SET_USER(state, user) {
            state.user = user;
        },
        RESET: state => {
            Object.assign(state, getDefaultState());
        },

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