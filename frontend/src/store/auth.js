import axios from 'axios'

export default {
  namespaced: true,
  state: {
    token: null,
    user: null
  },
  getters: {
    authenticated (state) {
      return state.token && state.user
    },

    user (state) {
      return state.user
    }
  },
  mutations: {
    SET_TOKEN (state, token) {
      state.token = token
    },
    SET_USER (state, data) {
      state.user = data
    }
  },
  actions: {
    async logIn ({dispatch}, credentials) {
      let response = await axios.post('auth/login', credentials)

      return dispatch('attempt', response.data.access_token)
    },

    async attempt ({commit, state}, token) {
      if (token) {
        commit('SET_TOKEN', token)
      }

      if (!state.token) {

      }
      try {
        let response = await axios.get('auth/user-profile', {
          headers: {
            'Authorization': 'Bearer ' + token
          }
        })
        localStorage.setItem('token', token)
        commit('SET_USER', response.data)
      } catch (e) {
        commit('SET_TOKEN', null)
        commit('SET_USER', null)
      }
    },

    logoutAction ({ commit }) {
      return axios.post('auth/logout', {
        headers: {
          'Authorization': 'Bearer ' + localStorage.removeItem('token')
        }
      })
        .then(() => {
          commit('SET_TOKEN', null)
          commit('SET_USER', null)
        })
    },

    async register ({dispatch}, credentials) {
      await axios.post('auth/register', credentials)
        .then(() => {
          dispatch('logIn', credentials)
        })
        .catch(err => {
          console.log(err)
        })
    }
  }
}
