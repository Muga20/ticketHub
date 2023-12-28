<aside class="rlr-hero--half-mast">
    <!-- Your content here -->
    <div class="container">
        <div id="rlr_banner_slider" class="splide rlr-banner-splide rlr-banner-splide--v3">
            <div class="splide__track rlr-banner-splide__track">
                <ul class="splide__list">
                    <!-- Banner slide 1 -->
                    @foreach ($slides as $slider)
                        <li class="splide__slide rlr-banner-splide__slide">
                            <div class="rlr-banner-splide__image-wrapper">

                                @php
                                    $images = json_decode($slider->event->image);
                                @endphp

                                @if (!is_null($images) && is_array($images))
                                    <!-- Render your image or any related HTML here -->

                                    <img class="rlr-banner-splide__banner-img lazyload" data-sizes="auto"
                                        data-src="{{ asset($images[0]) }}" src="{{ asset($images[0]) }}" alt="#"
                                        style="height: 700px;" />
                                    @if (count($images) > 1)
                                    @endif
                                @endif

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





                                    </div>
                                    <div class="rlr-banner-splide__payment-option">

                                        <div class="rlr-banner-splide__content-desc-right">
                                            <span class="rlr-banner-splide__payment-desc">We Accept Payment Through All
                                                Cards & Banking</span>
                                            <a href="./product-detail-page.html"
                                                class="btn rlr-button rlr-banner-splide__book-now"> Book Get A Ticket!
                                            </a>
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
