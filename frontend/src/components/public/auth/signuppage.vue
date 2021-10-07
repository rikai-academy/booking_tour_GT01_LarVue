<template>
    <div>
        <div class="boxed_wrapper">
        <headerpage></headerpage>
        <!-- Page Title -->
        <section class="page-title centred" style="background-image: url(images/background/page-title-5.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Sign Up</h1>
                    <p>Discover your next great adventure</p>
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
                        <p>Sign Up</p>
                        <h2>Connect with us for Better Tour</h2>
                    </div>
                    <div class="form-inner">
                        <h3>Sign Up with</h3>
                        <ul class="social-links clearfix">
                            <li><a href="signup.html"><span>Sign In with Facebook</span><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="signup.html"><span>Sign In with Google</span><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="signup.html"><span>Sign In with Twitter</span><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        <div class="text"><span>or</span></div>
                        <form action="signup.html" method="post" class="register-form">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="fullname" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="password2" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <div class="custom-check-box">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control material-checkbox">
                                                    <input type="checkbox" class="material-control-input">
                                                    <span class="material-control-indicator"></span>
                                                    <span class="description">I accept <a href="book-appointment.html">terms</a> and <a href="book-appointment.html">conditions</a> and general policy</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="other-text">Already have an account? <a href="login.html">Sign In</a></div>
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
export default {
  name: 'HelloWorld',
  components: {
    headerpage,
    footerpage
  }
}
</script>

<style scoped>

</style>
