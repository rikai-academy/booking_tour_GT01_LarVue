<template>
    <div>
        <div class="boxed_wrapper">
            <headerpage></headerpage>
                    <!-- Page Title -->
        <section class="page-title centred" style="background-image: url(images/background/page-title-2.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Booking Process 3</h1>
                    <p>Discover your next great adventure</p>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- booking-section -->
        <section class="booking-section booking-process-3">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="booking-process-content mr-20">
                            <ul class="process-label clearfix">
                                <li><span>1.</span>Personal Info</li>
                                <li><span>2.</span>Payment Info</li>
                                <li class="current"><span>3.</span>Confirm</li>
                            </ul>
                            <div class="confirm-box">
                                <h3>Confirmation</h3>
                                <div class="inner-box centred">
                                    <div class="icon-box"><i class="fas fa-check"></i></div>
                                    <h3>Thanks for your booking!</h3>
                                    <p>You'll receive an email confirmation shortly at<br /><a href="mailto:info@example.com">info@example.com</a></p>
                                </div>
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

</style>
