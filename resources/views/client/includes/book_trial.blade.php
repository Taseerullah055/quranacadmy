<section class="cta-section" id="book-trial" aria-labelledby="cta-heading">
    <div class="cta-container">

      <!-- Spec: centred content, #28A745 bg, white text -->
      <div class="cta-inner">

        <!-- Eyebrow -->
        <div class="cta-eyebrow" aria-hidden="true">🎓 Free Trial Available</div>

        <!-- Spec: clear title, white text, hero-style -->
        <h2 class="cta-title" id="cta-heading">
          Start Your Quran Learning Journey
          <span class="cta-title-accent">Today</span>
        </h2>

        <!-- Spec: subtext, white, centred -->
        <p class="cta-subtitle">
          Book your free trial class — no credit card, no commitment.
          Experience the quality of our teaching for yourself.
        </p>

        <!-- Spec: prominent button, white background, green text (inverted on green bg) -->
        <div class="cta-btn-row">
          <a href="#book-trial-form"
             class="cta-btn-primary"
             data-track="cta-section-primary"
             aria-label="Book your free trial class now"
             onclick="document.getElementById('cta-form-name') && document.getElementById('cta-form-name').focus(); return false;">
            📅 Book Free Trial — It's Free
          </a>
          <a href="https://wa.me/923000000000" class="cta-btn-secondary"
             data-track="cta-section-whatsapp" target="_blank" rel="noopener">
            💬 Chat on WhatsApp
          </a>
        </div>

        <!-- Spec: optional trust line below button -->
        <p class="cta-trust-line" aria-label="Trust reassurance">
          ✓ No credit card required &nbsp;·&nbsp;
          ✓ Cancel anytime &nbsp;·&nbsp;
          ✓ 500+ students enrolled
        </p>

        <!-- Trust icons row -->
        <div class="cta-trust-badges" role="list" aria-label="Trust signals">
          <div class="cta-badge-item" role="listitem">
            <span class="cta-badge-icon" aria-hidden="true">🔒</span>
            <span class="cta-badge-text">Secure & Private</span>
          </div>
          <span class="cta-badge-divider" aria-hidden="true"></span>
          <div class="cta-badge-item" role="listitem">
            <span class="cta-badge-icon" aria-hidden="true">🏆</span>
            <span class="cta-badge-text">Certified Teachers</span>
          </div>
          <span class="cta-badge-divider" aria-hidden="true"></span>
          <div class="cta-badge-item" role="listitem">
            <span class="cta-badge-icon" aria-hidden="true">⭐</span>
            <span class="cta-badge-text">4.9 / 5 Rating</span>
          </div>
          <span class="cta-badge-divider" aria-hidden="true"></span>
          <div class="cta-badge-item" role="listitem">
            <span class="cta-badge-icon" aria-hidden="true">🌍</span>
            <span class="cta-badge-text">10+ Countries</span>
          </div>
        </div>

      </div><!-- /cta-inner -->

      <!-- Lead form card -->
      <div class="cta-form-wrap" id="book-trial-form">
        <div class="cta-form-card">
          <div class="form-free-badge">🎁 Free Trial Class Included</div>
          <h3 class="form-title">Book Your Free Trial</h3>
          <p class="form-subtitle">Fill in your details — we'll confirm within 2 hours.</p>

          <div id="cta-form-body">
            <form class="cta-form" id="cta-lead-form"
                  onsubmit="handleCtaFormSubmit(event)" novalidate
                  aria-label="Free trial booking form">

              <div class="form-row">
                <div class="form-field">
                  <label for="cta-form-name" class="form-label">
                    Full Name <span class="required">*</span>
                  </label>
                  <input id="cta-form-name" name="name" type="text" class="form-input"
                         placeholder="e.g. Sarah Ali" autocomplete="name" required />
                  <span class="form-error-msg" id="err-name">Please enter your name.</span>
                </div>
                <div class="form-field">
                  <label for="cta-form-email" class="form-label">
                    Email <span class="required">*</span>
                  </label>
                  <input id="cta-form-email" type="email" name="email" class="form-input"
                         placeholder="you@example.com" autocomplete="email" required />
                  <span class="form-error-msg" id="err-email">Enter a valid email.</span>
                </div>
              </div>

              <div class="form-row">
                <div class="form-field">
                  <label for="cta-form-phone" class="form-label">Phone / WhatsApp</label>
                  <input id="cta-form-phone" type="tel" name="phone_number" class="form-input"
                         placeholder="+1 555 000 0000" autocomplete="tel" />
                </div>
                <div class="form-field">
                  <label for="cta-form-package" class="form-label">
                    Course <span class="required">*</span>
                  </label>
                  <select id="cta-form-package" name="course_name" class="form-select" required>
                    <option value="" disabled selected>Select a course…</option>
                    <option value="quran-kids">🌙 Quran for Kids</option>
                    <option value="adult-quran">📖 Adult Quran</option>
                    <option value="tajweed">🎯 Tajweed</option>
                    <option value="hifz">🏆 Hifz / Memorisation</option>
                    <option value="weekend">🗓️ Weekend Course</option>
                  </select>
                  <span class="form-error-msg" id="err-package">Please select a course.</span>
                </div>
              </div>

              <div class="form-field">
                <label for="cta-form-message" class="form-label">
                  Anything to tell us?
                  <span style="color:#9ca3af;font-weight:400;">(optional)</span>
                </label>
                <input id="cta-form-message" type="text" name="message" class="form-input"
                       placeholder="e.g. preferred times, student age…" />
              </div>

              <button type="submit" class="form-submit-btn" id="cta-submit-btn"
                      data-track="cta-form-submit">
                <span class="submit-spinner" aria-hidden="true"></span>
                <span class="submit-text">✅ Book My Free Trial Now</span>
              </button>
            </form>

            <p class="form-privacy">
              <span aria-hidden="true">🔒</span>
              Your information is 100% private. We never spam or share your data.
            </p>
          </div>

          <div class="form-success" id="cta-form-success" role="alert" aria-live="polite">
            <div class="success-icon" aria-hidden="true">🎉</div>
            <h4 class="success-title">You're All Set!</h4>
            <p class="success-text" id="cta-success-msg">
              We'll reach out within 2 hours to confirm your free trial class.
            </p>
          </div>
        </div>
      </div><!-- /cta-form-wrap -->

    </div>
  </section>

