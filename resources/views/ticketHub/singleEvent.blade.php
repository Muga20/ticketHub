 @include('ticketHub.include.navbar')

 <!-- Main Content -->
 <main id="rlr-main" class="rlr-main--fixed-top">
     <!-- Main Content -->
     <div class="container">
         <!-- Media Slider -->
         <aside class="row">
             <!-- Media main image carousel -->
             <div class="col-md-10 rlr-media">
                 <div class="splide rlr-media--wrapper rlr-js-media">
                     
                     
                     <!-- Media main images -->
                     <div class="splide__track rlr-media__strack">
                         <ul id="image-preview" class="splide__list">
                             <li class="splide__slide rlr-media__image-view">
                                 <img class="lazyload" data-src="{{ asset($events->image) }}"
                                     alt="media image" />
                             </li>
                            
                         </ul>
                     </div>
                     <!-- Media pagination counter -->
                     

                 </div>
             </div>
             <!-- Media Thumbnails -->
             <div class="col-md-2 rlr-media"  >
                 <div class="splide rlr-media--wrapper rlr-media--sidebar rlr-js-thumbnail-media">
                     <div class="splide__track rlr-media__strack">
                         <ul id="image-preview-thumb" class="splide__list">
                            
                         </ul>
                     </div>
                 </div>
             </div>
         </aside>
         <!-- Product Detail Sextion -->
         <section class="row rlr-product-detail-section">
             <div class="rlr-product-detail-section__details col-xl-8">
                 <!-- Product Detail Header -->
                 <div class="rlr-product-detail-header" id="rlr-js-detail-header">
                     <div class="rlr-product-detail-header__contents">
                         <!-- Breadcrumb -->
                         
                         <h1 class="rlr-section__heading--main rlr-product-detail-header__title">
                         {{ $events->title }}</h1>
                         
                     </div>
                    
                 </div>
                 <!-- Secondary Menu -->
                 <nav class="rlr-product-detail-secondary-menu">
                     <ul class="rlr-product-detail-secondary-menu__tabitems" id="rlr-js-secondary-menu">
                         <li class="rlr-product-detail-secondary-menu__tabitem js-tabitem is-active"
                             id="rlr-product-sec-overview"><span>Overview</span></li>
                     </ul>
                 </nav>
                 <!-- Overview -->
                 <div class="rlr-secondary-menu-desc" data-id="rlr-product-sec-overview">
                    
                     <div class="rlr-secondary-menu-desc__details">
                         <div class="rlr-overview-detail">
                             <div class="rlr-readmore-desc rlr-overview-detail__description">
                                 <p class="rlr-readmore-desc__content rlr-js-desc">
                                    {!! $events->description !!}
                                 </p>
                                 <span class="rlr-readmore-desc__readmore rlr-js-readmore">Show more...</span>
                             </div>
                             <div class="rlr-overview-detail__icon-groupset">
                                 
                                 <div class="rlr-overview-detail__icon-group">
                                     <span class="rlr-overview-detail__label">Host</span>
                                     <div class="rlr-overview-detail__icons">
                                         <figure class="rlr-icon-text"><i class="rlr-icon-font flaticon-beach"> </i>
                                             <span class="">{{ $events->host }} </span></figure>
                                     </div>
                                 </div>
                                 <div class="rlr-overview-detail__icon-group">
                                     <span class="rlr-overview-detail__label">Physical</span>
                                     <div class="rlr-overview-detail__icons">
                                         <figure class="rlr-icon-text"><i
                                                 class="rlr-icon-font flaticon-icecream-cone"> </i> <span
                                                 class="">Luxury </span></figure>
                                     </div>
                                 </div>
                                 <div class="rlr-overview-detail__icon-group">
                                     <span class="rlr-overview-detail__label">Group Size</span>
                                     <div class="rlr-overview-detail__icons">
                                         <figure class="rlr-icon-text"><i class="rlr-icon-font flaticon-add-user">
                                             </i> <span class="">8 </span></figure>
                                     </div>
                                 </div>
                                 <div class="rlr-overview-detail__icon-group">
                                     <span class="rlr-overview-detail__label">Age</span>
                                     <div class="rlr-overview-detail__icons">
                                         <figure class="rlr-icon-text"><i
                                                 class="rlr-icon-font flaticon-carbon-tall-man"> </i> <span
                                                 class="">{{ $events->age }} </span></figure>
                                     </div>
                                 </div>
                                 <div class="rlr-overview-detail__icon-group">
                                     <span class="rlr-overview-detail__label">Location</span>
                                     <div class="rlr-overview-detail__icons">
                                         <figure class="rlr-icon-text"><i class="rlr-icon-font flaticon-map-marker">
                                             </i> <span class="">{{ $events->location }} </span></figure>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- FAQ-->
                
             </div>
             <!-- Booking Form -->
             <aside class="col-xl-4 col-xxxl-3 d-xl-block offset-xxxl-1 mt-5 mt-lg-0">
                 <form class="rlr-booking-card">
                     <fieldset class="rlr-fieldrow">
                         
                         <article itemscope itemtype="https://schema.org/Offer"
                             class="rlr-booking-card__price-details rlr-fieldrow__form-element">
                             <span class="rlr-booking-card__total-price">Ticket price</span>
                             <header class="rlr-booking-card__offer">
                                 <h2 class="rlr-booking-card__price" itemscope
                                     itemtype="https://schema.org/AggregateOffer">
                                     <span class="rlr-booking-card__current-price rlr-booking-card--currency"
                                         itemprop="priceCurrency">ksh</span>
                                     <span itemprop="lowPrice"
                                         class="rlr-booking-card__current-price rlr-booking-card--low-price">
                                         {{ $events->price }}</span>
                                    
                                 </h2>
                                
                             </header>
                             <span class="rlr-booking-card__info">*Price based on selections bellow.</span>
                         </article>
                          <div class="rlr-fieldrow__item rlr-booking-card__form-item">
                             <label class="rlr-form-label rlr-form-label--dark rlr-booking-card__label"
                                 for="rlr-booking-selection-input"> Selections </label>
                             <div class="rlr-input-group" data-bs-toggle="popover-booking"
                                 data-content-id="rlr-js-booking-selection" id="rlr-js-booking-selection-button">
                                 <input type="text" id="rlr-booking-selection-input" autocomplete="off"
                                     class="form-control form-input rlr-popover-button"
                                     placeholder="Flight, hotel, car etc." />
                                 <div class="rlr-input-group__iconset--absolute">
                                     <span class="rlr-svg-icon">
                                         <svg width="24" height="24" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M12 .017A11.983 11.983 0 1 0 23.984 12 11.997 11.997 0 0 0 12.002.017zm0 21.787A9.804 9.804 0 1 1 21.806 12 9.816 9.816 0 0 1 12 21.804z"
                                                 fill="#99A3AD" />
                                             <path
                                                 d="M17.446 10.91h-4.358V6.554a1.09 1.09 0 1 0-2.178 0v4.358H6.552a1.09 1.09 0 1 0 0 2.178h4.358v4.358a1.09 1.09 0 1 0 2.178 0v-4.358h4.358a1.09 1.09 0 0 0 0-2.178z"
                                                 fill="#99A3AD" />
                                         </svg>
                                     </span>
                                 </div>
                             </div>
                             <div id="rlr-js-booking-selection" class="rlr-popover--hide">
                                 <div id="rlr-js-booking-selection-bookingform" data-name="booking-form">
                                     <div class="rlr-popover__header">
                                         <label class="rlr-form-label rlr-form-label--light"> Selections </label>
                                         <button type="button"
                                             class="btn rlr-button rlr-js-booking-close rlr-button--transparent">
                                             <i class="rlr-icon-font flaticon-check-mark"> </i>
                                         </button>
                                     </div>
                                     <div class="rlr-popover__wrapper">
                                         <ul class="rlr-checkboxes">
                                             <li class="form-check form-check-block rlr-popover__checkbox-wrapper">
                                                 <div class="rlr-popover__checkbox">
                                                     <input class="form-check-input rlr-form-check-input"
                                                         id="rlr-booking-single-room" type="checkbox"
                                                         value="Single Room" /> <label
                                                         class="rlr-form-label rlr-form-label--checkbox"
                                                         for="rlr-booking-single-room"> Single Room </label>
                                                 </div>
                                                 <span class="rlr-popover__price">$110.00</span>
                                             </li>
                                             <li class="form-check form-check-block rlr-popover__checkbox-wrapper">
                                                 <div class="rlr-popover__checkbox">
                                                     <input class="form-check-input rlr-form-check-input"
                                                         id="rlr-booking-deluxe-room" type="checkbox"
                                                         value="Deluxe Room" /> <label
                                                         class="rlr-form-label rlr-form-label--checkbox"
                                                         for="rlr-booking-deluxe-room"> Deluxe Room </label>
                                                 </div>
                                                 <span class="rlr-popover__price">$200.00</span>
                                             </li>
                                             <li class="form-check form-check-block rlr-popover__checkbox-wrapper">
                                                 <div class="rlr-popover__checkbox">
                                                     <input class="form-check-input rlr-form-check-input"
                                                         id="rlr-airport-pickup" type="checkbox"
                                                         value="Airport Pickup" /> <label
                                                         class="rlr-form-label rlr-form-label--checkbox"
                                                         for="rlr-airport-pickup"> Airport Pickup </label>
                                                 </div>
                                                 <span class="rlr-popover__price">$120.00</span>
                                             </li>
                                             <li class="form-check form-check-block rlr-popover__checkbox-wrapper">
                                                 <div class="rlr-popover__checkbox"><input
                                                         class="form-check-input rlr-form-check-input"
                                                         id="rlr-breakfast" type="checkbox" value="Breakfast" />
                                                     <label class="rlr-form-label rlr-form-label--checkbox"
                                                         for="rlr-breakfast"> Breakfast </label></div>
                                                 <span class="rlr-popover__price">$140.00</span>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                         </div>
                         <div class="rlr-fieldrow__item rlr-booking-card__form-item">
                             <label class="rlr-form-label rlr-form-label--dark rlr-booking-card__label"
                                 for="rlr-booking-selection-input"> Selections </label>
                             <div class="rlr-input-group" data-bs-toggle="popover-booking"
                                 data-content-id="rlr-js-booking-selection" id="rlr-js-booking-selection-button">
                                 <input type="text" id="rlr-booking-selection-input" autocomplete="off"
                                     class="form-control form-input rlr-popover-button"
                                     placeholder="Flight, hotel, car etc." />
                                 <div class="rlr-input-group__iconset--absolute">
                                     <span class="rlr-svg-icon">
                                         <svg width="24" height="24" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M12 .017A11.983 11.983 0 1 0 23.984 12 11.997 11.997 0 0 0 12.002.017zm0 21.787A9.804 9.804 0 1 1 21.806 12 9.816 9.816 0 0 1 12 21.804z"
                                                 fill="#99A3AD" />
                                             <path
                                                 d="M17.446 10.91h-4.358V6.554a1.09 1.09 0 1 0-2.178 0v4.358H6.552a1.09 1.09 0 1 0 0 2.178h4.358v4.358a1.09 1.09 0 1 0 2.178 0v-4.358h4.358a1.09 1.09 0 0 0 0-2.178z"
                                                 fill="#99A3AD" />
                                         </svg>
                                     </span>
                                 </div>
                             </div>
                             <div id="rlr-js-booking-selection" class="rlr-popover--hide">
                                 <div id="rlr-js-booking-selection-bookingform" data-name="booking-form">
                                     <div class="rlr-popover__header">
                                         <label class="rlr-form-label rlr-form-label--light"> Selections </label>
                                         <button type="button"
                                             class="btn rlr-button rlr-js-booking-close rlr-button--transparent">
                                             <i class="rlr-icon-font flaticon-check-mark"> </i>
                                         </button>
                                     </div>
                                     <div class="rlr-popover__wrapper">
                                         <ul class="rlr-checkboxes">
                                             <li class="form-check form-check-block rlr-popover__checkbox-wrapper">
                                                 <div class="rlr-popover__checkbox">
                                                     <input class="form-check-input rlr-form-check-input"
                                                         id="rlr-booking-single-room" type="checkbox"
                                                         value="Single Room" /> <label
                                                         class="rlr-form-label rlr-form-label--checkbox"
                                                         for="rlr-booking-single-room"> Single Room </label>
                                                 </div>
                                                 <span class="rlr-popover__price">$110.00</span>
                                             </li>
                                             <li class="form-check form-check-block rlr-popover__checkbox-wrapper">
                                                 <div class="rlr-popover__checkbox">
                                                     <input class="form-check-input rlr-form-check-input"
                                                         id="rlr-booking-deluxe-room" type="checkbox"
                                                         value="Deluxe Room" /> <label
                                                         class="rlr-form-label rlr-form-label--checkbox"
                                                         for="rlr-booking-deluxe-room"> Deluxe Room </label>
                                                 </div>
                                                 <span class="rlr-popover__price">$200.00</span>
                                             </li>
                                             <li class="form-check form-check-block rlr-popover__checkbox-wrapper">
                                                 <div class="rlr-popover__checkbox">
                                                     <input class="form-check-input rlr-form-check-input"
                                                         id="rlr-airport-pickup" type="checkbox"
                                                         value="Airport Pickup" /> <label
                                                         class="rlr-form-label rlr-form-label--checkbox"
                                                         for="rlr-airport-pickup"> Airport Pickup </label>
                                                 </div>
                                                 <span class="rlr-popover__price">$120.00</span>
                                             </li>
                                             <li class="form-check form-check-block rlr-popover__checkbox-wrapper">
                                                 <div class="rlr-popover__checkbox"><input
                                                         class="form-check-input rlr-form-check-input"
                                                         id="rlr-breakfast" type="checkbox" value="Breakfast" />
                                                     <label class="rlr-form-label rlr-form-label--checkbox"
                                                         for="rlr-breakfast"> Breakfast </label></div>
                                                 <span class="rlr-popover__price">$140.00</span>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                         </div>
                     </fieldset>
                     <fieldset class="rlr-booking-card__results rlr-booking-card__results--found">
                         <ul class="rlr-booking-card__result-list">
                             <li class="rlr-icon-text">
                                 <i class="rlr-icon-font flaticon-three-o-clock-clock"> </i>
                                 <div class="rlr-icon-text__text-wrapper">
                                     <span class="">10:00 AM </span>
                                     <span class="rlr-icon-text__subtext">Starting Time</span>
                                 </div>
                             </li>
                         </ul>
                         <div class="rlr-icon-text rlr-booking-card__message">
                             <i class="rlr-icon-font flaticon-carbon-result"> </i>
                             <div class="rlr-icon-text__text-wrapper">
                                 <span class="">Instant confirmation </span>
                                 <span class="rlr-icon-text__subtext">Once you confirm booking, you&#x27;ll receive
                                     details to print.</span>
                             </div>
                         </div>
                     </fieldset>
                     <a href="/checkout" class="btn rlr-button rlr-booking-card__button"> Proceed to Booking </a>
                 </form>
             </aside>
         </section>

     </div>
 </main>
 <!-- Footer -->

 @include('ticketHub.include.footer')
