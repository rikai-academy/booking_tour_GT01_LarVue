<template>
  <div class="boxed_wrapper">
    <layout-component>
      <section
        class="page-title centred"
        style="background-image: url(images/background/page-title-5.jpg)"
      >
        <div class="auto-container">
          <div class="content-box">
            <h1>{{ $t("review_create.create_review") }}</h1>
            <p>{{ $t("review_create.description_title") }}</p>
          </div>
        </div>
      </section>
      <section class="sidebar-page-container">
        <div class="auto-container">
          <div class="row clearfix">
            <div class="col">
              <form action="" @submit.prevent="submit" method="post">
                <div class="form-group">
                  <div>
                    <label for="input-category" class="text-dark">
                      {{ $t('review_create.categories') }}
                    </label>
                  </div>
                  <div
                    v-for="(item, index) in categories"
                    :key="index"
                    class="review-category"
                  >
                    <input
                      type="radio"
                      :id="index"
                      :value="item.id"
                      v-model="review.category_id"
                    >
                    <label :for="index" v-if="item.name === 'Place'">
                      {{ $t("review_create.place") }}
                    </label>
                    <label :for="index" v-else-if="item.name === 'Food'">
                      {{ $t("review_create.food") }}
                    </label>
                    <label :for="index" v-else>
                      {{ $t("review_create.news") }}
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input-title" class="text-dark">
                    {{ $t("review_create.title") }}
                  </label>
                  <input
                    type="text"
                    class="form-control"
                    name="input-title"
                    id="input-title"
                    v-model="review.title"
                    aria-describedby="helpeInputTitle"
                    :placeholder="$t('review_create.title')"
                  />
                  <small
                    id="helpeInputTitle"
                    class="form-text text-danger"
                    v-if="errors.title"
                  >
                    {{ $t('review_create.error_title') }}
                  </small>
                </div>
                <div class="form-group">
                  <label for="input-title" class="text-dark">
                    {{ $t("review_create.content") }}
                  </label>
                  <tinymce
                    id="content"
                    :other_options="tinyOptions"
                    v-model="review.content"
                  ></tinymce>
                  <small
                    id="helpeInputTitle"
                    class="form-text text-danger"
                    v-if="errors.content"
                  >
                    {{ $t('review_create.error_content') }}
                  </small>
                </div>
                <div class="col text-right">
                  <button type="submit" class="btn btn-primary">
                    {{ $t("submit") }}
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </layout-component>
  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import LayoutComponent from '../layouts/LayoutComponent.vue'
export default {
  name: 'ReviewCreate',
  components: { LayoutComponent },
  data () {
    return {
      tinyOptions: {
        height: 200
      },
      review: {
        category_id: 1,
        title: '',
        content: ''
      },
      errors: {
        title: false,
        content: false
      }
    }
  },
  created () {
    this.checkLogin()
  },
  mounted () {
    this.apiGetCategories()
  },
  computed: {
    ...mapGetters({
      categories: 'categories/getCategories',
      status: 'reviews/getStatus',
      isAuthenticated: 'auth/isAuthenticated'
    })
  },
  methods: {
    ...mapActions('categories', ['apiGetCategories']),
    ...mapActions('reviews', ['createReview']),
    submit () {
      if (this.validate()) {
        this.createReview(this.review)
        if (this.status === 201) {
          this.$toast.success('Vui lòng chọn danh mục của bài viết.')
        } else {
          this.$toast.error(this.$t('review_create.message_create_error'))
        }
      }
    },
    validate () {
      this.errors.title = false
      this.errors.content = false
      if (this.review.title === '') {
        this.errors.title = true
        return false
      }
      if (this.review.content === '') {
        this.errors.content = true
        return false
      }
      return true
    },
    checkLogin () {
      if (!this.isAuthenticated) {
        this.$router.push({ name: 'signinpage' })
        this.$toast.error(this.$t('error_check_login'))
      }
    }
  }
}
</script>

<style scoped>
.advice-widget {
  background-image: url("~@/assets/images/resource/advice-1.jpg");
}
.review-category {
  display: inline-block;
  padding-right: 25px;
}
</style>
