
@include('ticketHub.include.navbar')

    <main id="rlr-main" class="rlr-main--fixed-top">
      <!-- Header banner -->
      <section class="rlr-section">
        <div class="rlr-cta rlr-cta--no-button">
          <h2>Contact us</h2>
          <p>Git in touch via phone, email or fill in the form below</p>
        </div>
      </section>
      <!-- Main content -->
      <section class="rlr-section rlr-section__mt">
        <div class="container">
          <div class="row justify-content-around">
            <!-- Contact form -->
            <div class="col-xl-offset-1 col-xxl-5 col-lg-5">
              <div class="rlr-contact-form">
                <div class="rlr-contact-form__header">
                  <div class="rlr-page-title">
                    <span class="rlr-page-title__icon"> <i class="rlr-icon-font flaticon-fluent-hand-left-20-regular"> </i> </span>
                    <div>
                      <h2 class="type-h3 rlr-page-title__title">Hi, we’re happy to help you!</h2>
                      <span class="rlr-page-title__desc">Please enter detials so we can reach out to you</span>
                    </div>
                  </div>
                </div>
                <div class="rlr-contact-form__body">
                  <form action="/">
                    <div class="rlr-contact-form__input-group"><label class="type-body-medium rlr-contact-form__label">First Name</label> <input type="text" autocomplete="off" class="form-control" placeholder="John" /></div>
                    <div class="rlr-contact-form__input-group"><label class="type-body-medium rlr-contact-form__label">Last Name</label> <input type="text" autocomplete="off" class="form-control" placeholder="doe" /></div>
                    <div class="rlr-contact-form__input-group"><label class="type-body-medium rlr-contact-form__label">Phone</label> <input type="tel" autocomplete="off" class="form-control" placeholder="XXXXXXXXXX" /></div>
                    <div class="rlr-contact-form__input-group"><label class="type-body-medium rlr-contact-form__label">Message</label> <textarea class="form-control form-control--text-area" placeholder="Please explain the issue your are facing." rows="12"></textarea></div>
                    <div class="rlr-contact-form__input-group"><label class="type-body-medium rlr-contact-form__label">Email</label> <input type="email" autocomplete="off" class="form-control" placeholder="johndoe@email.com" /></div>
                    <button type="submit" class="btn rlr-button btn rlr-button custom-class rlr-button--medium rlr-button--rounded rlr-button__color--white rlr-button--brand rlr-button-- rlr-button-- rlr-button__color-- rlr-button-- rlr-button--">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- Contact Details -->
            <div class="col-xl-offset-1 col-xxxl-offset-1 col-xxl-4 col-lg-5 mt-5 mt-lg-0">
              <div class="rlr-contact-details">
                <div class="rlr-contact-details__details">
                  <div class="rlr-contact-detail-item">
                    <span class="rlr-contact-detail-item__icon"> <i class="rlr-icon-font flaticon-phone-receiver-silhouette"> </i> </span>
                    <div>
                      <p class="rlr-contact-detail-item__title">Phone</p>
                      <h6 class="rlr-contact-detail-item__desc">020 8577 5772</h6>
                    </div>
                  </div>
                  <div class="rlr-contact-detail-item">
                    <span class="rlr-contact-detail-item__icon"> <i class="rlr-icon-font flaticon-email"> </i> </span>
                    <div>
                      <p class="rlr-contact-detail-item__title">Email</p>
                      <h6 class="rlr-contact-detail-item__desc">support@emprise.tours</h6>
                    </div>
                  </div>
                  <div class="rlr-contact-detail-item">
                    <span class="rlr-contact-detail-item__icon"> <i class="rlr-icon-font flaticon-map-marker"> </i> </span>
                    <div>
                      <p class="rlr-contact-detail-item__title">Address</p>
                      <h6 class="rlr-contact-detail-item__desc">27 Kensington Gardens, London, SW7</h6>
                    </div>
                  </div>
                </div>
                <div class="rlr-contact-details__map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer -->


    @include('ticketHub.include.footer')