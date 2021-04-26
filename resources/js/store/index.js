import axios from 'axios'
import Vuex from 'vuex'
import Vue from 'vue'
import createPersistedState from "vuex-persistedstate"
import auth from './modules/auth'
import shop from './modules/shop'
Vue.use(Vuex)

const state = {
    blogs: '',
}
const getters = {
    GET_BLOGS(state) {
        return state.blogs;
    }
}
const actions = {
    blogs({ commit }) {
        axios.get('/api/posts').then(response => {
            commit("SET_BLOGS", response.data.data);
        })
    },
}
const mutations = {
    SET_BLOGS(state, data) {
        return state.blogs = data;
    }
}


export default new Vuex.Store({
    modules: {
        shop,
        auth,
    },
    plugins: [createPersistedState()],
    state,
    getters,
    actions,
    mutations,
})