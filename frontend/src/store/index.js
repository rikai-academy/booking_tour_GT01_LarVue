import Vue from 'vue'
import Vuex from 'vuex'
import moduleTours from './modules/tours'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    tours: moduleTours
  }
})
