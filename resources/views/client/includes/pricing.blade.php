<section class="pricing-section" id="pricing" aria-labelledby="pricing-heading">
    <div class="pricing-container">

      <!-- Section header -->
      <div class="pricing-header">
        <div class="pricing-eyebrow">💳 Simple Pricing</div>
        <!-- Spec: "Choose a Plan That Fits Your Learning Needs", 32–36px, #0B3D91 -->
        <h2 class="pricing-title" id="pricing-heading">
          Choose a Plan That Fits
          <span class="pt-accent"> Your Learning Needs</span>
        </h2>
        <span class="pricing-underline" aria-hidden="true"></span>
        <!-- Spec: 16–18px, #555, 15–20px margin -->
        <p class="pricing-subtitle">
          Flexible and affordable plans designed for students of all levels.
        </p>

        <!-- Spec: Monthly / Weekly toggle with "Save 20%" discount badge -->
        <div class="billing-toggle" role="group" aria-label="Billing period selector">
          <div class="billing-option active" id="bill-monthly" tabindex="0"
               role="button" aria-pressed="true" onclick="setBilling('monthly')">
            Monthly
          </div>
          <div class="billing-option" id="bill-6month" tabindex="0"
               role="button" aria-pressed="false" onclick="setBilling('6month')">
            6 Months
            <!-- Spec: "Save 20% on 3 Months" discount badge -->
            <span class="billing-savings-badge">💰 Save 20%</span>
          </div>
        </div>
      </div>

      <!-- Spec: 3 pricing cards in one row, middle = Most Popular -->
      <div class="pricing-grid" role="list" aria-label="Pricing plans">

        <!-- ══ BASIC — Card 1 ══ -->
        <div class="price-card"
             style="--pcard-bar:linear-gradient(90deg,#6b7280,#9ca3af);"
             data-pdelay="0" role="listitem" aria-label="Basic plan">

          <div class="free-trial-pill">🎁 Free Trial Included</div>
          <!-- Spec plan name: Basic -->
          <div class="card-plan-name">Basic</div>

          <!-- Spec: large bold price -->
          <div class="card-price-row">
            <span class="card-currency">$</span>
            <span class="card-amount" id="starter-price">25</span>
            <span class="card-period">/ month</span>
          </div>
          <div class="card-original-price" id="starter-original" style="display:none;">
            <s>$31 / month</s>
          </div>

          <p class="card-desc-text">
            Perfect for beginners taking their first steps in Quran learning.
          </p>

          <!-- Spec: features list with ✅ checkmarks (#28A745) -->
          <ul class="card-features-list" aria-label="Basic plan features">
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>3 Classes per Week</li>
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>30 Minutes per Class</li>
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>1-on-1 Sessions</li>
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>Certified Teacher</li>
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>Free Progress Report</li>
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>Certificate of Completion</li>
            <li class="card-feat-item dimmed" aria-hidden="true"><span class="feat-check" aria-hidden="true">—</span>Recorded Lessons</li>
            <li class="card-feat-item dimmed" aria-hidden="true"><span class="feat-check" aria-hidden="true">—</span>Progress Dashboard</li>
          </ul>

          <div class="card-mini-rating" aria-label="Student rating">
            <span class="mini-stars" aria-hidden="true">★★★★★</span>
            <span class="mini-quote">"Great start for my son!" – Hana, USA</span>
          </div>

          <!-- Spec: "Start Free Trial", #28A745, full-width, hover scale + brighter -->
          <a href="#book-trial" class="card-cta-btn" data-track="price-basic-cta">
            Start Free Trial
            <svg class="cta-btn-arrow" width="14" height="14" viewBox="0 0 14 14"
                 fill="none" aria-hidden="true">
              <path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>

        <!-- ══ STANDARD — Card 2 — MOST POPULAR (middle, highlighted) ══ -->
        <div class="price-card price-card--featured"
             style="--pcard-bar:linear-gradient(90deg,#28A745,#3AD163);"
             data-pdelay="80" role="listitem" aria-label="Standard plan — Most Popular">

          <!-- Spec: "Most Popular" label + green border + scale-up -->
          <div class="ribbon-badge" aria-label="Most Popular">⭐ Most Popular</div>
          <div class="free-trial-pill">🎁 Free Trial Included</div>
          <!-- Spec plan name: Standard -->
          <div class="card-plan-name">Standard</div>

          <div class="card-price-row">
            <span class="card-currency">$</span>
            <span class="card-amount" id="pro-price">45</span>
            <span class="card-period">/ month</span>
          </div>
          <div class="card-original-price" id="pro-original" style="display:none;">
            <s>$56 / month</s>
          </div>

          <p class="card-desc-text">
            Our most popular choice — complete Quran learning with Tajweed focus
            and full session recordings.
          </p>

          <ul class="card-features-list" aria-label="Standard plan features">
            <li class="card-feat-item"><span class="feat-check feat-check--pro" aria-hidden="true">✓</span>5 Classes per Week</li>
            <li class="card-feat-item"><span class="feat-check feat-check--pro" aria-hidden="true">✓</span>45 Minutes per Class</li>
            <li class="card-feat-item"><span class="feat-check feat-check--pro" aria-hidden="true">✓</span>1-on-1 with Ijazah Teacher</li>
            <li class="card-feat-item"><span class="feat-check feat-check--pro" aria-hidden="true">✓</span>Tajweed &amp; Memorisation Focus</li>
            <li class="card-feat-item"><span class="feat-check feat-check--pro" aria-hidden="true">✓</span>Flexible Timings — Any Timezone</li>
            <li class="card-feat-item"><span class="feat-check feat-check--pro" aria-hidden="true">✓</span>Progress Tracking Dashboard</li>
            <li class="card-feat-item"><span class="feat-check feat-check--pro" aria-hidden="true">✓</span>Recorded Lessons Included</li>
            <li class="card-feat-item"><span class="feat-check feat-check--pro" aria-hidden="true">✓</span>Certificate on Completion</li>
          </ul>

          <div class="card-mini-rating" aria-label="Student rating">
            <span class="mini-stars" aria-hidden="true">★★★★★</span>
            <span class="mini-quote">"Changed my recitation!" – Ahmed, UK</span>
          </div>

          <a href="#book-trial" class="card-cta-btn" data-track="price-standard-cta">
            Start Free Trial
            <svg class="cta-btn-arrow" width="14" height="14" viewBox="0 0 14 14"
                 fill="none" aria-hidden="true">
              <path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>

        <!-- ══ PREMIUM — Card 3 ══ -->
        <div class="price-card"
             style="--pcard-bar:linear-gradient(90deg,#0B3D91,#3b82f6);"
             data-pdelay="160" role="listitem" aria-label="Premium plan">

          <div class="free-trial-pill">🎁 Free Trial Included</div>
          <!-- Spec plan name: Premium -->
          <div class="card-plan-name">Premium</div>

          <div class="card-price-row">
            <span class="card-currency">$</span>
            <span class="card-amount" id="premium-price">65</span>
            <span class="card-period">/ month</span>
          </div>
          <div class="card-original-price" id="premium-original" style="display:none;">
            <s>$81 / month</s>
          </div>

          <p class="card-desc-text">
            The complete Quran learning experience with a custom plan,
            priority scheduling, and full recordings library.
          </p>

          <ul class="card-features-list" aria-label="Premium plan features">
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>Daily Classes (5×/Week)</li>
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>60 Minutes per Class</li>
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>Custom Learning Plan</li>
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>Priority Scheduling &amp; Support</li>
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>Progress Dashboard + Full Library</li>
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>Certificate + Recordings</li>
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>Family Discount Available</li>
            <li class="card-feat-item"><span class="feat-check" aria-hidden="true">✓</span>Dedicated Same Instructor</li>
          </ul>

          <div class="card-mini-rating" aria-label="Student rating">
            <span class="mini-stars" aria-hidden="true">★★★★★</span>
            <span class="mini-quote">"Best investment I made!" – Sara, AU</span>
          </div>

          <a href="#book-trial" class="card-cta-btn" data-track="price-premium-cta">
            Start Free Trial
            <svg class="cta-btn-arrow" width="14" height="14" viewBox="0 0 14 14"
                 fill="none" aria-hidden="true">
              <path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>

      </div><!-- /pricing-grid -->

      <!-- Spec 7: Trust elements below pricing -->
      <div class="pricing-trust-strip" role="complementary" aria-label="Pricing trust signals">
        <div class="pts-item">
          <span class="pts-icon" aria-hidden="true">✔</span>
          <span class="pts-text">Free Trial Available</span>
        </div>
        <span class="pts-divider" aria-hidden="true"></span>
        <div class="pts-item">
          <span class="pts-icon" aria-hidden="true">✔</span>
          <span class="pts-text">No Hidden Charges</span>
        </div>
        <span class="pts-divider" aria-hidden="true"></span>
        <div class="pts-item">
          <span class="pts-icon" aria-hidden="true">✔</span>
          <span class="pts-text">Flexible Schedule</span>
        </div>
        <span class="pts-divider" aria-hidden="true"></span>
        <div class="pts-item">
          <span class="pts-icon" aria-hidden="true">✔</span>
          <span class="pts-text">Cancel Anytime</span>
        </div>
      </div>

      <!-- Savings strip + FAQ (kept from original) -->
      <div class="pricing-savings-strip" role="complementary">
        <div class="savings-strip-item">
          <span class="savings-strip-icon" aria-hidden="true">💰</span>
          <div class="savings-strip-text">
            <span class="sst-headline">Save 10% on 3-Month Plans</span>
            <span class="sst-sub">Lock in a lower rate for 90 days</span>
          </div>
        </div>
        <div class="savings-strip-divider" aria-hidden="true"></div>
        <div class="savings-strip-item">
          <span class="savings-strip-icon" aria-hidden="true">🎉</span>
          <div class="savings-strip-text">
            <span class="sst-headline">Save 20% on 6-Month Plans</span>
            <span class="sst-sub">Our biggest discount — maximum value</span>
          </div>
        </div>
        <div class="savings-strip-divider" aria-hidden="true"></div>
        <div class="savings-strip-item">
          <span class="savings-strip-icon" aria-hidden="true">👨‍👩‍👧</span>
          <div class="savings-strip-text">
            <span class="sst-headline">Family Discounts Available</span>
            <span class="sst-sub">Enroll 2+ family members &amp; save more</span>
          </div>
        </div>
      </div>

      <!-- FAQ accordion -->
      <div class="pricing-faq" id="pricing-faq">
        <div class="faq-header">
          <h3 class="faq-title">Common Questions</h3>
          <p class="faq-subtitle">Everything you need to know before you enroll.</p>
        </div>
        <div class="faq-list" role="list">
          <div class="faq-item" role="listitem">
            <button class="faq-question" aria-expanded="false" onclick="toggleFaq(this)" type="button">What if I miss a class? <span class="faq-q-icon" aria-hidden="true">+</span></button>
            <div class="faq-answer" role="region"><p class="faq-answer-text">No problem — every missed class can be rescheduled with 12 hours' notice at no extra charge. Standard and Premium students also receive full recordings, so you never fall behind.</p></div>
          </div>
          <div class="faq-item" role="listitem">
            <button class="faq-question" aria-expanded="false" onclick="toggleFaq(this)" type="button">Can I upgrade or change my plan later? <span class="faq-q-icon" aria-hidden="true">+</span></button>
            <div class="faq-answer" role="region"><p class="faq-answer-text">Absolutely. Upgrade or downgrade at any time from your dashboard. Upgrades take effect immediately; downgrades apply from your next billing cycle.</p></div>
          </div>
          <div class="faq-item" role="listitem">
            <button class="faq-question" aria-expanded="false" onclick="toggleFaq(this)" type="button">Are there family discounts? <span class="faq-q-icon" aria-hidden="true">+</span></button>
            <div class="faq-answer" role="region"><p class="faq-answer-text">Yes! Enroll 2 or more family members and receive 15% off all plans. For 3 or more, contact us for a custom family rate.</p></div>
          </div>
          <div class="faq-item" role="listitem">
            <button class="faq-question" aria-expanded="false" onclick="toggleFaq(this)" type="button">Is there a contract or commitment? <span class="faq-q-icon" aria-hidden="true">+</span></button>
            <div class="faq-answer" role="region"><p class="faq-answer-text">Monthly plans have zero commitment — cancel anytime before your next billing date. 3-month and 6-month plans offer discounted rates and can be paused if needed.</p></div>
          </div>
          <div class="faq-item" role="listitem">
            <button class="faq-question" aria-expanded="false" onclick="toggleFaq(this)" type="button">Do you offer a free trial? <span class="faq-q-icon" aria-hidden="true">+</span></button>
            <div class="faq-answer" role="region"><p class="faq-answer-text">Every plan includes one free trial class — no credit card required. Experience a full session and only subscribe if you're completely satisfied.</p></div>
          </div>
        </div>
      </div>

      <!-- Bottom CTA -->
      <div class="pricing-bottom-cta">
        <a href="#book-trial" class="pricing-bottom-cta-btn" data-track="pricing-bottom-cta">
          📅 Start With a Free Trial — No Credit Card Required
        </a>
        <span class="pricing-bottom-note">
          Join 500+ students already learning with NoorPath Academy
        </span>
      </div>

    </div>
  </section>