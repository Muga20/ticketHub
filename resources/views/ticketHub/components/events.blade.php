  <section class="rlr-section rlr-section__my">
  <section class="rlr-section rlr-section__mb rlr-section__cards ">
      <div class="container">
          <!-- Section heading -->
          <div class="rlr-section-header">
              <!-- Section heading -->
              <div class="rlr-section__title">
                  <h2 class="rlr-section__title--main">Coming Events 2023-24</h2>
                  <span class="rlr-section__title--sub">Explore the best ticket deals for upcoming events at ticketHub
                      !</span>
              </div>
              <div class="button-row">
                  <a href="/event" class="btn rlr-button rlr-button--large rlr-button--rounded rlr-button--brand"> Check
                      All </a>
              </div>
          </div>
          <div class="row rlr-featured__cards">
              @foreach ($events as $event)
                  <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="250" data-aos-duration="700">
                      <!-- Featured prodcut card -->
                      <article class="rlr-product-card rlr-product-card--featured" itemscope
                          itemtype="https://schema.org/Product">
                          <!-- Image -->
                          <figure class="rlr-product-card__image-wrapper">

                              @php
                                  $images = json_decode($event->image);
                              @endphp

                              @if (!is_null($images) && is_array($images))
                                  <!-- Render your image or any related HTML here -->
                                  <img itemprop="image" data-src="{{ asset($images[0]) }}"
                                      data-srcset="{{ asset($images[0]) }}" data-sizes="auto" class="lazyload"
                                      alt="" style="width: 500px; height: 300px;" />

                                  @if (count($images) > 1)
                                  @endif
                              @endif
                          </figure>
                          <!-- Card body -->
                          <div class="rlr-product-card--featured__inner">
                              @if (strtotime($event->date) < strtotime('today'))
                                  <span
                                      class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right">
                                      Event Passed
                                  </span>
                              @endif

                              <div class="rlr-product-card--featured__body card-img-overlay">
                                  <div class="rlr-product-card--featured__duration">
                                      @php
                                          $eventDate = \Carbon\Carbon::parse($event->date);
                                          $remainingDays = now()->diffInDays($eventDate, false);
                                          $formattedDate = $eventDate->format('F j, Y g:i A');
                                      @endphp

                                      <td></td>

                                      <p class="body">{{ $formattedDate }} ({{ $remainingDays }} days remaining)</p>
                                      @if ($event->price == 0)
                                          <h4 class="type-h4"></h4>
                                      @else
                                          <h4 class="type-h4">Ksh{{ $event->price }}</h4>
                                      @endif

                                  </div>
                                  <div class="rlr-product-detail-header__actions">

                                      @if ($event->price != 0)
                                          <a href="{{ route('singleEvent', $event) }}"
                                              class="btn rlr-button product-card-button rlr-button--medium rlr-button--rounded rlr-button--brand">
                                              Ticket
                                          </a>
                                      @else
                                          <button
                                              class="btn rlr-button product-card-button rlr-button--medium rlr-button--rounded rlr-button--brand"
                                              disabled>
                                              Free Event
                                          </button>
                                      @endif

                                  </div>
                              </div>
                          </div>
                          <a href="{{ route('singleEvent', $event) }}"
                              class="rlr-product-card__anchor rlr-product-card__anchor--featured"></a>
                      </article>
                      <!-- Summary -->
                      <div class="rlr-product-card--featured__summary">
                          <h4 class="type-h6-semi-bold">{{ $event->title }}</h4>
                          <p class="type-body">
                              {!! implode(' ', array_slice(explode(' ', $event->description), 0, 7)) !!}...</p>

                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </section>
  </section>