<section class="blog-section" id="blog" aria-labelledby="blog-heading">
    <div class="blog-container">

      <!-- Section header -->
      <div class="blog-header">
        <div class="blog-eyebrow">📚 Resources &amp; Tips</div>
        <h2 class="blog-title" id="blog-heading">
          Learn &amp; Explore: <span class="blog-accent">Quran Resources</span>
        </h2>
        <span class="blog-underline" aria-hidden="true"></span>
        <p class="blog-subtitle">
          Read our latest tips, articles, and guidance to enhance
          your Quran learning journey.
        </p>
      </div>

      <!-- Category filter tabs -->
      <div class="blog-filter-row" role="tablist" aria-label="Filter articles by category">
        <button class="blog-filter-tab active"
                data-filter="all" role="tab" aria-selected="true"
                onclick="blogFilter(this,'all')">
          All Articles
          <span class="tab-count">7</span>
        </button>
        <button class="blog-filter-tab"
                data-filter="beginner" role="tab" aria-selected="false"
                onclick="blogFilter(this,'beginner')">
          🌱 Beginner Tips
          <span class="tab-count">2</span>
        </button>
        <button class="blog-filter-tab"
                data-filter="recitation" role="tab" aria-selected="false"
                onclick="blogFilter(this,'recitation')">
          🎯 Recitation
          <span class="tab-count">2</span>
        </button>
        <button class="blog-filter-tab"
                data-filter="parents" role="tab" aria-selected="false"
                onclick="blogFilter(this,'parents')">
          👨‍👩‍👧 Parent Guides
          <span class="tab-count">2</span>
        </button>
        <button class="blog-filter-tab"
                data-filter="hifz" role="tab" aria-selected="false"
                onclick="blogFilter(this,'hifz')">
          🏆 Hifz &amp; Memorisation
          <span class="tab-count">1</span>
        </button>
      </div>

      <!-- Cards grid -->
      <div class="blog-grid" id="blog-grid" role="list" aria-label="Blog articles">

        <!-- ── FEATURED article (full-width, 2-col internal) ── -->
        <article class="blog-card blog-card--featured"
                 data-bdelay="0" data-category="recitation"
                 role="listitem"
                 aria-label="Featured article: 10 Tajweed Rules Every Muslim Should Know">
          <div class="blog-thumb"
               style="--thumb-bg:linear-gradient(135deg,#064e3b,#0B3D91);">
            <div class="blog-thumb-inner">📖</div>
            <span class="blog-cat-label"
                  style="--cat-bg:#28A745;">Featured</span>
            <span class="blog-read-time">8 min read</span>
          </div>
          <div class="blog-card-body">
            <div class="blog-featured-badge">⭐ Editor's Pick</div>
            <div class="blog-meta">
              <span>June 2025</span>
              <span class="blog-meta-dot"></span>
              <span>Recitation</span>
            </div>
            <h3 class="blog-card-title">
              10 Essential Tajweed Rules Every Muslim Should Know Before Reciting Quran
            </h3>
            <p class="blog-card-desc">
              Tajweed is the art of reciting the Quran with correct pronunciation and
              rhythm. In this comprehensive guide, we break down the 10 most important
              rules — from proper throat letters (Huroof al-Halq) to the rules of Nun
              Sakinah — with practical examples to help you start applying them today.
            </p>
            <div class="blog-tags">
              <span class="blog-tag">Tajweed</span>
              <span class="blog-tag">Recitation</span>
              <span class="blog-tag">Pronunciation</span>
              <span class="blog-tag">All Levels</span>
            </div>
            <a href="#" class="blog-read-btn" data-track="blog-featured-read">
              Read Full Article
              <span class="blog-read-btn-arrow" aria-hidden="true">→</span>
            </a>
          </div>
        </article>

        <!-- ── Regular article cards ── -->

        <!-- Card 1 — Beginner Tips -->
        <article class="blog-card"
                 data-bdelay="0" data-category="beginner"
                 role="listitem"
                 aria-label="Article: How to Start Learning Quran from Scratch">
          <div class="blog-thumb"
               style="--thumb-bg:linear-gradient(135deg,#ecfdf5,#d1fae5);">
            <div class="blog-thumb-inner">🌱</div>
            <span class="blog-cat-label" style="--cat-bg:#28A745;">Beginner</span>
            <span class="blog-read-time">5 min</span>
          </div>
          <div class="blog-card-body">
            <div class="blog-meta">
              <span>May 2025</span>
              <span class="blog-meta-dot"></span>
              <span>Beginner Tips</span>
            </div>
            <h3 class="blog-card-title">
              How to Start Learning Quran from Scratch as an Adult
            </h3>
            <p class="blog-card-desc">
              Starting at any age is possible. Here's a practical, step-by-step
              roadmap for complete beginners — from Arabic alphabet to fluent
              reading in under 6 months.
            </p>
            <div class="blog-tags">
              <span class="blog-tag">Beginners</span>
              <span class="blog-tag">Adults</span>
            </div>
            <a href="#" class="blog-read-btn" data-track="blog-card-1-read">
              Read More
              <span class="blog-read-btn-arrow" aria-hidden="true">→</span>
            </a>
          </div>
        </article>

        <!-- Card 2 — Parent Guide -->
        <article class="blog-card"
                 data-bdelay="80" data-category="parents"
                 role="listitem"
                 aria-label="Article: Helping Your Child Love the Quran">
          <div class="blog-thumb"
               style="--thumb-bg:linear-gradient(135deg,#eff6ff,#dbeafe);">
            <div class="blog-thumb-inner">👶</div>
            <span class="blog-cat-label" style="--cat-bg:#0B3D91;">Parent Guide</span>
            <span class="blog-read-time">6 min</span>
          </div>
          <div class="blog-card-body">
            <div class="blog-meta">
              <span>May 2025</span>
              <span class="blog-meta-dot"></span>
              <span>Parent Guides</span>
            </div>
            <h3 class="blog-card-title">
              7 Ways to Help Your Child Develop a Genuine Love for the Quran
            </h3>
            <p class="blog-card-desc">
              Forcing memorisation rarely works long-term. Discover evidence-based
              strategies that make Quran learning joyful, consistent, and
              deeply meaningful for children aged 5–12.
            </p>
            <div class="blog-tags">
              <span class="blog-tag">Children</span>
              <span class="blog-tag">Parenting</span>
            </div>
            <a href="#" class="blog-read-btn" data-track="blog-card-2-read">
              Read More
              <span class="blog-read-btn-arrow" aria-hidden="true">→</span>
            </a>
          </div>
        </article>

        <!-- Card 3 — Recitation -->
        <article class="blog-card"
                 data-bdelay="160" data-category="recitation"
                 role="listitem"
                 aria-label="Article: Makhaarij al-Huroof Guide">
          <div class="blog-thumb"
               style="--thumb-bg:linear-gradient(135deg,#fff7ed,#fed7aa);">
            <div class="blog-thumb-inner">🎯</div>
            <span class="blog-cat-label" style="--cat-bg:#d97706;">Recitation</span>
            <span class="blog-read-time">7 min</span>
          </div>
          <div class="blog-card-body">
            <div class="blog-meta">
              <span>April 2025</span>
              <span class="blog-meta-dot"></span>
              <span>Recitation</span>
            </div>
            <h3 class="blog-card-title">
              A Complete Guide to Makhaarij al-Huroof (Points of Articulation)
            </h3>
            <p class="blog-card-desc">
              The 17 articulation points of Arabic letters demystified. Learn
              which part of your mouth, throat, or nose produces each letter —
              with audio-style descriptions.
            </p>
            <div class="blog-tags">
              <span class="blog-tag">Tajweed</span>
              <span class="blog-tag">Arabic</span>
            </div>
            <a href="#" class="blog-read-btn" data-track="blog-card-3-read">
              Read More
              <span class="blog-read-btn-arrow" aria-hidden="true">→</span>
            </a>
          </div>
        </article>

        <!-- Card 4 — Hifz (initially hidden, shown by Load More) -->
        <article class="blog-card"
                 data-bdelay="0" data-category="hifz"
                 data-extra="true"
                 role="listitem"
                 style="display:none;"
                 aria-label="Article: How to Memorise the Quran as a Busy Adult">
          <div class="blog-thumb"
               style="--thumb-bg:linear-gradient(135deg,#f5f3ff,#ede9fe);">
            <div class="blog-thumb-inner">🏆</div>
            <span class="blog-cat-label" style="--cat-bg:#6d28d9;">Hifz</span>
            <span class="blog-read-time">9 min</span>
          </div>
          <div class="blog-card-body">
            <div class="blog-meta">
              <span>April 2025</span>
              <span class="blog-meta-dot"></span>
              <span>Hifz &amp; Memorisation</span>
            </div>
            <h3 class="blog-card-title">
              How to Memorise the Quran as a Busy Adult: A Realistic Plan
            </h3>
            <p class="blog-card-desc">
              15 minutes a day is enough. This structured revision plan —
              used by our top Hifz students — helps you memorise steadily
              without burnout or forgetting previous Surahs.
            </p>
            <div class="blog-tags">
              <span class="blog-tag">Hifz</span>
              <span class="blog-tag">Memorisation</span>
              <span class="blog-tag">Adults</span>
            </div>
            <a href="#" class="blog-read-btn" data-track="blog-card-4-read">
              Read More
              <span class="blog-read-btn-arrow" aria-hidden="true">→</span>
            </a>
          </div>
        </article>

        <!-- Card 5 — Parent Guide (hidden initially) -->
        <article class="blog-card"
                 data-bdelay="80" data-category="parents"
                 data-extra="true"
                 role="listitem"
                 style="display:none;"
                 aria-label="Article: Online vs In-Person Quran Classes">
          <div class="blog-thumb"
               style="--thumb-bg:linear-gradient(135deg,#fdf2f8,#fce7f3);">
            <div class="blog-thumb-inner">💻</div>
            <span class="blog-cat-label" style="--cat-bg:#be185d;">Parent Guide</span>
            <span class="blog-read-time">5 min</span>
          </div>
          <div class="blog-card-body">
            <div class="blog-meta">
              <span>March 2025</span>
              <span class="blog-meta-dot"></span>
              <span>Parent Guides</span>
            </div>
            <h3 class="blog-card-title">
              Online vs In-Person Quran Classes: Which Is Better for Your Child?
            </h3>
            <p class="blog-card-desc">
              An honest, balanced comparison of both formats. We look at
              cost, flexibility, teacher quality, and long-term results
              to help parents make the right choice.
            </p>
            <div class="blog-tags">
              <span class="blog-tag">Online Learning</span>
              <span class="blog-tag">Children</span>
            </div>
            <a href="#" class="blog-read-btn" data-track="blog-card-5-read">
              Read More
              <span class="blog-read-btn-arrow" aria-hidden="true">→</span>
            </a>
          </div>
        </article>

        <!-- Card 6 — Beginner (hidden initially) -->
        <article class="blog-card"
                 data-bdelay="160" data-category="beginner"
                 data-extra="true"
                 role="listitem"
                 style="display:none;"
                 aria-label="Article: Noorani Qaida Explained">
          <div class="blog-thumb"
               style="--thumb-bg:linear-gradient(135deg,#ecfdf5,#bbf7d0);">
            <div class="blog-thumb-inner">📝</div>
            <span class="blog-cat-label" style="--cat-bg:#28A745;">Beginner</span>
            <span class="blog-read-time">4 min</span>
          </div>
          <div class="blog-card-body">
            <div class="blog-meta">
              <span>March 2025</span>
              <span class="blog-meta-dot"></span>
              <span>Beginner Tips</span>
            </div>
            <h3 class="blog-card-title">
              What Is the Noorani Qaida and Why Every Beginner Needs It
            </h3>
            <p class="blog-card-desc">
              The Noorani Qaida is the most widely used foundation course for
              Quran beginners worldwide. Here's why it works so well and
              how long it takes to complete.
            </p>
            <div class="blog-tags">
              <span class="blog-tag">Noorani Qaida</span>
              <span class="blog-tag">Beginners</span>
            </div>
            <a href="#" class="blog-read-btn" data-track="blog-card-6-read">
              Read More
              <span class="blog-read-btn-arrow" aria-hidden="true">→</span>
            </a>
          </div>
        </article>

      </div>
      <!-- /blog-grid -->

      <!-- Load More button -->
      <div class="blog-load-more-row">
        <button class="blog-load-more-btn"
                id="blog-load-more"
                onclick="blogLoadMore()"
                data-track="blog-load-more"
                aria-label="Load more articles">
          <span class="lm-spinner" aria-hidden="true"></span>
          <span class="lm-text">📄 Load More Articles</span>
        </button>
      </div>

      <!-- Newsletter teaser strip -->
      <div class="blog-newsletter-strip" role="complementary"
           aria-label="Subscribe for weekly Quran tips">
        <div class="newsletter-strip-text">
          <h3 class="newsletter-strip-title">
            Get weekly Quran tips in your inbox 📬
          </h3>
          <p class="newsletter-strip-sub">
            Join 500+ students receiving free learning guidance every week. Unsubscribe anytime.
          </p>
        </div>
        <div class="newsletter-strip-form" id="blog-nl-form">
          <input type="email"
                 id="blog-nl-email"
                 class="newsletter-strip-input"
                 placeholder="Enter your email address"
                 autocomplete="email"
                 aria-label="Email for newsletter" />
          <button class="newsletter-strip-btn"
                  onclick="blogNewsletterSubmit()"
                  data-track="blog-newsletter-subscribe"
                  type="button">
            Subscribe ✉️
          </button>
        </div>
        <span class="newsletter-strip-success"
              id="blog-nl-success"
              role="alert">
          🎉 You're subscribed!
        </span>
      </div>

    </div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

$(document).ready(function () {

    $('#cta-lead-form').on('submit', function (e) {

        e.preventDefault();

        let btn = $('#cta-submit-btn');

        btn.prop('disabled', true);
        btn.find('.submit-text').text('Submitting...');

        $.ajax({
            url: "{{ route('free_trail.store') }}",
            type: "POST",
            data: $(this).serialize(),

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function (response) {

                alert(response.message);

                $('#cta-lead-form')[0].reset();

                btn.prop('disabled', false);
                btn.find('.submit-text').text('✅ Book My Free Trial Now');
            },

            error: function (xhr) {

                btn.prop('disabled', false);
                btn.find('.submit-text').text('✅ Book My Free Trial Now');

                if (xhr.status === 422) {

                    let errors = xhr.responseJSON.errors;

                    $('.form-error-msg').hide();

                    if (errors.name) {
                        $('#err-name').text(errors.name[0]).show();
                    }

                    if (errors.email) {
                        $('#err-email').text(errors.email[0]).show();
                    }

                    if (errors.course_name) {
                        $('#err-package').text(errors.course_name[0]).show();
                    }
                }
            }
        });

    });

});

</script>
<script>
</script>
  </section>