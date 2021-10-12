<template>
  <layout-component>
    <section
      class="page-title centred"
      style="background-image: url(images/background/page-title-5.jpg)"
    >
      <div class="auto-container">
        <div class="content-box">
          <h1>404</h1>
          <p>{{ $t('page_is_not_found') }}</p>
        </div>
      </div>
    </section>
    <section class="error-section centred">
      <div class="auto-container">
        <div class="inner-box">
          <h1>404</h1>
          <h2>{{ $t('page_is_not_found') }}. <br />{{ $t('does_not_exist_or_deleted') }}</h2>
          <a href="/" class="theme-btn">{{ $t('go_to_home_page') }}</a>
        </div>
      </div>
    </section>
  </layout-component>
</template>

<script>
import LayoutComponent from '../public/layouts/LayoutComponent.vue'
export default {
  components: { LayoutComponent }
}
</script>
