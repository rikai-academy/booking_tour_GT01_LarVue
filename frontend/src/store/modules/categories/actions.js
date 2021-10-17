import axios from 'axios'

export default {
  async apiGetCategories ({ commit }) {
    let urlRequest = 'categories'
    await axios.get(urlRequest).then(result => {
      commit('setCategories', result.data)
    }).catch(_error => {
      console.log(_error.response)
    })
  }
}
