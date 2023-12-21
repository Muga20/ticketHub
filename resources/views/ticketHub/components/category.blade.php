  <section class="rlr-section rlr-section__mb">
      <div class="container">
          <!-- Swiper -->
          <div class="rlr-carousel__items">
              <div class="swiper rlr-js-category-card-swiper">
                  <!-- Carousel header -->
                  <div class="rlr-section-header">
                      <!-- Section heading -->
                      <div class="rlr-section__title">
                          <h2 class="rlr-section__title--main">Select Category</h2>
                          <span class="rlr-section__title--sub">Sost Brilliant reasons Emprise should be your
                              one-stop-shop!</span>
                      </div>
                     
                  </div>

                  <div class="swiper-wrapper">
                      @foreach ($categories as $category)
                          <div class="swiper-slide" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                              <!-- Category card item -->
                              <article class="rlr-category-card"
                                  style="background-image: url('{{ asset($category->image) }}'); background-repeat: no-repeat; background-size: cover;">

                                  <div class="rlr-category-card__badge">
                                     
                                  </div>
                                  <div class="rlr-category-card__icon">
                                      <i class="rlr-icon-font flaticon-beach"> </i>
                                  </div>
                                  <header class="rlr-category-header">
                                      <div class="rlr-category-overlay">
                                          <a href="./product-detail-page.html" class="rlr-category-card__title">
                                              <h4>{{ $category->name }}</h4>
                                          </a>
                                          <a href="./product-detail-page.html" class="rlr-category-card__sub-title">
                                              <span>196 Activities</span>
                                          </a>
                                      </div>
                                  </header>


                              </article>
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </section>
