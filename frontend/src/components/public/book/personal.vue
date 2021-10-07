<template>
    <div>
        <div class="boxed_wrapper">
            <headerpage></headerpage>
                    <!-- Page Title -->
        <section class="page-title centred">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Booking Process 1</h1>
                    <p>Discover your next great adventure</p>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- booking-section -->
        <section class="booking-section booking-process-1">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="booking-process-content mr-20">
                            <ul class="process-label clearfix">
                                <li class="current"><span>1.</span>Personal Info</li>
                                <li><span>2.</span>Payment Info</li>
                                <li><span>3.</span>Confirm</li>
                            </ul>
                            <div class="inner-box">
                                <h3>Personal Info</h3>
                                <form action="booking-2.html" method="post" class="processing-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="fname" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lname" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Address 1</label>
                                                <input type="text" name="address1" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Address 2</label>
                                                <input type="text" name="address2" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Zip Code</label>
                                                <input type="text" name="zip" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" name="state" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" name="country" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group message-btn text-right">
                                                <button type="submit" class="theme-btn">Next<i class="fa fa-angle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="process-sidebar ml-20">
                            <div class="content-box">
                                <h3>Tour Summary</h3>
                                <figure class="image-box"><img src="@/assets/images/resource/sidebar-1.jpg" alt=""></figure>
                                <h4>Mascow Red City Land</h4>
                                <ul class="info clearfix">
                                    <li><i class="far fa-calendar-alt"></i>From: <span>25 Oct, 2020</span></li>
                                    <li><i class="far fa-calendar-alt"></i>To: <span>29 Oct, 2020</span></li>
                                    <li><i class="fa fa-user"></i>Guests: <span>2 Adults, 1 Child</span></li>
                                </ul>
                                <div class="price"><h4>Total: $170.00</h4></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- booking-section end -->
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
.page-title .centred{
    background-image: url('~@/assets/images/background/page-title-2.jpg');
}
</style>
