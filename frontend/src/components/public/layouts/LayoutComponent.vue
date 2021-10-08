<template>
  <div class="LayoutDefault">
    <header>
      <header-page></header-page>
    </header>

    <main>
      <slot></slot>
    </main>

    <footer>
      <footer-page></footer-page>
    </footer>
  </div>
</template>

<script>
import HeaderPage from './headerpage.vue'
import FooterPage from './footerpage.vue'

export default {
  name: 'layout',
  components: {
    HeaderPage,
    FooterPage
  }
}
</script>
