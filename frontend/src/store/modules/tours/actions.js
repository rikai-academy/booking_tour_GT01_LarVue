import router from '../../../router'
import axios from 'axios'

export default {
  async apiGetTour ({ commit }, slug) {
    let urlRequest = 'tours/' + slug
    await axios.get(urlRequest).then(result => {
      commit('setTour', result.data)
    }).catch(_error => {
      console.log(_error.response)
      router.push({ name: 'notFound' })
    })
  }
}
