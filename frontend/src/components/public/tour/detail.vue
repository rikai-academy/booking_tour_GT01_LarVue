<template>
  <div>
    <div class="boxed_wrapper">
      <layout-component v-if="tour">
        <section class="page-title style-three">
          <div class="auto-container">
            <div class="inner-box">
              <div class="rating">
                <span v-if="tour.star != 0">
                  <i class="fas fa-star text-warning"></i> {{ tour.star }}
                </span>
                <span v-else>
                  {{ $t('no_reviews') }}
                </span>
              </div>
              <h2 class="tour-detail-name">{{ tour.name }}</h2>
              <h3>{{ tour.amount | toCurrency }}<span> / 1 {{ $t('person') }}</span></h3>
            </div>
          </div>
        </section>
        <section class="tour-details">
          <div class="auto-container">
            <div class="row clearfix">
              <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="tour-details-content">
                  <div class="inner-box">
                    <div class="text">
                      <h2>{{ $t('trip_description') }}</h2>
                      <p>{{ tour.description }}</p>
                      <ul class="info-list clearfix">
                        <li><i class="far fa-clock"></i> {{ tour.totalDay }} {{ $t('day') }}</li>
                        <li><i class="far fa-user"></i> {{ tour.lowest_age }}+ {{ $t('age') }}</li>
                        <li><i class="far fa-user"></i> {{ $t('maximum') }} {{ tour.number_of_people }} {{ $t('person') }}</li>
                      </ul>
                    </div>
                  </div>
                  <div class="overview-inner">
                    <ul class="overview-list clearfix">
                      <li>
                        <span>{{ $t('destination') }}:</span>
                        <i class="overview-list-value">{{ tour.address }}</i>
                      </li>
                      <li>
                        <span>{{ $t('movement') }}:</span>
                        <i class="overview-list-value">{{ $t('someone_requested') }}</i>
                      </li>
                      <li>
                        <span>{{ $t('departure') }}:</span>
                        <i class="overview-list-value">{{ tour.departure }}</i>
                      </li>
                    </ul>
                  </div>
                  <div class="photo-gallery">
                    <div class="text">
                      <h2>{{ $t('some_pictures') }}</h2>
                    </div>
                    <div class="image-box clearfix">
                      <figure class="image">
                        <img
                          src="http://chanhphy.tk/assets/img/portfolio/s3.jpg"
                          alt=""
                        />
                        <a
                          href=""
                          class="view-btn lightbox-image"
                          data-fancybox="gallery"
                          ><i class="icon-Plus"></i
                        ></a>
                      </figure>
                    </div>
                  </div>
                  <div class="comment-box">
                    <div class="text">
                      <h2>{{ $t('reviews') }}</h2>
                      <p>
                        Enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex commodo consequat duis aute
                        irure dolor.
                      </p>
                    </div>
                      <div v-for="(item, index) in tour.ratings"
                        :key="index"
                        class="comment-form mb-3"
                      >
                        <span>
                          {{ item.created_at | formatDatetime }}
                        </span>
                        <p>
                          {{ item.star }} <i class="fas fa-star text-warning"></i>
                          {{ item.content }}
                        </p>
                      </div>
                    <form
                      action="tour-details.html"
                      method="post"
                      class="comment-form"
                    >
                      <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                          <span>{{ $t('number_of_stars') }}:</span>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <textarea
                            name="message"
                            :placeholder="$t('content')"
                          ></textarea>
                        </div>
                        <div
                          class="
                            col-lg-12 col-md-12 col-sm-12
                            form-group
                            message-btn
                          "
                        >
                          <button type="submit" class="theme-btn">
                            {{ $t('submit') }}
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="default-sidebar tour-sidebar ml-20">
                  <div class="form-widget">
                    <div class="widget-title">
                      <h3>Book This Tour</h3>
                    </div>
                    <form
                      action="tour-details.html"
                      method="post"
                      class="tour-form"
                    >
                      <div class="form-group">
                        <input
                          type="text"
                          name="name"
                          placeholder="Your Name"
                          required=""
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="email"
                          name="email"
                          placeholder="Your Email"
                          required=""
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          name="phone"
                          placeholder="Phone"
                          required=""
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          name="tickets"
                          placeholder="Tickets"
                          required=""
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="date"
                          data-date=""
                          data-date-format="DD MMMM YYYY"
                        />
                      </div>
                      <div class="form-group">
                        <textarea
                          name="message"
                          placeholder="Message"
                        ></textarea>
                      </div>
                      <div class="form-group message-btn">
                        <button type="submit" class="theme-btn">
                          Book Tour
                        </button>
                      </div>
                    </form>
                  </div>
                  <div class="sidebar-widget downloads-widget">
                    <div class="widget-title">
                      <h3>Downloads</h3>
                    </div>
                    <div class="widget-content">
                      <ul class="download-links clearfix">
                        <li>
                          <a href="destination-details.html"
                            >Travel Direction<i class="fas fa-download"></i
                          ></a>
                        </li>
                        <li>
                          <a href="destination-details.html"
                            >Documetation<i class="fas fa-download"></i
                          ></a>
                        </li>
                        <li>
                          <a href="destination-details.html"
                            >Logo & Assets<i class="fas fa-download"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="advice-widget">
                    <div
                      class="inner-box"
                      style="
                        background-image: url(images/resource/advice-1.jpg);
                      "
                    >
                      <div class="text">
                        <h2>Get <br />25% Off <br />On New York Tours</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </layout-component>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import LayoutComponent from '../layouts/LayoutComponent.vue'

export default {
  name: 'TourDetail',
  components: {
    LayoutComponent
  },
  created () {
    this.apiGetTour(this.$route.params['tourSlug'])
  },
  computed: {
    ...mapGetters({
      tour: 'tours/getTour'
    })
  },
  methods: {
    ...mapActions('tours', ['apiGetTour'])
  }
}
</script>

<style>
.page-title {
  background-image: url("~@/assets/images/background/page-title-2.jpg");
}
.bar-inner .count-bar .counted {
  background: #ff7c5b;
}
.advice-widget {
  background-image: url("~@/assets/images/resource/advice-1.jpg");
}
.tour-details-content .overview-inner .overview-list > li span {
  width: 180px;
}
.overview-list-value {
  font-size: 14px;
}
.comment-form-ratings {
  border-bottom: 1px solid #000;
}
.tour-detail-name {
  width: 70%;
}
@media screen and (max-width: 1024px){
  .tour-detail-name {
    width: 100%;
  }
}

</style>
