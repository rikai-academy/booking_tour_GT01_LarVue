<template>
  <div>
    <header class="main-header style-one">
      <!-- header-lower -->
      <div class="header-lower">
        <div class="auto-container">
          <div class="outer-box">
            <div class="logo-box">
              <figure class="logo">
                <a href="index.html"
                  ><img src="@/assets/images/logo.png" alt=""
                /></a>
              </figure>
            </div>
            <div class="menu-area clearfix">
              <!--Mobile Navigation Toggler-->
              <div class="mobile-nav-toggler">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
              </div>
              <nav class="main-menu navbar-expand-md navbar-light">
                <div
                  class="collapse navbar-collapse show clearfix"
                  id="navbarSupportedContent"
                >
                  <ul class="navigation clearfix">
                    <li class="current dropdown">
                      <router-link to="/">{{ $t('home') }}</router-link>
                    </li>
                    <li class="dropdown">
                      <a href="index.html">{{ $t('tours') }}</a>
                    </li>
                    <li class="dropdown">
                      <a href="index.html">{{ $t('reviews') }}</a>
                      <ul>
                        <li>
                          <router-link
                            :to="{ name: 'listreview', params: { id: 1 } }"
                          >
                            {{ $t('food') }}
                          </router-link>
                        </li>
                        <li>
                          <router-link
                            :to="{ name: 'listreview', params: { id: 1 } }"
                          >
                            {{ $t('place') }}
                          </router-link>
                        </li>
                        <li>
                          <router-link
                            :to="{ name: 'listreview', params: { id: 1 } }"
                          >
                            {{ $t('news') }}
                          </router-link>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <router-link to="/profile">{{ $t('profile') }}</router-link>
                      <ul>
                        <li>
                          <router-link to="/profile">{{ $t('my_profile') }}</router-link>
                        </li>
                        <li>
                          <router-link to="/mytour">{{ $t('my_tours') }}</router-link>
                        </li>
                      </ul>
                    </li>
                    <li><router-link to="/contact">{{ $t('contact') }}</router-link></li>
                    <li class="dropdown">
                      <a class="main-menu-laguage">
                        {{ $t('language') }}
                      </a>
                      <ul>
                        <li>
                          <a
                            class="main-menu-laguage"
                            @click="handleChangeLanguage('vi')"
                          >
                            Tiếng việt
                          </a>
                        </li>
                        <li>
                          <a
                            class="main-menu-laguage"
                            @click="handleChangeLanguage('en')"
                          >
                            English
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
            <ul class="menu-right-content clearfix">
              <li class="user-link">
                <router-link to="/signinpage"
                  ><i class="fas fa-sign-in-alt"></i
                ></router-link>
              </li>
              <li class="user-link">
                <router-link to="/signuppage"
                  ><i class="far fa-user"></i
                ></router-link>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!--sticky Header-->
      <div class="sticky-header">
        <div class="auto-container">
          <div class="outer-box">
            <div class="logo-box">
              <figure class="logo">
                <a href="index.html"
                  ><img src="@/assets/images/logo.png" alt=""
                /></a>
              </figure>
            </div>
            <div class="menu-area">
              <nav class="main-menu clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
              </nav>
            </div>
            <ul class="menu-right-content clearfix">
              <li class="search-box-outer">
                <div class="dropdown">
                  <button
                    class="search-box-btn"
                    type="button"
                    id="dropdownMenu4"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="far fa-search"></i>
                  </button>
                  <div
                    class="dropdown-menu search-panel"
                    aria-labelledby="dropdownMenu4"
                  >
                    <div class="form-container">
                      <form method="post" action="blog.html">
                        <div class="form-group">
                          <input
                            type="search"
                            name="search-field"
                            value=""
                            placeholder="Search...."
                            required=""
                          />
                          <button type="submit" class="search-btn">
                            <span class="fas fa-search"></span>
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </li>
              <li class="user-link">
                <a href="signup.html"><i class="fa fa-user"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
  </div>
</template>

<script>
export default {
  data () {
    const language = localStorage.getItem('locale') || 'vi'
    return {
      language: language
    }
  },
  methods: {
    handleChangeLanguage (language) {
      if (language !== this.language) {
        localStorage.setItem('locale', language)
        window.location.reload()
      }
    }
  }
}
</script>

<style scoped>
.main-menu-laguage {
  cursor: pointer;
}
</style>
