import Vue from 'vue'
import Vuex from 'vuex'
import moduleTours from './modules/tours'
import auth from './auth'

Vue.use(Vuex)

export const store = new Vuex.Store({

  state: {

  },
  mutations: {

  },
  actions: {

  },
  modules: {
    auth,
    tours: moduleTours
  }
})
