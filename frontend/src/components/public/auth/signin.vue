<template>
    <div>
      <div class="boxed_wrapper">
        <headerpage></headerpage>
        <!-- Page Title -->
        <section class="page-title centred" style="background-image: url(images/background/page-title-5.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <h1>{{ $t('SignIn') }}</h1>
                    <p>{{ $t('Discover_your_next_great_adventure') }}</p>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- register-section -->
        <section class="register-section sec-pad">
            <div class="anim-icon">
                <div class="icon anim-icon-1" style="background-image: url(images/shape/shape-16.png);"></div>
                <div class="icon anim-icon-2" style="background-image: url(images/shape/shape-17.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-box">
                    <div class="sec-title centred">
                        <p>{{ $t('SignIn') }}</p>
                        <h2>{{ $t('Connect_with_us_for_Better_Tour') }}</h2>
                    </div>
                    <div class="form-inner">
                        <h3>{{ $t('SignIn') }}</h3>
                        <ul class="social-links clearfix">
                            <li><a href="signup.html"><span>{{ $t('Sign_In_with_Facebook') }}</span><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="signup.html"><span>{{ $t('Sign_In_with_Google') }}</span><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="signup.html"><span>{{ $t('Sign_In_with_Twitter') }}</span><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        <div class="text"><span>{{ $t('Or') }}</span></div>
                        <form @submit.prevent="submit" class="register-form">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <label>{{ $t('Your_email') }}</label>
                                        <input type="text" v-model="form.email" name="name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <label>{{ $t('Password') }}</label>
                                        <input type="password" v-model="form.password" name="password" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <div class="forgor-password text-right">
                                            <a href="login.html">{{ $t('Forget_Password') }}?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn">{{ $t('Submit') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="other-text">{{ $t('Already_have_an_account') }}? <a href="signup.html">{{ $t('SignUp') }}</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- register-section end -->
        <footerpage></footerpage>
      </div>
    </div>
</template>

<script>
import headerpage from '../layouts/headerpage'
import footerpage from '../layouts/footerpage'
import {mapActions} from 'vuex'
export default {
  name: 'HelloWorld',
  components: {
    headerpage,
    footerpage
  },
  data () {
    return {
      form: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
    ...mapActions({
      logIn: 'auth/logIn'
    }),
    async submit () {
      this.logIn(this.form).then(() => {
        this.$router.replace({ name: 'home' })
      })
    }
  }
}
</script>

<style scoped>

</style>
