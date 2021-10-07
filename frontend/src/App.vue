<template>
  <div>
    <router-view/>
  </div>
</template>

<script>

export default {
  name: 'App',
  mounted () {
    const plugin = document.createElement('script')
    plugin.setAttribute(
      'src',
      '/assest/js/jquery.js',
      '/assest/js/popper.min.js',
      '/assest/js/bootstrap.min.js',
      '/assest/js/owl.js',
      '/assest/js/wow.js',
      '/assest/js/validation.js',
      '/assest/js/jquery.fancybox.js',
      '/assest/js/appear.js',
      '/assest/js/scrollbar.js',
      '/assest/js/jquery.nice-select.min.js',
      '/assest/js/jquery-ui.js'
    )
    plugin.async = true
    document.head.appendChild(plugin)
  }
}
</script>

<style>
@import './assets/css/flaticon.css';
@import './assets/css/bootstrap.css';
@import './assets/css/animate.css';
@import './assets/css/nice-select.css';
@import './assets/css/style.css';
@import './assets/css/responsive.css';
@import './assets/css/jquery.fancybox.min.css';
@import './assets/css/color.css';
@import './assets/css/owl.css';
/* @import './assets/css/font-awesome-all.css'; */

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
