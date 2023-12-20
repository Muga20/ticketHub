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
            
        </div>
        <aside class="row">
            <!-- Search results header -->
            <div class="rlr-search-results-header rlr-search-results-header__wrapper">
                <!-- Title -->
                <h1 class="rlr-search-results-header__value">
                    Showing {{ $events->firstItem() }} - {{ $events->lastItem() }} of {{ $events->total() }} results for
                    <strong>{{ $events->isEmpty() ? 'No Location' : $events[0]->location }}</strong>
                </h1>

                <!-- Sort order -->
                <div class="rlr-search-results-header__sorting-wrapper">
                    <span class="rlr-search-results-header__label">Sort by:</span>
                    <div class="dropdown rlr-dropdown rlr-js-dropdown">
                        <button class="btn dropdown-toggle rlr-dropdown__button rlr-js-dropdown-button" type="button"
                            id="rlr_dropdown_menu_search_results" data-bs-toggle="dropdown" aria-expanded="false"
                            data-bs-offset="-50,35">Most Popular</button>
                        <ul class="dropdown-menu rlr-dropdown__menu" aria-labelledby="rlr_dropdown_menu_search_results">
                            <li>
                                <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item"
                                    href="#">Recommended</a>
                            </li>
                            <li>
                                <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Price
                                    (Low to High)</a>
                            </li>
                            <li>
                                <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Price
                                    (High to Low)</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider rlr-dropdown__divider" />
                            </li>
                            <li>
                                <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Duration
                                    ( Short to Long)</a>
                            </li>
                            <li>
                                <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Duration
                                    (Long to Short)</a>
                            </li>
                            <li>
                                <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">New on
                                    Emprise</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider rlr-dropdown__divider" />
                            </li>
                            <li>
                                <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Traveler
                                    Rating</a>
                            </li>
                            <li>
                                <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item"
                                    href="#">Deals</a>
                            </li>
                            <li>
                                <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item"
                                    href="#">Distance</a>
                            </li>
                            <li>
                                <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">Star
                                    Rating</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider rlr-dropdown__divider" />
                            </li>
                            <li>
                                <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item"
                                    href="#">Default</a>
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
                    @foreach ($tags as $tag)
                        <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                            <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor">
                                <span class="rlr-icon-text__card-title">{{ $tag->name }} </span> </a>
                        </li>
                    @endforeach
                </ul>
                {{-- <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev">
              <i class="rlr-icon-font flaticon-left-chevron"> </i>
            </button>
            <button type="button" class="btn rlr-button splide__arrow splide__arrow--next">
              <i class="rlr-icon-font flaticon-chevron"> </i>
            </button> --}}
            </div>
        </aside>

        <div class="row rlr-search-results-page__product-details">
            <div class="rlr-search-results-page__product-list col-xl-12">
                <div class="row rlr-search-results-page__card-wrapper">
                    @foreach ($events as $event)
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <!-- Product card item -->
                            <article class="rlr-product-card rlr-product-card--v3" itemscope
                                itemtype="https://schema.org/Product"
                                style="{{ $event->price == 0 ? 'background-color: rgb(223, 223, 223);' : 'background-color: whitesmoke;' }}">

                                <!-- Product card image -->
                                <figure class="rlr-product-card__image-wrapper">

                                    <img itemprop="image" data-sizes="auto" data-src="{{ asset($event->image) }}"
                                        data-srcset="{{ asset($event->image) }}" class="lazyload" alt="product-image" />
                                </figure>
                                <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                                    <!-- Product card header -->
                                    <header class="rlr-product-card__header">
                                        <div>
                                            <a href="{{ route('singleEvent', $event) }}" class="rlr-product-card__anchor-title">
                                                <h2 class="rlr-product-card__title" itemprop="name">{{ $event->title }}
                                                </h2>
                                            </a>
                                            <div>
                                                <a href="{{ route('singleEvent', $event) }}" class="rlr-product-card__anchor-cat">
                                                    <span
                                                        class="rlr-product-card__sub-title">{{ $event->category->name }}</span>
                                                </a>
                                                <span class="rlr-product-card__sub-title">|</span>
                                                <a href="{{ route('singleEvent', $event) }}" class="rlr-product-card__anchor-sub-cat">
                                                    <span
                                                        class="rlr-product-card__sub-title">{{ $event->tag->name }}</span>
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </header>
                                    <!-- Product card body -->
                                    <div class="rlr-product-card__details">
                                        <div class="rlr-product-card__prices" itemprop="offers" itemscope
                                            itemtype="https://schema.org/Offer">
                                            @if ($event->price != 0)
                                                <span class="rlr-product-card__from">from</span>
                                            @endif
                                            <span class="rlr-product-card__price">
                                                @if ($event->price == 0)
                                                    <mark itemprop="priceCurrency">Free</mark>
                                                @else
                                                    <mark itemprop="priceCurrency">Ksh</mark><mark
                                                        itemprop="price">{{ $event->price }}</mark>
                                                @endif
                                            </span>

                                        </div>

                                    </div>
                                    <!-- Product card footer -->
                                    <div class="rlr-product-card__footer">
                                        @php
                                            $eventDate = \Carbon\Carbon::parse($event->date);
                                            $today = \Carbon\Carbon::now();
                                            $differenceInDays = $eventDate->diffInDays($today);
                                        @endphp

                                        @if ($differenceInDays <= 5)
                                            <div class="rlr-icon-text rlr-product-card__icon-text">
                                                <i class="rlr-icon-font flaticon-three-o-clock-clock"></i>
                                                <span>{{ $differenceInDays }}
                                                    day{{ $differenceInDays > 1 ? 's' : '' }}
                                                    to event</span>
                                            </div>
                                        @else
                                            <div class="rlr-icon-text rlr-product-card__icon-text">
                                                <i class="rlr-icon-font flaticon-three-o-clock-clock"></i>
                                                <span>{{ $eventDate->format('M j, Y') }}</span>
                                            </div>
                                        @endif

                                        <ul class="rlr-product-card__icon-text-list">
                                            @if ($event->price > 0)
                                                <li class="rlr-icon-text rlr-product-card__icon-text">
                                                    <i class="rlr-icon-font flaticon-check"></i>
                                                    <span class="rlr-icon-text__title">Buy Ticket Now</span>
                                                </li>
                                            @endif
                                            <!-- ... Other list items ... -->
                                        </ul>

                                    </div>


                                </div>
                                <!-- Product card link -->
                                <a href="{{ route('singleEvent', $event) }}" class="rlr-product-card__anchor"></a>
                            </article>
                        </div>
                    @endforeach
                </div>
                <hr class="rlr-search-results-page__divider" />
                @if ($events->hasPages())
                    <nav class="rlr-pagination" aria-label="Product list navigation">
                        <ul class="pagination rlr-pagination__list">
                            <!-- Previous Page Link -->
                            @if ($events->onFirstPage())
                                <!-- Handle when on the first page -->
                                <li class="page-item rlr-pagination__page-item disabled" aria-disabled="true">
                                    <span class="page-link rlr-pagination__page-link rlr-pagination__page-link--prev"
                                        aria-hidden="true">
                                        <span aria-hidden="true">Previous</span>
                                    </span>
                                </li>
                            @else
                                <!-- Display Previous Page Link -->
                                <li class="page-item rlr-pagination__page-item">
                                    <a class="page-link rlr-pagination__page-link rlr-pagination__page-link--prev"
                                        href="{{ $events->previousPageUrl() }}" rel="prev"
                                        aria-label="Previous">
                                        <span aria-hidden="true">Previous</span>
                                    </a>
                                </li>
                            @endif
                            <!-- Pagination Elements -->
                            @php
                                $startPage = max($events->currentPage() - 2, 1);
                                $endPage = min($startPage + 4, $events->lastPage());
                            @endphp

                            @if ($events->lastPage() > 1)
                                @for ($i = $startPage; $i <= $endPage; $i++)
                                    <li class="page-item rlr-pagination__page-item {{ $i == $events->currentPage() ? 'active' : '' }}"
                                        style="margin-right: 5px;">
                                        <a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter"
                                            href="{{ $events->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                            @endif


                            <!-- Next Page Link -->
                            @if ($events->hasMorePages())
                                <!-- Display Next Page Link -->
                                <li class="page-item rlr-pagination__page-item">
                                    <a class="page-link rlr-pagination__page-link rlr-pagination__page-link--next"
                                        href="{{ $events->nextPageUrl() }}" rel="next" aria-label="Next">
                                        <span aria-hidden="true">Next</span>
                                    </a>
                                </li>
                            @else
                                <!-- Handle when on the last page -->
                                <li class="page-item rlr-pagination__page-item disabled" aria-disabled="true">
                                    <span class="page-link rlr-pagination__page-link rlr-pagination__page-link--next"
                                        aria-hidden="true">
                                        <span aria-hidden="true">Next</span>
                                    </span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                @endif

            </div>
        </div>
    </div>
</main>
<!-- Footer -->
@include('ticketHub.include.footer')
