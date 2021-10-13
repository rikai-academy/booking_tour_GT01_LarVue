<template>
    <div>
        <div class="boxed_wrapper">
        <headerpage></headerpage>
        <!-- Page Title -->
        <section class="page-title centred" style="background-image: url(images/background/page-title-5.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <h1>{{ $t('SignUp') }}</h1>
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
                        <p>{{ $t('SignUp') }}</p>
                        <h2>{{ $t('Connect_with_us_for_Better_Tour') }}</h2>
                    </div>
                    <div class="form-inner">
                        <h3>{{ $t('SignUp') }}</h3>
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
                                        <label>{{ $t('name') }}</label>
                                        <input type="text" v-model="form.fullname" name="fullname" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <label>{{ $t('Your_email') }}</label>
                                        <input type="email" v-model="form.email" name="email" required="">
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
                                        <label>{{ $t('Confirm_Password') }}</label>
                                        <input type="password" v-model="form.password_confirmation" name="password2" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <div class="custom-check-box">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control material-checkbox">
                                                    <input type="checkbox" class="material-control-input">
                                                    <span class="material-control-indicator"></span>
                                                    <span class="description">{{ $t('I_accept') }} <a href="book-appointment.html">{{ $t('and') }}</a> {{ $t('Your_email') }} <a href="book-appointment.html">{{ $t('conditions') }}</a> {{ $t('and_general_policy') }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn">{{ $t('SignUp') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="other-text">{{ $t('Already_have_an_account') }}? <a href="login.html">{{ $t('SignIn') }}</a></div>
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
        password: '',
        fullname: '',
        password_confirmation: ''
      }
    }
  },
  methods: {
    ...mapActions({
      register: 'auth/register'
    }),
    async submit () {
      this.register(this.form).then(() => {
        this.$router.push('home')
      })
    }
  }
}
</script>

<style scoped>

</style>
