@extends('client.layouts.landing_page_layout')
@section('content')
<!-- ══════════════════════════════
     HERO
══════════════════════════════ -->
<section class="hero">
  <div class="hero-bg-img"></div>
  <div class="hero-inner">

    <!-- Copy -->
    <div>
      <div class="hero-eyebrow">
        <span class="live-dot"></span>
        <span id="geoLine">Enrolling Now — Muslim Families Across the USA</span>
      </div>

      <h1>
        Help Your Child Read the Quran<br>
        <em>Fluently in Just 30–60 Days</em><br>
        With Certified 1-on-1 Teachers
      </h1>

      <p class="hero-sub">
        Join 120+ Muslim families across the USA who trust NoorPath Academy to build strong Tajweed, confidence, and a lifelong love for the Quran — from the comfort of home.
      </p>

      <div style="display:inline-flex;align-items:center;gap:6px;background:#FEF3C7;border:1px solid #F59E0B;border-radius:8px;padding:8px 14px;margin-bottom:20px;font-size:0.85rem;font-weight:700;color:#92400E;">
        <span style="color:#F59E0B">⭐⭐⭐⭐⭐</span> Rated 4.9/5 by parents in Texas, New York, California &amp; more
      </div>

      <!-- Al-Azhar explainer -->
      <div class="azhar-explainer">
        <i class="fas fa-info-circle"></i>
        <p><strong>What is Al-Azhar?</strong> Founded in 972 AD in Cairo, Al-Azhar University is the world's oldest and most prestigious Islamic institution. An Al-Azhar certification is the gold standard in Quranic scholarship — the same credential trusted by Muslim communities worldwide for over 1,000 years.</p>
      </div>

      <!-- Parent quote -->
      <div class="hero-quote">
        <p>"My daughter used to struggle with Arabic letters. After 6 weeks with NoorPath Academy, she's reading full surahs on her own. I cried watching her."</p>
        <cite>
          <div class="avatar">FA</div>
          Fatima Al-Hassan — Mother of 2, Houston TX
          &nbsp;· <span style="color:#F59E0B">★★★★★</span>
        </cite>
      </div>

      <div class="badge-row">
        <span class="badge"><i class="fas fa-university"></i> Al-Azhar Certified</span>
        <span class="badge"><i class="fas fa-female"></i> Female Teachers Available</span>
        <span class="badge"><i class="fas fa-clock"></i> USA Timezones</span>
        <span class="badge"><i class="fas fa-shield-alt"></i> Ijazah Chain</span>
      </div>

      <div style="display:flex;flex-wrap:wrap;gap:4px;align-items:center;">
        <a href="#final-cta" class="cta-primary">
          <i class="fas fa-calendar-check"></i>
          Start My Child's Free Trial Class
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="sms:+18889078726?body=Hi%2C%20I%27d%20like%20to%20book%20a%20free%20trial%20class%20for%20my%20child." class="cta-sms">
          <i class="fas fa-sms"></i>
          Text Us
        </a>
      </div>

      <div class="no-risk" style="margin-top:12px">
        <span><i class="fas fa-lock"></i> No credit card needed</span>
        <span><i class="fas fa-smile"></i> 100% risk-free</span>
        <span><i class="fas fa-clock"></i> 30-min session</span>
      </div>
    </div>

    <!-- Form Card -->
    <div class="hero-form-card">
      <div class="form-header">
        <div class="trial-badge">🎁 FREE 30-Minute Trial — No Credit Card</div>
        <h3>Reserve My Child's Free Class</h3>
        <p>Parents are usually contacted within <strong style="color:var(--emerald)">10 minutes</strong> of booking</p>
      </div>

      <div class="form-group">
        <label>Parent's Name *</label>
        <input type="text" id="f-name" placeholder="e.g. Ahmed Abdullah" required autocomplete="name">
      </div>
      <div class="form-group">
        <label>Phone Number (US) *</label>
        <input type="tel" id="f-phone" placeholder="+1 (555) 000-0000" required autocomplete="tel">
      </div>
      <div class="form-group">
        <label>Child's Age Group *</label>
        <select id="f-age" required>
          <option value="">Select age group</option>
          <option>4–6 years</option>
          <option>7–10 years</option>
          <option>11–14 years</option>
          <option>15+ / Adult</option>
        </select>
      </div>
      <div class="form-group">
        <label>Preferred Class Time</label>
        <select id="f-time">
          <option value="">Select preference</option>
          <option>Morning (before noon)</option>
          <option>Afternoon (12pm–5pm)</option>
          <option>Evening (after 5pm)</option>
          <option>Flexible — any time</option>
        </select>
      </div>

      <button class="form-submit" id="heroFormBtn">
        <i class="fas fa-calendar-check"></i>
        ✅ Reserve My Child's Free Class Now
      </button>

      <!-- Security badge row -->
      <div class="form-security-row">
        <span><i class="fas fa-lock"></i> SSL Secure</span>
        <span><i class="fas fa-shield-alt"></i> 256-bit Encrypted</span>
        <span><i class="fas fa-user-shield"></i> Privacy Protected</span>
      </div>

      <!-- TCPA Consent -->
      <p class="form-tcpa">By submitting, you agree to be contacted by NoorPath Academy via phone or SMS at the number provided. Message & data rates may apply. We respect your privacy and will never sell your information. <a href="#" style="color:var(--emerald)">Privacy Policy</a>.</p>

      <div class="trial-landing_page_includes">
        <p>Your Free Trial landing_page_includes:</p>
        <ul>
          <li><i class="fas fa-check-circle"></i> Quran level assessment</li>
          <li><i class="fas fa-check-circle"></i> Teacher matching based on child's needs</li>
          <li><i class="fas fa-check-circle"></i> Personalised learning plan</li>
          <li><i class="fas fa-check-circle"></i> No commitment or obligation</li>
        </ul>
      </div>
    </div>

  </div>
