import getters from './getters'
import actions from './actions'
import mutations from './mutations'

const state = {
  tour: null
}

const namespaced = true

export default {
  namespaced,
  state,
  getters,
  actions,
  mutations
}
