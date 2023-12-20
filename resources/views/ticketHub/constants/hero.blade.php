<aside class="rlr-hero--half-mast"
   >
    <!-- Your content here -->
    <div class="container">
        <div id="rlr_banner_slider" class="splide rlr-banner-splide rlr-banner-splide--v3">
            <div class="splide__track rlr-banner-splide__track">
                <ul class="splide__list">
                    <!-- Banner slide 1 -->
                    @foreach ($slides as $slider)
                      
                        <li class="splide__slide rlr-banner-splide__slide"
                           >
                            <div class="rlr-banner-splide__image-wrapper">
                                <img class="rlr-banner-splide__banner-img lazyload" data-sizes="auto"
                                    data-src="{{ asset($slider->event->image) }}"
                                    src="{{ asset($slider->event->image) }}" alt="#" />
                            </div>
                            <article class="rlr-banner-splide__content-wrapper">
                                <header class="rlr-banner-splide__header banner-text">
                                    <h2 class="rlr-banner-splide__slogan ">{{ $slider->event->title }}</h2>
                                    <span class="rlr-banner-splide__sub-title ">Location held:
                                        {{ $slider->event->location }}</span>
                                </header>

                                <div class="rlr-banner-splide__content-desc">
                                    <div class="rlr-banner-splide__temperature">
                                        <span class="banner-text">
                                            @if ($slider->event->slots == 0)
                                                No slots
                                            @elseif($slider->event->slots > 0)
                                                Tickets available -{{ $slider->event->slots }}
                                            @endif
                                            <br />
                                            Tickets going for ksh{{ $slider->event->price }} each
                                        </span>




                                        <div class="rlr-banner-splide__arrows">
                                            <button
                                                class="rlr-banner-splide__arrow rlr-banner-splide__arrow--prev rlr-banner-js-arrow-prev"
                                                aria-label="prev button">
                                                <span> <i class="rlr-icon-font flaticon-left"> </i> </span>
                                            </button>
                                            <button
                                                class="rlr-banner-splide__arrow rlr-banner-splide__arrow--next rlr-banner-js-arrow-next"
                                                aria-label="next button">
                                                <span> <i class="rlr-icon-font flaticon-right"> </i> </span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </li>
                        <!-- Banner slide 2 -->
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</aside>



<div class="container">
    <!-- Search banner -->
    <form class="rlr-banner-search rlr-banner-search--hero-half-mast">
        <div class="rlr-banner-search__input-wrapper">
            <!-- Destination -->
            <div
                class="rlr-banner-input-group rlr-banner-input-group rlr-banner-input-group--home-search rlr-js-autocomplete-demo rlr-banner-search__banner-input rlr-js-search-layout-wrapper">
                <label class="rlr-banner-input-group__label" for="destination_input">
                    <mark>Location</mark>
                </label>
                <div class="rlr-banner-input-group__input-wrapper">
                    <input id="destination_input" name="location" type="text" autocomplete="off"
                        class="rlr-banner-input-group__input destination_input" placeholder="Enter Location" />
                    <i class="rlr-icon-font flaticon-map-marker"> </i>
                    <ul id="home_destination_results"
                        class="rlr-banner-input-group--location-dropdown rlr-autocomplete"></ul>
                </div>
            </div>
            <!-- Activity -->
            <div
                class="rlr-banner-input-group rlr-js-autocomplete-activity-demo rlr-banner-search__banner-input rlr-js-search-layout-wrapper">
                <label class="rlr-banner-input-group__label" for="rlr-banner-input-group-activity">
                    <mark>Event</mark>
                </label>
                <div class="rlr-banner-input-group__input-wrapper">
                    <input id="rlr-banner-input-group-activity" name="activity" type="text" autocomplete="off"
                        class="rlr-banner-input-group__input activity_autocomplete" placeholder="Select Event" />
                    <i class="rlr-icon-font flaticon-outline-down"> </i>
                    <ul id="autocomplete-results" class="rlr-banner-input-group--activity-dropdown rlr-autocomplete">
                    </ul>
                </div>
            </div>
            <!-- Date -->
            <div class="rlr-banner-input-group rlr-banner-search__banner-input rlr-js-search-layout-wrapper">
                <label class="rlr-banner-input-group__label" for="rlr-banner-input-group-dates">
                    <mark>Date</mark>
                </label>
                <div class="rlr-banner-input-group__input-wrapper">
                    <input id="rlr-banner-input-group-dates" type="text" autocomplete="off"
                        class="rlr-banner-input-group__input eee_home_search_flatpickr" placeholder="Select date" />
                    <i class="rlr-icon-font flaticon-calendar"> </i>
                    <ul id="home_date_results" class="rlr-banner-input-group--date-dropdown rlr-autocomplete"></ul>
                </div>
            </div>
        </div>
        <button class="rlr-banner-search__submit-button" aria-label="banner submit">
            <i class="rlr-icon-font flaticon-search"> </i>
        </button>
    </form>
</div>
<!-- Product Carousel -->
