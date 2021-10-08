import Vue from 'vue'
import VueI18n from 'vue-i18n'
import vi from './locales/vi/index.js'
import en from './locales/en/index.js'

Vue.use(VueI18n)

export default new VueI18n({
  locale: localStorage.getItem('locale') || 'vi',
  messages: {
    vi: vi,
    en: en
  }
})