</section>

<!-- ══════════════════════════════
     TRUST BAR
══════════════════════════════ -->
@include('client.landing_page_includes.trust_bar')

<!-- ══════════════════════════════
     PHOTO SCROLL STRIP
══════════════════════════════ -->
@include('client.landing_page_includes.scroll_strip_bar')

<!-- ══════════════════════════════
     LIVE CLASS SHOWCASE
══════════════════════════════ -->
@include('client.landing_page_includes.live_class_showcase')


<!-- ══════════════════════════════
     ABOUT NOORPATH
══════════════════════════════ -->
@include('client.landing_page_includes.about')

<!-- ══════════════════════════════
     PROMOTIONAL BANNER
══════════════════════════════ -->
@include('client.landing_page_includes.promotional_banner')

<!-- ══════════════════════════════
     WHY PARENTS CHOOSE NOORPATH
══════════════════════════════ -->
@include('client.landing_page_includes.parents_chose')

<!-- ══════════════════════════════
     PAIN + SOLUTION
══════════════════════════════ -->
@include('client.landing_page_includes.pain_solution')

<!-- ══════════════════════════════
     REAL RESULTS
══════════════════════════════ -->
@include('client.landing_page_includes.real_results')

<!-- ══════════════════════════════
     PROOF — TESTIMONIALS
══════════════════════════════ -->
@include('client.landing_page_includes.testimonials')

<!-- ══════════════════════════════
     EMOTIONAL PHOTO BANNER
══════════════════════════════ -->
@include('client.landing_page_includes.emotional_photo_banner')

<!-- ══════════════════════════════
     TEACHERS
══════════════════════════════ -->
@include('client.landing_page_includes.teachers')

<!-- ══════════════════════════════
     OUR COURSES
══════════════════════════════ -->
@include('client.landing_page_includes.courses')

<!-- ══════════════════════════════
     HOW IT WORKS
══════════════════════════════ -->
@include('client.landing_page_includes.how_it_work')

<!-- ══════════════════════════════
     OFFER STACK
══════════════════════════════ -->
@include('client.landing_page_includes.offer_stack')

<!-- ══════════════════════════════
     PRICING HINT
══════════════════════════════ -->
@include('client.landing_page_includes.pricing_hint')

<!-- ══════════════════════════════
     JOURNEY DUA SECTION
══════════════════════════════ -->
@include('client.landing_page_includes.journey_dua')

<!-- ══════════════════════════════
     AYAH INSPIRATION SECTION
══════════════════════════════ -->
@include('client.landing_page_includes.ayah_inspiration')

<!-- ══════════════════════════════
     FAQ — OBJECTION HANDLING
══════════════════════════════ -->
@include('client.landing_page_includes.faq')

<!-- ══════════════════════════════
     GUARANTEE
══════════════════════════════ -->
@include('client.landing_page_includes.guarantee')

<!-- ══════════════════════════════
     FINAL CTA
══════════════════════════════ -->
<!-- ══════════════════════════════
     QURAN PHOTO GALLERY
══════════════════════════════ -->
@include('client.landing_page_includes.quran_photo_gallery')
@endsection