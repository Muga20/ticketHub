@include('ticketHub.include.navbar')

<main id="rlr-main" class="rlr-main--fixed-top">
    @include('ticketHub.constants.hero')
    @include('ticketHub.components.events')
    @include("ticketHub.components.category")
    @include("ticketHub.components.galary")
      <!-- Best Sellers -->
      <section class="rlr-section rlr-section__mb rlr-section__cards">
        <div class="container">
          <!-- Section heading -->
          <div class="rlr-section-header">
            <!-- Section heading -->
            <div class="rlr-section__title">
              <h2 class="rlr-section__title--main">Best Seller</h2>
              <span class="rlr-section__title--sub">Sost Brilliant reasons Emprise should be your one-stop-shop!</span>
            </div>
            <div class="button-row">
              <a href="./search-results--left-sidebar.html" class="btn rlr-button rlr-button--large rlr-button--rounded rlr-button--brand"> Check All </a>
            </div>
          </div>
          <div class="row rlr-featured__cards">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="250" data-aos-duration="700">
              <!-- Featured prodcut card -->
              <article class="rlr-product-card rlr-product-card--featured" itemscope itemtype="https://schema.org/Product">
                <!-- Image -->
                <figure class="rlr-product-card__image-wrapper">
                  <img itemprop="image" data-src="./assets/images/product-images/small/featured-thumb-01.jpg" data-srcset="./assets/images/product-images/small/featured-thumb-01.jpg" data-sizes="auto" class="lazyload" alt="" />
                </figure>
                <!-- Card body -->
                <div class="rlr-product-card--featured__inner">
                  <span class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right"> 4.9 </span>
                  <div class="rlr-product-card--featured__body card-img-overlay">
                    <div class="rlr-product-card--featured__duration">
                      <p class="body">10 Days | 09 Nights</p>
                      <h4 class="type-h4">$895.50</h4>
                    </div>
                    <div class="rlr-product-detail-header__actions">
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--no-bg rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="./product-detail-page.html" class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand"> Explore </a>
                    </div>
                  </div>
                </div>
                <a href="./product-detail-page.html" class="rlr-product-card__anchor rlr-product-card__anchor--featured"></a>
              </article>
              <!-- Summary -->
              <div class="rlr-product-card--featured__summary">
                <h4 class="type-h6-semi-bold">Train Tour Skyline</h4>
                <p class="type-body">Check Out Daily Deals and Promotion on Hotels. Easy &amp; Fast Booking</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="300" data-aos-duration="725">
              <!-- Featured prodcut card -->
              <article class="rlr-product-card rlr-product-card--featured" itemscope itemtype="https://schema.org/Product">
                <!-- Image -->
                <figure class="rlr-product-card__image-wrapper">
                  <img itemprop="image" data-src="./assets/images/product-images/small/featured-thumb-02.jpg" data-srcset="./assets/images/product-images/small/featured-thumb-02.jpg" data-sizes="auto" class="lazyload" alt="" />
                </figure>
                <!-- Card body -->
                <div class="rlr-product-card--featured__inner">
                  <span class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right"> 4.9 </span>
                  <div class="rlr-product-card--featured__body card-img-overlay">
                    <div class="rlr-product-card--featured__duration">
                      <p class="body">10 Days | 09 Nights</p>
                      <h4 class="type-h4">$895.50</h4>
                    </div>
                    <div class="rlr-product-detail-header__actions">
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--no-bg rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="./product-detail-page.html" class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand"> Explore </a>
                    </div>
                  </div>
                </div>
                <a href="./product-detail-page.html" class="rlr-product-card__anchor rlr-product-card__anchor--featured"></a>
              </article>
              <!-- Summary -->
              <div class="rlr-product-card--featured__summary">
                <h4 class="type-h6-semi-bold">Train Tour Skyline</h4>
                <p class="type-body">Check Out Daily Deals and Promotion on Hotels. Easy &amp; Fast Booking</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="350" data-aos-duration="750">
              <!-- Featured prodcut card -->
              <article class="rlr-product-card rlr-product-card--featured" itemscope itemtype="https://schema.org/Product">
                <!-- Image -->
                <figure class="rlr-product-card__image-wrapper">
                  <img itemprop="image" data-src="./assets/images/product-images/small/featured-thumb-03.jpg" data-srcset="./assets/images/product-images/small/featured-thumb-03.jpg" data-sizes="auto" class="lazyload" alt="" />
                </figure>
                <!-- Card body -->
                <div class="rlr-product-card--featured__inner">
                  <span class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right"> 4.9 </span>
                  <div class="rlr-product-card--featured__body card-img-overlay">
                    <div class="rlr-product-card--featured__duration">
                      <p class="body">10 Days | 09 Nights</p>
                      <h4 class="type-h4">$895.50</h4>
                    </div>
                    <div class="rlr-product-detail-header__actions">
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--no-bg rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="./product-detail-page.html" class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand"> Explore </a>
                    </div>
                  </div>
                </div>
                <a href="./product-detail-page.html" class="rlr-product-card__anchor rlr-product-card__anchor--featured"></a>
              </article>
              <!-- Summary -->
              <div class="rlr-product-card--featured__summary">
                <h4 class="type-h6-semi-bold">Train Tour Skyline</h4>
                <p class="type-body">Check Out Daily Deals and Promotion on Hotels. Easy &amp; Fast Booking</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Logo Carousel -->
      <section id="features" class="rlr-section rlr-section__mb landding__plugin">
        <div class="container">
          <div class="rlr-logos-slider">
            <div class="rlr-logos-slider__items">
              <div class="slide-track">
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/trivago.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/tripadvisor.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/expedia.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/tailormade.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/all-inclusive.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/radisson.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/disneyland.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/national-geographic.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/lonelyplanet.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/tailormade.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/trivago.png" width="187px" height="64px" alt="partner logo" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     @include('ticketHub.components.contact')


</main>

@include('ticketHub.include.footer')
