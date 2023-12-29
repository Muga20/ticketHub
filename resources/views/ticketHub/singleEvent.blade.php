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
                     <!-- Arrows -->
                     <div class="splide__arrows">
                         <button class="rlr-media__arrow splide__arrow splide__arrow--prev">
                             <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.889 14.942 8.47 8.36 1.889 1.778" stroke="var(--white)" stroke-width="2"
                                     stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                             </svg>
                         </button>
                         <button class="rlr-media__arrow splide__arrow splide__arrow--next">
                             <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.889 14.942 8.47 8.36 1.889 1.778" stroke="var(--white)" stroke-width="2"
                                     stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                             </svg>
                         </button>
                     </div>
                     <!-- Media main images -->
                     <div class="splide__track rlr-media__strack">
                         <ul id="image-preview" class="splide__list">
                             @php
                                 $images = $events->image ? json_decode($events->image) : [];
                             @endphp

                             @foreach ($images as $image)
                                 <li class="splide__slide rlr-media__image-view">
                                     <img class="lazyload" data-src="{{ asset($image) }}" alt="media image" />
                                 </li>
                             @endforeach
                         </ul>

                     </div>
                     <!-- Media pagination counter -->
                     <div class="rlr-media__custom-pagination rlr-js-custom-pagination">
                         <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                             <path
                                 d="M1.2 0C.542 0 0 .558 0 1.235v11.53C0 13.442.542 14 1.2 14h15.6c.658 0 1.2-.558 1.2-1.235V1.235C18 .558 17.458 0 16.8 0H1.2zm0 .824h15.6c.228 0 .4.176.4.411v9.844l-3.506-3.95a.4.4 0 0 0-.588 0l-2.862 3.126L6.1 5.488a.4.4 0 0 0-.362-.135.4.4 0 0 0-.232.129L.8 10.687V1.235C.8 1 .972.823 1.2.823zm9.2 2.058c-.879 0-1.6.743-1.6 1.647 0 .905.721 1.647 1.6 1.647.879 0 1.6-.742 1.6-1.647 0-.904-.721-1.647-1.6-1.647zm0 .824c.447 0 .8.363.8.823 0 .46-.353.824-.8.824a.806.806 0 0 1-.8-.824c0-.46.353-.823.8-.823zm-4.606 2.67 5.912 6.8H1.2a.397.397 0 0 1-.4-.411v-.869l4.994-5.52zm7.6 1.64 3.806 4.285v.464a.397.397 0 0 1-.4.411h-4.019l-2-2.303 2.613-2.856z"
                                 fill="#212529"></path>
                         </svg>
                         <span class="rlr-media__page-counter rlr-js-page"> 0 </span>
                     </div>
                 </div>
             </div>
             <!-- Media Thumbnails -->
             <div class="col-md-2 rlr-media">
                 <!-- Media sidebar -->
                 <div class="splide rlr-media--wrapper rlr-media--sidebar rlr-js-thumbnail-media">
                     <!-- Arrows -->
                     <div class="splide__arrows">
                         <button class="rlr-media__arrow splide__arrow splide__arrow--prev">
                             <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.889 14.942 8.47 8.36 1.889 1.778" stroke="var(--white)" stroke-width="2"
                                     stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                             </svg>
                         </button>
                         <button class="rlr-media__arrow splide__arrow splide__arrow--next">
                             <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.889 14.942 8.47 8.36 1.889 1.778" stroke="var(--white)" stroke-width="2"
                                     stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                             </svg>
                         </button>
                     </div>
                     <!-- Thumbnails -->
                     <div class="splide__track rlr-media__strack">
                         <ul id="image-preview-thumb" class="splide__list">
                             @foreach ($images as $image)
                                 <li class="splide__slide rlr-media__image-view">
                                     <img class="rlr-media__thumb lazyload" data-src="{{ asset($image) }}"
                                         alt="media image" />
                                 </li>
                             @endforeach

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
                                     <span class="rlr-overview-detail__label">Location</span>
                                     <div class="rlr-overview-detail__icons">
                                         <figure class="rlr-icon-text"> <span class="">{{ $events->location }}
                                             </span></figure>
                                     </div>
                                     <button class="btn rlr-button rlr-booking-card__button"
                                         onclick="showLocationOnMap('{{ $events->location }}')">Show
                                         Location</button>
                                 </div>

                                 <div class="rlr-overview-detail__icon-group">
                                     <span class="rlr-overview-detail__label">Host</span>
                                     <div class="rlr-overview-detail__icons">
                                         <figure class="rlr-icon-text">
                                             <span class="">{{ $events->host }} </span>
                                         </figure>
                                     </div>
                                 </div>

                                 <div class="rlr-overview-detail__icon-group">
                                     <span class="rlr-overview-detail__label">Age</span>
                                     <div class="rlr-overview-detail__icons">
                                         <figure class="rlr-icon-text"> <span class=""> From {{ $events->age }}
                                                 +
                                             </span></figure>
                                     </div>
                                 </div>

                                 <div class="rlr-overview-detail__icon-group">
                                     <span class="rlr-overview-detail__label">Gates open at</span>
                                     <div class="rlr-overview-detail__icons">
                                         <figure class="rlr-icon-text">
                                             <span class="">{{ $events->startTime }} </span>
                                         </figure>
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
                                     itemtype="https://schema.org/AggregateOffer"> Reg /
                                     <span class="rlr-booking-card__current-price rlr-booking-card--currency"
                                         itemprop="priceCurrency">ksh</span>
                                     <span itemprop="lowPrice"
                                         class="rlr-booking-card__current-price rlr-booking-card--low-price">
                                         {{ $events->price }}
                                     </span>

                                 </h2>

                             </header>
                             @if ($events->vipPrice > 0)
                                 <header class="rlr-booking-card__offer">
                                     <h2 class="rlr-booking-card__price" itemscope
                                         itemtype="https://schema.org/AggregateOffer">
                                         Vip /
                                         <span class="rlr-booking-card__current-price rlr-booking-card--currency"
                                             itemprop="priceCurrency">ksh</span>


                                         <span itemprop="lowPrice"
                                             class="rlr-booking-card__current-price rlr-booking-card--low-price">
                                             {{ $events->vipPrice }}
                                         </span>

                                     </h2>
                                 </header>
                             @endif

                             <span class="rlr-booking-card__info">*Price based on selections bellow.</span>
                         </article>

                         <div class="rlr-fieldrow__item rlr-booking-card__form-item">
                             <label class="rlr-form-label rlr-form-label--dark rlr-booking-card__label"
                                 for="rlr-event-tickets-input">Tags</label>
                             <div class="rlr-input-group" data-bs-toggle="popover-event"
                                 data-content-id="rlr-js-event-tickets">
                                 <ul class="form-list">
                                     <li>{{ $events->tag->name }}</li>
                                     <!-- Add more list items as needed -->
                                 </ul>
                                 <div class="rlr-input-group__iconset--absolute"></div>
                             </div>
                         </div>

                         <div class="rlr-fieldrow__item rlr-booking-card__form-item">
                             <label class="rlr-form-label rlr-form-label--dark rlr-booking-card__label"
                                 for="ticket-type">
                                 Ticket Type
                             </label>
                             <select id="ticket-type" class="form-select" onchange="updatePrice()">
                                 <option value="regular">Regular</option>
                                 @if ($events->vipPrice > 0)
                                     <option value="vip">VIP</option>
                                 @endif
                             </select>
                         </div>

                         <div class="rlr-fieldrow__item rlr-booking-card__form-item">
                             <label class="rlr-form-label rlr-form-label--dark rlr-booking-card__label"
                                 for="ticket-quantity">
                                 Number of Tickets
                             </label>
                             <div class="input-group">
                                 <span class="input-group-btn">
                                     <button type="button" class="btn btn-secondary"
                                         onclick="decrementTicket()">-</button>
                                 </span>
                                 <input type="number" id="ticket-quantity"
                                     class="form-control text-center form-control-lg" min="1" value="1"
                                     onchange="updatePrice()">
                                 <span class="input-group-btn">
                                     <button type="button" class="btn btn-secondary"
                                         onclick="incrementTicket()">+</button>
                                 </span>
                             </div>
                         </div>




                     </fieldset>
                     <fieldset class="rlr-booking-card__results rlr-booking-card__results--found">
                         </ul>
                         <div class="rlr-icon-text rlr-booking-card__message">
                             <i class="rlr-icon-font flaticon-carbon-result"> </i>
                             <div class="rlr-icon-text__text-wrapper">
                                 <span class="">Instant confirmation </span>
                                 <span class="rlr-icon-text__subtext">Once you confirm booking, you&#x27;ll receive
                                     details to print or download.</span>
                             </div>
                         </div>
                     </fieldset>
                     {{-- <a href="/checkout" class="btn rlr-button rlr-booking-card__button"> Proceed to Get Ticket</a> --}}
                     <!-- Event Details Page -->
                     <a href="{{ route('checkout', $events) }}"
                         class="btn rlr-button rlr-booking-card__button">Proceed to Get Ticket</a>

                 </form>
             </aside>
         </section>

     </div>
 </main>
 <!-- Footer -->


 <script>
     function updatePrice() {
         const ticketQuantity = parseInt(document.getElementById('ticket-quantity').value);
         const regularPrice = parseFloat("{{ $events->price }}"); // Regular price per ticket
         const vipPrice = parseFloat("{{ $events->vipPrice }}"); // VIP price per ticket

         if (!isNaN(ticketQuantity) && ticketQuantity > 0 && ticketQuantity <= 7) {
             const totalRegularPrice = ticketQuantity * regularPrice;
             const totalVipPrice = ticketQuantity * vipPrice;

             // Update Regular and VIP prices on the UI
             document.querySelector('.rlr-booking-card__current-price.rlr-booking-card--low-price').innerText =
                 totalRegularPrice.toFixed(2);
             document.querySelectorAll('.rlr-booking-card__current-price.rlr-booking-card--low-price')[1].innerText =
                 totalVipPrice.toFixed(2);
         } else {
             // Handle invalid quantity (if needed)
             console.log('Invalid quantity or exceeding maximum tickets limit');
         }
     }

     function incrementTicket() {
         const ticketQuantity = document.getElementById('ticket-quantity');
         const currentValue = parseInt(ticketQuantity.value);

         if (currentValue < 7) {
             ticketQuantity.stepUp();
             updatePrice(); // Call the function to update the price after incrementing
         } else {
             // Optional: Handle maximum ticket limit
             console.log('Maximum 7 tickets allowed');
         }
     }

     function decrementTicket() {
         const ticketQuantity = document.getElementById('ticket-quantity');
         const currentValue = parseInt(ticketQuantity.value);

         if (currentValue > 1) {
             ticketQuantity.stepDown();
             updatePrice(); // Call the function to update the price after decrementing
         } else {
             // Optional: Handle minimum ticket limit
             console.log('Minimum 1 ticket allowed');
         }
     }
 </script>




 @include('ticketHub.include.footer')
