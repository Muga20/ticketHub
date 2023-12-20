@include('ticketHub.include.navbar')

 <!-- Main Content -->
    <main id="rlr-main" class="rlr-main--fixed-top">
      <div class="rlr-search-results-page container">
        <div class="rlr-search-results-page__breadcrumb-section">
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb rlr-breadcrumb__items">
              <li class="breadcrumb-item rlr-breadcrumb__item"><a href="/">Home</a></li>
             
              <li class="breadcrumb-item rlr-breadcrumb__item active" aria-current="page"> Events </li>
            </ol>
          </nav>
          <div class="rlr-icon-text"><i class="rlr-icon-font flaticon-phone-receiver-silhouette"> </i> <span class="rlr-search-results-page__phone">Questions? +977 (985) 110-8896 </span></div>
        </div>
        <aside class="row">
          <!-- Search results header -->
          <div class="rlr-search-results-header rlr-search-results-header__wrapper">
            <!-- Title -->
            <h1 class="rlr-search-results-header__value">
              Showing 1 - 10 of 2037 results for
              <strong>London, United Kingdom</strong>
            </h1>
            <!-- Sort order -->
            <div class="rlr-search-results-header__sorting-wrapper">
              <span class="rlr-search-results-header__label">Sort by:</span>
              <div class="dropdown rlr-dropdown rlr-js-dropdown">
                <button class="btn dropdown-toggle rlr-dropdown__button rlr-js-dropdown-button" type="button" id="rlr_dropdown_menu_search_results" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="-50,35">Most Popular</button>
                <ul class="dropdown-menu rlr-dropdown__menu" aria-labelledby="rlr_dropdown_menu_search_results">
                  <li>
                    <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Recommended</a>
                  </li>
                  <li>
                    <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Price (Low to High)</a>
                  </li>
                  <li>
                    <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Price (High to Low)</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider rlr-dropdown__divider" />
                  </li>
                  <li>
                    <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Duration ( Short to Long)</a>
                  </li>
                  <li>
                    <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Duration (Long to Short)</a>
                  </li>
                  <li>
                    <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">New on Emprise</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider rlr-dropdown__divider" />
                  </li>
                  <li>
                    <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Traveler Rating</a>
                  </li>
                  <li>
                    <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Deals</a>
                  </li>
                  <li>
                    <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Distance</a>
                  </li>
                  <li>
                    <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Star Rating</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider rlr-dropdown__divider" />
                  </li>
                  <li>
                    <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Default</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>
        <aside class="row rlr-search-results-page__dynamic-filter-section">
          <!-- Swiper -->
          <div class="swiper rlr-dynamic-filter-swiper rlr-js-dynamic-filter-swiper">
            <ul class="swiper-wrapper">
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-deals"> </i> <span class="rlr-icon-text__card-title">Discounted Deal </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-cancellation"> </i> <span class="rlr-icon-text__card-title">Free to Cancel </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-special"> </i> <span class="rlr-icon-text__card-title">Emprise Special </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-timer"> </i> <span class="rlr-icon-text__card-title">Only Few Seats </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-icon-chopper"> </i> <span class="rlr-icon-text__card-title">Premium Travel </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-star-plus"> </i> <span class="rlr-icon-text__card-title">New on Emprise </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-deals"> </i> <span class="rlr-icon-text__card-title">Discount Deals </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-cancellation"> </i> <span class="rlr-icon-text__card-title">Free to Cancel </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-special"> </i> <span class="rlr-icon-text__card-title">Emprise Special </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-timer"> </i> <span class="rlr-icon-text__card-title">Only Few Seats </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-deals"> </i> <span class="rlr-icon-text__card-title">Discounted Deal </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-cancellation"> </i> <span class="rlr-icon-text__card-title">Free to Cancel </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-special"> </i> <span class="rlr-icon-text__card-title">Emprise Special </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-timer"> </i> <span class="rlr-icon-text__card-title">Only Few Seats </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-icon-chopper"> </i> <span class="rlr-icon-text__card-title">Premium Travel </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-star-plus"> </i> <span class="rlr-icon-text__card-title">New on Emprise </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-deals"> </i> <span class="rlr-icon-text__card-title">Discount Deals </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-cancellation"> </i> <span class="rlr-icon-text__card-title">Free to Cancel </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-special"> </i> <span class="rlr-icon-text__card-title">Emprise Special </span> </a>
              </li>
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor"> <i class="rlr-icon-font flaticon-timer"> </i> <span class="rlr-icon-text__card-title">Only Few Seats </span> </a>
              </li>
            </ul>
            <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev">
              <i class="rlr-icon-font flaticon-left-chevron"> </i>
            </button>
            <button type="button" class="btn rlr-button splide__arrow splide__arrow--next">
              <i class="rlr-icon-font flaticon-chevron"> </i>
            </button>
          </div>
        </aside>
        <div class="row rlr-search-results-page__product-details">
          <div class="rlr-search-results-page__product-list col-xl-12">
            <div class="row rlr-search-results-page__card-wrapper">
              <div class="col-md-6 col-xl-4 col-xxl-3">
                <!-- Product card item -->
                <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                  <!-- Product card image -->
                  <figure class="rlr-product-card__image-wrapper">
                    <span class="rlr-badge rlr-badge-- rlr-badge-- rlr-badge--abs rlr-badge--abs-left"> -30% </span>
                    <img itemprop="image" data-sizes="auto" data-src="./assets/images/item-listing/01.jpg" data-srcset="./assets/images/item-listing/01.jpg 1x, ../../assets/images/item-listing/01.jpg 2x" class="lazyload" alt="product-image" />
                  </figure>
                  <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                    <!-- Product card header -->
                    <header class="rlr-product-card__header">
                      <div>
                        <a href="/singleEvent" class="rlr-product-card__anchor-title">
                          <h2 class="rlr-product-card__title" itemprop="name">Hiking tour in Chisapani</h2>
                        </a>
                        <div>
                          <a href="/singleEvent" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title">Hiking Tour</span>
                          </a>
                          <span class="rlr-product-card__sub-title">|</span>
                          <a href="/singleEvent" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                          </a>
                        </div>
                      </div>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                    </header>
                    <!-- Product card body -->
                    <div class="rlr-product-card__details">
                      <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">from </span>
                        <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">895.00</mark> </span>
                      </div>
                      <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                          <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                        </div>
                        <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (108)</span>
                      </div>
                    </div>
                    <!-- Product card footer -->
                    <div class="rlr-product-card__footer">
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                      <ul class="rlr-product-card__icon-text-list">
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Product card link -->
                  <a href="/singleEvent" class="rlr-product-card__anchor"></a>
                </article>
              </div>
              <div class="col-md-6 col-xl-4 col-xxl-3">
                <!-- Product card item -->
                <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                  <!-- Product card image -->
                  <figure class="rlr-product-card__image-wrapper">
                    <span class="rlr-badge rlr-badge-- rlr-badge-- rlr-badge--abs rlr-badge--abs-left"> Sale </span>
                    <img itemprop="image" data-sizes="auto" data-src="./assets/images/item-listing/02.jpg" data-srcset="./assets/images/item-listing/02.jpg 1x, ../../assets/images/item-listing/02.jpg 2x" class="lazyload" alt="product-image" />
                  </figure>
                  <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                    <!-- Product card header -->
                    <header class="rlr-product-card__header">
                      <div>
                        <a href="/singleEvent" class="rlr-product-card__anchor-title">
                          <h2 class="rlr-product-card__title" itemprop="name">Ancient temple tour in Goa</h2>
                        </a>
                        <div>
                          <a href="/singleEvent" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title">Cultural Tour</span>
                          </a>
                          <span class="rlr-product-card__sub-title">|</span>
                          <a href="/singleEvent" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                          </a>
                        </div>
                      </div>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                    </header>
                    <!-- Product card body -->
                    <div class="rlr-product-card__details">
                      <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">from </span>
                        <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">895.00</mark> </span>
                      </div>
                      <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                          <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                        </div>
                        <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (108)</span>
                      </div>
                    </div>
                    <!-- Product card footer -->
                    <div class="rlr-product-card__footer">
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                      <ul class="rlr-product-card__icon-text-list">
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Product card link -->
                  <a href="/singleEvent" class="rlr-product-card__anchor"></a>
                </article>
              </div>
              <div class="col-md-6 col-xl-4 col-xxl-3">
                <!-- Product card item -->
                <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                  <!-- Product card image -->
                  <figure class="rlr-product-card__image-wrapper">
                    <span class="rlr-badge rlr-badge-- rlr-badge-- rlr-badge--abs rlr-badge--abs-left"> -15% </span>
                    <img itemprop="image" data-sizes="auto" data-src="./assets/images/item-listing/03.jpg" data-srcset="./assets/images/item-listing/03.jpg 1x, ../../assets/images/item-listing/03.jpg 2x" class="lazyload" alt="product-image" />
                  </figure>
                  <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                    <!-- Product card header -->
                    <header class="rlr-product-card__header">
                      <div>
                        <a href="/singleEvent" class="rlr-product-card__anchor-title">
                          <h2 class="rlr-product-card__title" itemprop="name">Hot air baloon right with view</h2>
                        </a>
                        <div>
                          <a href="/singleEvent" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title">Hiking Tour</span>
                          </a>
                          <span class="rlr-product-card__sub-title">|</span>
                          <a href="/singleEvent" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                          </a>
                        </div>
                      </div>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                    </header>
                    <!-- Product card body -->
                    <div class="rlr-product-card__details">
                      <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">from </span>
                        <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">895.00</mark> </span>
                      </div>
                      <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                          <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                        </div>
                        <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (108)</span>
                      </div>
                    </div>
                    <!-- Product card footer -->
                    <div class="rlr-product-card__footer">
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                      <ul class="rlr-product-card__icon-text-list">
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Product card link -->
                  <a href="/singleEvent" class="rlr-product-card__anchor"></a>
                </article>
              </div>
              <div class="col-md-6 col-xl-4 col-xxl-3">
                <!-- Product card item -->
                <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                  <!-- Product card image -->
                  <figure class="rlr-product-card__image-wrapper">
                    <span class="rlr-badge rlr-badge-- rlr-badge-- rlr-badge--abs rlr-badge--abs-left"> Sale </span>
                    <img itemprop="image" data-sizes="auto" data-src="./assets/images/item-listing/04.jpg" data-srcset="./assets/images/item-listing/04.jpg 1x, ../../assets/images/item-listing/04.jpg 2x" class="lazyload" alt="product-image" />
                  </figure>
                  <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                    <!-- Product card header -->
                    <header class="rlr-product-card__header">
                      <div>
                        <a href="/singleEvent" class="rlr-product-card__anchor-title">
                          <h2 class="rlr-product-card__title" itemprop="name">White water rafting in Trishuli</h2>
                        </a>
                        <div>
                          <a href="/singleEvent" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title">Hiking Tour</span>
                          </a>
                          <span class="rlr-product-card__sub-title">|</span>
                          <a href="/singleEvent" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                          </a>
                        </div>
                      </div>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                    </header>
                    <!-- Product card body -->
                    <div class="rlr-product-card__details">
                      <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">from </span>
                        <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">895.00</mark> </span>
                      </div>
                      <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                          <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                        </div>
                        <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (108)</span>
                      </div>
                    </div>
                    <!-- Product card footer -->
                    <div class="rlr-product-card__footer">
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                      <ul class="rlr-product-card__icon-text-list">
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Product card link -->
                  <a href="/singleEvent" class="rlr-product-card__anchor"></a>
                </article>
              </div>
              <div class="col-md-6 col-xl-4 col-xxl-3">
                <!-- Product card item -->
                <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                  <!-- Product card image -->
                  <figure class="rlr-product-card__image-wrapper">
                    <span class="rlr-badge rlr-badge-- rlr-badge-- rlr-badge--abs rlr-badge--abs-left"> 30% </span>
                    <img itemprop="image" data-sizes="auto" data-src="./assets/images/item-listing/05.jpg" data-srcset="./assets/images/item-listing/05.jpg 1x, ../../assets/images/item-listing/05.jpg 2x" class="lazyload" alt="product-image" />
                  </figure>
                  <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                    <!-- Product card header -->
                    <header class="rlr-product-card__header">
                      <div>
                        <a href="/singleEvent" class="rlr-product-card__anchor-title">
                          <h2 class="rlr-product-card__title" itemprop="name">Jungle safari trip with family</h2>
                        </a>
                        <div>
                          <a href="/singleEvent" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title">Hiking Tour</span>
                          </a>
                          <span class="rlr-product-card__sub-title">|</span>
                          <a href="/singleEvent" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                          </a>
                        </div>
                      </div>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                    </header>
                    <!-- Product card body -->
                    <div class="rlr-product-card__details">
                      <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">from </span>
                        <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">895.00</mark> </span>
                      </div>
                      <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                          <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                        </div>
                        <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (108)</span>
                      </div>
                    </div>
                    <!-- Product card footer -->
                    <div class="rlr-product-card__footer">
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                      <ul class="rlr-product-card__icon-text-list">
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Product card link -->
                  <a href="/singleEvent" class="rlr-product-card__anchor"></a>
                </article>
              </div>
              <div class="col-md-6 col-xl-4 col-xxl-3">
                <!-- Product card item -->
                <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                  <!-- Product card image -->
                  <figure class="rlr-product-card__image-wrapper">
                    <span class="rlr-badge rlr-badge-- rlr-badge-- rlr-badge--abs rlr-badge--abs-left"> 50% </span>
                    <img itemprop="image" data-sizes="auto" data-src="./assets/images/item-listing/06.jpg" data-srcset="./assets/images/item-listing/06.jpg 1x, ../../assets/images/item-listing/06.jpg 2x" class="lazyload" alt="product-image" />
                  </figure>
                  <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                    <!-- Product card header -->
                    <header class="rlr-product-card__header">
                      <div>
                        <a href="/singleEvent" class="rlr-product-card__anchor-title">
                          <h2 class="rlr-product-card__title" itemprop="name">Cycling tour around Europe</h2>
                        </a>
                        <div>
                          <a href="/singleEvent" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title">Hiking Tour</span>
                          </a>
                          <span class="rlr-product-card__sub-title">|</span>
                          <a href="/singleEvent" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                          </a>
                        </div>
                      </div>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                    </header>
                    <!-- Product card body -->
                    <div class="rlr-product-card__details">
                      <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">from </span>
                        <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">895.00</mark> </span>
                      </div>
                      <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                          <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                        </div>
                        <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (108)</span>
                      </div>
                    </div>
                    <!-- Product card footer -->
                    <div class="rlr-product-card__footer">
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                      <ul class="rlr-product-card__icon-text-list">
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Product card link -->
                  <a href="/singleEvent" class="rlr-product-card__anchor"></a>
                </article>
              </div>
              <div class="col-md-6 col-xl-4 col-xxl-3">
                <!-- Product card item -->
                <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                  <!-- Product card image -->
                  <figure class="rlr-product-card__image-wrapper">
                    <span class="rlr-badge rlr-badge-- rlr-badge-- rlr-badge--abs rlr-badge--abs-left"> Sale </span>
                    <img itemprop="image" data-sizes="auto" data-src="./assets/images/item-listing/07.jpg" data-srcset="./assets/images/item-listing/07.jpg 1x, ../../assets/images/item-listing/07.jpg 2x" class="lazyload" alt="product-image" />
                  </figure>
                  <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                    <!-- Product card header -->
                    <header class="rlr-product-card__header">
                      <div>
                        <a href="/singleEvent" class="rlr-product-card__anchor-title">
                          <h2 class="rlr-product-card__title" itemprop="name">Off road driving around Dubai</h2>
                        </a>
                        <div>
                          <a href="/singleEvent" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title">Hiking Tour</span>
                          </a>
                          <span class="rlr-product-card__sub-title">|</span>
                          <a href="/singleEvent" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                          </a>
                        </div>
                      </div>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                    </header>
                    <!-- Product card body -->
                    <div class="rlr-product-card__details">
                      <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">from </span>
                        <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">895.00</mark> </span>
                      </div>
                      <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                          <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                        </div>
                        <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (108)</span>
                      </div>
                    </div>
                    <!-- Product card footer -->
                    <div class="rlr-product-card__footer">
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                      <ul class="rlr-product-card__icon-text-list">
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Product card link -->
                  <a href="/singleEvent" class="rlr-product-card__anchor"></a>
                </article>
              </div>
              <div class="col-md-6 col-xl-4 col-xxl-3">
                <!-- Product card item -->
                <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                  <!-- Product card image -->
                  <figure class="rlr-product-card__image-wrapper">
                    <span class="rlr-badge rlr-badge-- rlr-badge-- rlr-badge--abs rlr-badge--abs-left"> 10% </span>
                    <img itemprop="image" data-sizes="auto" data-src="./assets/images/item-listing/08.jpg" data-srcset="./assets/images/item-listing/08.jpg 1x, ../../assets/images/item-listing/08.jpg 2x" class="lazyload" alt="product-image" />
                  </figure>
                  <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                    <!-- Product card header -->
                    <header class="rlr-product-card__header">
                      <div>
                        <a href="/singleEvent" class="rlr-product-card__anchor-title">
                          <h2 class="rlr-product-card__title" itemprop="name">Motor sports activity in India</h2>
                        </a>
                        <div>
                          <a href="/singleEvent" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title">Hiking Tour</span>
                          </a>
                          <span class="rlr-product-card__sub-title">|</span>
                          <a href="/singleEvent" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                          </a>
                        </div>
                      </div>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                    </header>
                    <!-- Product card body -->
                    <div class="rlr-product-card__details">
                      <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">from </span>
                        <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">895.00</mark> </span>
                      </div>
                      <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                          <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                        </div>
                        <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (108)</span>
                      </div>
                    </div>
                    <!-- Product card footer -->
                    <div class="rlr-product-card__footer">
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                      <ul class="rlr-product-card__icon-text-list">
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Product card link -->
                  <a href="/singleEvent" class="rlr-product-card__anchor"></a>
                </article>
              </div>
              <div class="col-md-6 col-xl-4 col-xxl-3">
                <!-- Product card item -->
                <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                  <!-- Product card image -->
                  <figure class="rlr-product-card__image-wrapper">
                    <span class="rlr-badge rlr-badge-- rlr-badge-- rlr-badge--abs rlr-badge--abs-left"> 30% </span>
                    <img itemprop="image" data-sizes="auto" data-src="./assets/images/item-listing/09.jpg" data-srcset="./assets/images/item-listing/09.jpg 1x, ../../assets/images/item-listing/09.jpg 2x" class="lazyload" alt="product-image" />
                  </figure>
                  <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                    <!-- Product card header -->
                    <header class="rlr-product-card__header">
                      <div>
                        <a href="/singleEvent" class="rlr-product-card__anchor-title">
                          <h2 class="rlr-product-card__title" itemprop="name">Paragliding in amazing Kenya</h2>
                        </a>
                        <div>
                          <a href="/singleEvent" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title">Hiking Tour</span>
                          </a>
                          <span class="rlr-product-card__sub-title">|</span>
                          <a href="/singleEvent" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                          </a>
                        </div>
                      </div>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                    </header>
                    <!-- Product card body -->
                    <div class="rlr-product-card__details">
                      <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">from </span>
                        <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">895.00</mark> </span>
                      </div>
                      <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                          <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                        </div>
                        <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (108)</span>
                      </div>
                    </div>
                    <!-- Product card footer -->
                    <div class="rlr-product-card__footer">
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                      <ul class="rlr-product-card__icon-text-list">
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Product card link -->
                  <a href="/singleEvent" class="rlr-product-card__anchor"></a>
                </article>
              </div>
              <div class="col-md-6 col-xl-4 col-xxl-3">
                <!-- Product card item -->
                <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                  <!-- Product card image -->
                  <figure class="rlr-product-card__image-wrapper">
                    <span class="rlr-badge rlr-badge-- rlr-badge-- rlr-badge--abs rlr-badge--abs-left"> -30% </span>
                    <img itemprop="image" data-sizes="auto" data-src="./assets/images/item-listing/01.jpg" data-srcset="./assets/images/item-listing/01.jpg 1x, ../../assets/images/item-listing/01.jpg 2x" class="lazyload" alt="product-image" />
                  </figure>
                  <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                    <!-- Product card header -->
                    <header class="rlr-product-card__header">
                      <div>
                        <a href="/singleEvent" class="rlr-product-card__anchor-title">
                          <h2 class="rlr-product-card__title" itemprop="name">Hiking tour in Chisapani</h2>
                        </a>
                        <div>
                          <a href="/singleEvent" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title">Hiking Tour</span>
                          </a>
                          <span class="rlr-product-card__sub-title">|</span>
                          <a href="/singleEvent" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                          </a>
                        </div>
                      </div>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                    </header>
                    <!-- Product card body -->
                    <div class="rlr-product-card__details">
                      <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">from </span>
                        <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">895.00</mark> </span>
                      </div>
                      <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                          <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                        </div>
                        <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (108)</span>
                      </div>
                    </div>
                    <!-- Product card footer -->
                    <div class="rlr-product-card__footer">
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                      <ul class="rlr-product-card__icon-text-list">
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Product card link -->
                  <a href="/singleEvent" class="rlr-product-card__anchor"></a>
                </article>
              </div>
              <div class="col-md-6 col-xl-4 col-xxl-3">
                <!-- Product card item -->
                <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                  <!-- Product card image -->
                  <figure class="rlr-product-card__image-wrapper">
                    <span class="rlr-badge rlr-badge-- rlr-badge-- rlr-badge--abs rlr-badge--abs-left"> Sale </span>
                    <img itemprop="image" data-sizes="auto" data-src="./assets/images/item-listing/02.jpg" data-srcset="./assets/images/item-listing/02.jpg 1x, ../../assets/images/item-listing/02.jpg 2x" class="lazyload" alt="product-image" />
                  </figure>
                  <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                    <!-- Product card header -->
                    <header class="rlr-product-card__header">
                      <div>
                        <a href="/singleEvent" class="rlr-product-card__anchor-title">
                          <h2 class="rlr-product-card__title" itemprop="name">Ancient temple tour in Goa</h2>
                        </a>
                        <div>
                          <a href="/singleEvent" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title">Cultural Tour</span>
                          </a>
                          <span class="rlr-product-card__sub-title">|</span>
                          <a href="/singleEvent" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                          </a>
                        </div>
                      </div>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                    </header>
                    <!-- Product card body -->
                    <div class="rlr-product-card__details">
                      <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">from </span>
                        <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">895.00</mark> </span>
                      </div>
                      <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                          <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                        </div>
                        <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (108)</span>
                      </div>
                    </div>
                    <!-- Product card footer -->
                    <div class="rlr-product-card__footer">
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                      <ul class="rlr-product-card__icon-text-list">
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Product card link -->
                  <a href="/singleEvent" class="rlr-product-card__anchor"></a>
                </article>
              </div>
              <div class="col-md-6 col-xl-4 col-xxl-3">
                <!-- Product card item -->
                <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                  <!-- Product card image -->
                  <figure class="rlr-product-card__image-wrapper">
                    <span class="rlr-badge rlr-badge-- rlr-badge-- rlr-badge--abs rlr-badge--abs-left"> -15% </span>
                    <img itemprop="image" data-sizes="auto" data-src="./assets/images/item-listing/03.jpg" data-srcset="./assets/images/item-listing/03.jpg 1x, ../../assets/images/item-listing/03.jpg 2x" class="lazyload" alt="product-image" />
                  </figure>
                  <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                    <!-- Product card header -->
                    <header class="rlr-product-card__header">
                      <div>
                        <a href="/singleEvent" class="rlr-product-card__anchor-title">
                          <h2 class="rlr-product-card__title" itemprop="name">Hot air baloon right with view</h2>
                        </a>
                        <div>
                          <a href="/singleEvent" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title">Hiking Tour</span>
                          </a>
                          <span class="rlr-product-card__sub-title">|</span>
                          <a href="/singleEvent" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                          </a>
                        </div>
                      </div>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                    </header>
                    <!-- Product card body -->
                    <div class="rlr-product-card__details">
                      <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">from </span>
                        <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">895.00</mark> </span>
                      </div>
                      <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                          <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                        </div>
                        <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (108)</span>
                      </div>
                    </div>
                    <!-- Product card footer -->
                    <div class="rlr-product-card__footer">
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                      <ul class="rlr-product-card__icon-text-list">
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Product card link -->
                  <a href="/singleEvent" class="rlr-product-card__anchor"></a>
                </article>
              </div>
            </div>
            <hr class="rlr-search-results-page__divider" />
            <nav class="rlr-pagination" aria-label="Product list navigation">
              <ul class="pagination rlr-pagination__list">
                <li class="page-item rlr-pagination__page-item disabled">
                  <a class="page-link rlr-pagination__page-link rlr-pagination__page-link--prev" href="#" aria-label="Previous">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.833 10H4.167m0 0L10 15.833M4.167 10 10 4.167" stroke="var(--body-color)" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span aria-hidden="true">Previous</span>
                  </a>
                </li>
                <li class="page-item rlr-pagination__page-item">
                  <ul class="pagination rlr-pagination__child-list">
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">1</a></li>
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">2</a></li>
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">3</a></li>
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">...</a></li>
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">8</a></li>
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">9</a></li>
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">10</a></li>
                  </ul>
                </li>
                <li class="page-item rlr-pagination__page-item">
                  <a class="page-link rlr-pagination__page-link rlr-pagination__page-link--next" href="#" aria-label="Next">
                    <span aria-hidden="true">Next</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.167 10h11.666m0 0L10 4.167M15.833 10 10 15.833" stroke="var(--body-color)" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer -->
    @include('ticketHub.include.footer')