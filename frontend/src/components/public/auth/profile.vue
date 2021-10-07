<template>
    <div>
        <div class="boxed_wrapper">
            <headerpage></headerpage>
                    <section class="page-title centred" style="background-image: url(images/background/page-title-5.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Profile</h1>
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
                        <p>Profile</p>
                    </div>
                    <div class="form-inner">
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
                                        <label>Address</label>
                                        <input type="text" name="fullname" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="fullname" required="">
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
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
