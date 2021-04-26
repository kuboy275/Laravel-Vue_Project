import axios from 'axios'
import router from '@/router'


const state = {
    token: null,
    userId: null,
    user: {},
    error_email: "",
    error_name: "",
    error_password: "",
    err_match: "",
};

const getters = {
    IF_AUTH(state) {
        return state.token != null;
    },
    GET_USER(state) {
        return state.user;
    },
    GET_TOKEN(state) {
        return state.token;
    },
    ERR_NAME(state) {
        return state.error_name;
    },
    ERR_EMAIL(state) {
        return state.error_email;
    },
    ERR_PASSWORD(state) {
        return state.error_password;
    },
    ERR_NOT_MATCH(state) {
        return state.err_match;
    }
}
const actions = {

    register({ commit }, query) {
        axios.post("/api/auth/register", {
            name: query.name,
            email: query.email,
            password: query.password
        }).then(response => {
            commit("SET_AUTH", {
                token: response.data.token,
                user: response.data.user
            });
            router.push('/');
        }).catch(error => {
            console.log(URL);
            commit("SET_ERR", {
                email: error.response.data.errors.email,
                name: error.response.data.errors.name,
                password: error.response.data.errors.password,
            })
        })
    },

    login({ commit }, query) {
        axios.post("/api/auth/login", {
            email: query.email,
            password: query.password
        }).then(response => {
            commit("SET_AUTH", {
                token: response.data.token,
                user: response.data.user,
                err_match: "",
            })
            localStorage.setItem('token', response.data.token);
            localStorage.setItem('user', JSON.stringify(response.data.user));
            router.push('/')
        }).catch(error => {
            commit("SET_ERR", {
                message: error.response.data.message
            })
            console.log(error.response.data.message);
        })
    },
    logout({ commit }) {
        commit('CLEAR_AUTH');
        router.push('/login');

    },
}
const mutations = {
    SET_AUTH(state, userData) {
        state.token = userData.token;
        state.user = userData.user;
        state.err_match = userData.err_match;
    },
    SET_ERR(state, errorData) {
        state.error_password = errorData.password;
        state.error_email = errorData.email;
        state.error_name = errorData.name;
        state.err_match = errorData.message;
    },
    CLEAR_AUTH(state) {
        state.token = null;
        state.user = null;
    },
}


export default {
    state,
    getters,
    actions,
    mutations
};