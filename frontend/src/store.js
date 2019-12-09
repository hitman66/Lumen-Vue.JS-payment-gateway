import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    status: '',
    token: localStorage.getItem('token') || '',
    user : {}
  },
  mutations: {
  auth_request(state){
    state.status = 'loading'
  },
  auth_success(state, token, user){
    state.status = 'success'
    state.token = token
    state.user = user
  },
  auth_error(state){
    state.status = 'error'
  },
  logout(state){
    state.status = ''
    state.token = ''
  },
  },
  actions: {
  //this is where the user gets the token once the user successfully logged in
  login({commit}, user){
    return new Promise((resolve, reject) => {
      commit('auth_request')
      axios({url: 'http://localhost:9000/api/login', data: user, method: 'POST' })
      .then(resp => {
        const token = resp.data.token
        const user = resp.data.user
        localStorage.setItem('token', token)
        axios.defaults.headers.common['Authorization'] = token
        commit('auth_success', token, user)
        resolve(resp)
      })
      .catch(err => {
        commit('auth_error')
        localStorage.removeItem('token')
        reject(err)
      })
    })
  }, 
  //this is where the user will be redirected once the order input has been given in
  form_req({commit}, user){
    return new Promise(() => {
      commit('auth_request')
      axios({url: 'http://localhost:9000/api/reg_order', data: user, method: 'POST' })
      .then(function (response) {
        console.log(response.data.cus_order.hash);
        window.location.replace("http://localhost:8080/login/"+response.data.cus_order.hash);     	
      })
      .catch(err => {
        console.log(err);
      })
    })
  },  
  //this is where the order data been fetched
  order({commit}, order){
    return new Promise(() => {
      commit('auth_request')
      axios({url: 'http://localhost:9000/order/', data: order, method: 'POST' })
      .then(function (response) {
        console.log(response.data.cus_order);      
      })
      .catch(err => {
        console.log(err);
      })
    })
  }, 	
  },
  getters : {
  isLoggedIn: state => !!state.token,
  authStatus: state => state.status,
  }
})