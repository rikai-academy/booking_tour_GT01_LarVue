import axios from 'axios'

export default {
  async createReview ({commit, rootState}, review) {
    let headers = {
      headers: { Authorization: `Bearer ${rootState.auth.token}` }
    }
    await axios.post('reviews', review, headers).then(result => {
      commit('setStatus', result.status)
    }).catch(error => {
      commit('setStatus', error.response.status)
      console.log(error.response)
    })
  }
}
