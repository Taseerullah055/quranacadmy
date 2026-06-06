@extends('client.layouts.app');
@section('content')
<style>
    .rating-stars {
    display: flex;
    flex-direction: row-reverse;
    justify-content: flex-end;
    gap: 5px;
}

.rating-stars input {
    display: none;
}

.rating-stars label {
    font-size: 35px;
    color: #ccc;
    cursor: pointer;
    transition: color 0.2s;
}

/* Hover effect */
.rating-stars label:hover,
.rating-stars label:hover ~ label {
    color: #ffc107;
}

/* Selected stars */
.rating-stars input:checked ~ label {
    color: #ffc107;
}
</style>
<section class="contact-section" id="contact" aria-labelledby="contact-heading">
    <div class="contact-container">
      <div class="contact-header">
        <div class="contact-eyebrow">📬 Get in Touch</div>
        <h2 class="contact-title" id="contact-heading">
          We'd Love to <span class="contact-accent">Hear from You</span>
        </h2>
        <span class="contact-underline" aria-hidden="true"></span>
        <p class="contact-subtitle">
          Add Your Review
          Our team replies within 2 hours — usually much faster.
        </p>
      </div>

      <div class="contact-grid">

        <!-- Left: contact info -->
        <div class="contact-info" role="list">

          <div class="contact-info-card" role="listitem">
            <div class="contact-info-icon" aria-hidden="true">📧</div>
            <div class="contact-info-text">
              <span class="contact-info-label">Email</span>
              <a href="mailto:academy@example.com" class="contact-info-value">
                academy@example.com
              </a>
              <span class="contact-info-sub">Response within 2 hours</span>
            </div>
          </div>

          <div class="contact-info-card" role="listitem">
            <div class="contact-info-icon" aria-hidden="true">📱</div>
            <div class="contact-info-text">
              <span class="contact-info-label">Phone / WhatsApp</span>
              <a href="tel:+923000000000" class="contact-info-value">
                +92-300-0000000
              </a>
              <span class="contact-info-sub">WhatsApp preferred — 24/7</span>
            </div>
          </div>

          <div class="contact-info-card" role="listitem">
            <div class="contact-info-icon" aria-hidden="true">🌍</div>
            <div class="contact-info-text">
              <span class="contact-info-label">We Serve</span>
              <span class="contact-info-value">USA · UK · Canada · Australia</span>
              <span class="contact-info-sub">& 10+ countries worldwide</span>
            </div>
          </div>

          <div class="contact-info-card" role="listitem">
            <div class="contact-info-icon" aria-hidden="true">🕐</div>
            <div class="contact-info-text">
              <span class="contact-info-label">Support Hours</span>
              <span class="contact-info-value">24/7 WhatsApp Support</span>
              <span class="contact-info-sub">Email replies: 7am–10pm (your TZ)</span>
            </div>
          </div>

          <!-- Social links -->
          <div class="contact-info-card" role="listitem">
            <div class="contact-info-icon" aria-hidden="true">🔗</div>
            <div class="contact-info-text">
              <span class="contact-info-label">Follow Us</span>
              <div class="contact-social-row" aria-label="Social media">
                <a href="#" class="contact-social-btn" aria-label="Facebook"
                   data-track="contact-facebook">📘</a>
                <a href="#" class="contact-social-btn" aria-label="Instagram"
                   data-track="contact-instagram">📸</a>
                <a href="#" class="contact-social-btn" aria-label="YouTube"
                   data-track="contact-youtube">▶️</a>
                <a href="https://wa.me/923000000000"
                   class="contact-social-btn" aria-label="WhatsApp"
                   data-track="contact-whatsapp" target="_blank" rel="noopener">💬</a>
              </div>
            </div>
          </div>

        </div>

        <!-- Right: contact form -->
        <div class="contact-form-card">
          <h3 class="contact-form-title">Add Your Reivew</h3>
          <p class="contact-form-sub">We'll get back to you soon.</p>

          <div id="contact-form-body">
            <form class="contact-form" id="contact-main-form"
                  onsubmit="handleContactSubmit(event)" novalidate
                  aria-label="Contact form">
              <div class="contact-form-row">
                <div class="form-field">
                  <label for="contact-name" class="form-label">
                    Full Name <span class="required">*</span>
                  </label>
                  <input id="contact-name" type="text" name="name" class="form-input"
                         placeholder="Your name" autocomplete="name" required />
                  <span class="form-error-msg" id="contact-err-name">Please enter your name.</span>
                </div>
                <div class="form-field">
                  <label for="contact-email" class="form-label">
                    Email <span class="required">*</span>
                  </label>
                  <input id="contact-email" type="email" name="email" class="form-input"
                         placeholder="you@example.com" autocomplete="email" required />
                  <span class="form-error-msg" id="contact-err-email">Enter a valid email.</span>
                </div>
              </div>

              <div class="form-field">
                <label for="contact-message" class="form-label">
                  Review <span class="required">*</span>
                </label>
                <textarea id="contact-message" name="message" class="contact-textarea form-input"
                          placeholder="How can we help you?"
                          required rows="5"></textarea>
                <span class="form-error-msg" id="contact-err-message">Please enter your Review.</span>
              </div>

              <div class="form-field">
                <label class="form-label">
                    Rating <span class="required">*</span>
                </label>

                    <div class="rating-stars">
                        <input type="radio" id="star5" name="rating" value="5" required>
                        <label for="star5">&#9733;</label>

                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4">&#9733;</label>

                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3">&#9733;</label>

                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2">&#9733;</label>

                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1">&#9733;</label>
                    </div>

                    <span class="form-error-msg" id="contact-err-rating">
                        Please select a rating.
                    </span>
                </div>

              <button type="submit" class="contact-submit-btn"
                      id="contact-submit-btn" data-track="contact-form-submit">
                <span class="submit-spinner" aria-hidden="true"></span>
                <span class="submit-text">Add Review</span>
              </button>
            </form>
          </div>

          <div class="contact-success" id="contact-success" role="alert" aria-live="polite">
            <div class="contact-success-icon" aria-hidden="true">✅</div>
            <h4 class="contact-success-title">Reivew Add Successfully.</h4>
            <p class="contact-success-text">
              Thank you! We'll reach you very soon.
            </p>
          </div>
        </div>

      </div>
    </div>

<script>

$(document).ready(function () {

    $('#contact-main-form').on('submit', function (e) {

        e.preventDefault();

        let btn = $('#cta-submit-btn');

        btn.prop('disabled', true);
        btn.find('.submit-text').text('Submitting...');

        $.ajax({
            url: "{{ route('cleint.review.store') }}",
            type: "POST",
            data: $(this).serialize(),

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function (response) {

                $('#cta-lead-form')[0].reset();

                btn.prop('disabled', false);
                btn.find('.submit-text').text(response.message);
            },

            error: function (xhr) {

                btn.prop('disabled', false);
                btn.find('.submit-text').text('✅ submit contact');

                if (xhr.status === 422) {

                    let errors = xhr.responseJSON.errors;

                    $('.form-error-msg').hide();

                    if (errors.name) {
                        $('#err-name').text(errors.name[0]).show();
                    }

                    if (errors.email) {
                        $('#err-email').text(errors.email[0]).show();
                    }
                }
            }
        });

    });

});

</script>
</section>
@endsection