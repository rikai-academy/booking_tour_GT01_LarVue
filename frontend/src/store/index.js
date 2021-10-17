import Vue from 'vue'
import Vuex from 'vuex'
import moduleTours from './modules/tours/index'
import auth from './auth'
import moduleCategories from './modules/categories/index'
import moduleReviews from './modules/reivews/index'

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
    tours: moduleTours,
    categories: moduleCategories,
    reviews: moduleReviews
  }
})
