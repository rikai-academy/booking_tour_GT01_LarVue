<template>
    <div>
        <div class="boxed_wrapper">
            <headerpage></headerpage>
                    <!-- Page Title -->
        <section class="page-title centred" style="background-image: url(images/background/page-title-5.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact</h1>
                    <p>Discover your next great adventure</p>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- contact-info-section -->
        <section class="contact-info-section bg-color-1">
            <div class="anim-icon">
                <div class="icon anim-icon-1" style="background-image: url(images/shape/shape-3.png);"></div>
                <div class="icon anim-icon-2" style="background-image: url(images/shape/shape-3.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="single-info-box wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="fa fa-address-card"></i></div>
                                <h3>Address</h3>
                                <p>31 park street, 5th Avenue, Dhanmondy, Dhaka.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="single-info-box wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="fas fa-phone"></i></div>
                                <h3>Phone</h3>
                                <p><a href="tel:316668880001">+31 666 888 0001</a><br /><a href="tel:316668880023">+31 666 888 0023</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="single-info-box wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="fas fa-envelope-square"></i></div>
                                <h3>Email</h3>
                                <p><a href="mailto:info@example.com">info@example.com</a><br /><a href="mailto:info@example.com">info@example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-section end -->
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
