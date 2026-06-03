<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  <title>@yield('title','NoorPath Academy — Premium Online Quran Learning')</title>
  
  <meta name="description"
        content="Online Quran classes for kids &amp; adults. Ijazah-certified teachers. Flexible 1-on-1 sessions in your timezone. Free trial — no credit card required." />

  <meta name="keywords"
        content="learn Quran online, online Quran classes, Quran for kids, Tajweed classes, Hifz program, certified Quran teacher, online Islamic education, Quran memorisation, Noorani Qaida, Quran learning USA, Quran classes UK, NoorPath Academy" />

  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="author"      content="NoorPath Quran Academy" />
  <meta name="generator"   content="NoorPath Academy v1.0" />
  <meta name="theme-color" content="#0B3D91" />
  <meta name="format-detection" content="telephone=no" />

  <!-- Canonical -->
  <link rel="canonical" href="https://www.noorpathacademy.com/" />

  <!-- Open Graph — Facebook, LinkedIn, WhatsApp -->
  <meta property="og:type"        content="website" />
  <meta property="og:site_name"   content="NoorPath Quran Academy" />
  <meta property="og:locale"      content="en_US" />
  <meta property="og:url"         content="https://www.noorpathacademy.com/" />
  <meta property="og:title"       content="NoorPath Academy — Online Quran Classes with Certified Teachers" />
  <meta property="og:description" content="Personalised 1-on-1 Quran classes for kids &amp; adults. Certified Ijazah teachers. Flexible scheduling in your timezone. Book your free trial class today." />
  <meta property="og:image"       content="https://www.noorpathacademy.com/images/og-cover.jpg" />
  <meta property="og:image:width"  content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:alt"    content="NoorPath Academy — Online Quran Learning with Certified Teachers" />

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image" />
  <meta name="twitter:site"        content="@NoorPathAcademy" />
  <meta name="twitter:creator"     content="@NoorPathAcademy" />
  <meta name="twitter:title"       content="NoorPath Academy — Online Quran Classes" />
  <meta name="twitter:description" content="Certified Ijazah teachers. Flexible 1-on-1 Quran classes for all ages. Free trial — no card required." />
  <meta name="twitter:image"       content="https://www.noorpathacademy.com/images/og-cover.jpg" />
  <meta name="twitter:image:alt"   content="NoorPath Academy online Quran class screenshot" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon / Apple Touch Icon -->
  <link rel="icon"             type="image/svg+xml" href="/favicon.svg" />
  <link rel="icon"             type="image/png"     href="/favicon.png" sizes="32x32" />
  <link rel="apple-touch-icon"                      href="/apple-touch-icon.png" sizes="180x180" />
  <link rel="manifest"         href="/site.webmanifest" />

  <!-- Schema.org JSON-LD Structured Data -->
  
  <!-- DNS prefetch for third-party performance -->
  <link rel="dns-prefetch" href="//www.youtube.com" />
  <link rel="stylesheet" href="{{ asset('client/css/main.css') }}">

  <!-- Google Fonts — Poppins only, full weight range, display=swap -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        media="print" onload="this.media='all'" />
  
  <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
  <noscript>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
  </noscript>
</head>
<body>
<!-- Google Tag Manager (noscript) — paste after <body> tag -->
<!-- Replace GTM-XXXXXXX with your container ID -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX"
          height="0" width="0"
          style="display:none;visibility:hidden"
          title="Google Tag Manager"></iframe>
</noscript>

<!-- Skip to main content (accessibility) -->
<a href="#main-content"
   class="skip-to-content"
   aria-label="Skip to main content">
  Skip to main content
</a>

<!-- ============================================================
     STICKY TRIAL PILL — appears after 400px scroll
     Sits above WhatsApp FAB · hidden on mobile (bottom bar exists)
============================================================ -->
<a href="#book-trial"
       class="sticky-trial-pill"
       id="sticky-trial-pill"
       data-track="sticky-pill-cta"
       aria-label="Book a free trial class">
  📅 <span>Book Free Trial</span>
</a>

<div class="announcement-bar" role="banner" aria-label="Promotion">
  <span class="pulse-dot" aria-hidden="true"></span>
  <span class="gold">Limited Slots Available</span> — Book your Free Trial Class today &nbsp;·&nbsp;
  Trusted by 500+ students
  <span class="flags" aria-label="USA, UK, Canada, Australia">🇺🇸 🇬🇧 🇨🇦 🇦🇺</span>
</div>

@include('client.includes.navbar')

<!-- ============================================================
     MOBILE DRAWER MENU
============================================================ -->
<div id="mobile-menu" class="mobile-menu" role="dialog" aria-label="Mobile menu" aria-hidden="true">

  <!-- Mobile nav links -->
  <a href="#about" class="mobile-nav-link" data-track="mobile-about">About</a>

  <!-- Courses accordion -->
  <div>
    <button class="mobile-nav-link" style="width:100%;background:none;border:none;font-family:var(--font-sans);font-size:18px;font-weight:500;color:var(--gray-800);text-align:left;cursor:pointer;display:flex;justify-content:space-between;align-items:center;"
            id="mobile-courses-toggle" aria-expanded="false">
      Courses <span>+</span>
    </button>
    <div class="mobile-submenu" id="mobile-courses-sub">
      <a href="#" class="mobile-submenu-item">🌙 Quran for Kids</a>
      <a href="#" class="mobile-submenu-item">📖 Noorani Qaida</a>
      <a href="#" class="mobile-submenu-item">✨ Quran Reading</a>
      <a href="#" class="mobile-submenu-item">🎯 Tajweed Rules</a>
      <a href="#" class="mobile-submenu-item">🏆 Hifz Program</a>
      <a href="#" class="mobile-submenu-item">🌟 Islamic Studies</a>
    </div>
  </div>

  <a href="#pricing" class="mobile-nav-link" data-track="mobile-pricing">Pricing</a>
  <a href="#reviews" class="mobile-nav-link" data-track="mobile-reviews">Reviews ⭐ 4.9</a>
  <a href="#contact" class="mobile-nav-link" data-track="mobile-contact">Contact</a>

  <!-- Mobile trust badges -->
  <div class="mobile-trust" aria-label="Trust indicators">
    <div class="mobile-trust-badge">⭐ Rated 4.9/5</div>
    <div class="mobile-trust-badge">🎓 Certified Teachers</div>
    <div class="mobile-trust-badge">🌍 10+ Years Exp.</div>
    <div class="mobile-trust-badge">🇺🇸 🇬🇧 🇨🇦 🇦🇺 Worldwide</div>
  </div>

</div>

<!-- ============================================================
     STICKY MOBILE BOTTOM CTA — Never let conversion escape
============================================================ -->
<div class="mobile-bottom-cta" aria-label="Book a free trial">
  <a href="#book-trial" class="btn-primary" data-track="mobile-cta-bottom"
     style="border-radius:12px;width:100%;justify-content:center;font-size:15px;padding:14px;">
    📅 Book Free Trial Class — It's Free
  </a>
</div>

<!-- ============================================================
     WHATSAPP FLOATING ACTION BUTTON (CONVERSION TRIGGER #4)
     Reduces purchase anxiety: "I can talk to someone NOW"
============================================================ -->
<a href="https://wa.me/1234567890?text=Hi!%20I%27d%20like%20to%20book%20a%20free%20trial%20class."
   class="whatsapp-fab"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="Chat on WhatsApp"
   data-track="whatsapp-click">
  <div class="whatsapp-tooltip">Chat with us instantly</div>
  <!-- WhatsApp SVG logo -->
  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
  </svg>
</a>

<!-- ============================================================
     HERO SECTION — Full spec implementation
     2-column desktop / stacked mobile
     Poppins H1 (48px) · Green CTA · Trust badges · Testimonial
     Floating image cards · Fade-in + slide-in animations
============================================================ -->

<main id="main-content">
  
  @yield('content')

  @include('client.includes.footer')


  @include('client.includes.scripts')

<div class="ftm-overlay" id="ftm-overlay" role="dialog"
     aria-modal="true" aria-labelledby="ftm-title" aria-hidden="true">
  <div class="ftm-card">
    <button class="ftm-close" id="ftm-close" aria-label="Close form" type="button">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2 2l12 12M14 2L2 14" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
    </button>
    <div class="ftm-header">
      <div class="ftm-badge">🎁 Free Trial — No Card Needed</div>
      <h2 class="ftm-title" id="ftm-title">Book Your Free Trial Class</h2>
      <p class="ftm-subtitle">Fill in the form — we'll confirm your slot within 2 hours on WhatsApp.</p>
    </div>
    <div id="ftm-body">
      <form class="ftm-form" id="ftm-form" onsubmit="handleFtmSubmit(event)" novalidate>
        <div class="ftm-field" id="ftm-f-name">
          <label for="ftm-name" class="ftm-label">Full Name <span class="ftm-req">*</span></label>
          <input id="ftm-name" type="text" class="ftm-input" placeholder="e.g. Sara Ali" autocomplete="name" required />
          <span class="ftm-error" id="ftm-err-name">Please enter your name.</span>
        </div>
        <div class="ftm-field" id="ftm-f-email">
          <label for="ftm-email" class="ftm-label">Email Address <span class="ftm-req">*</span></label>
          <input id="ftm-email" type="email" class="ftm-input" placeholder="you@example.com" autocomplete="email" required />
          <span class="ftm-error" id="ftm-err-email">Enter a valid email address.</span>
        </div>
        <div class="ftm-field" id="ftm-f-phone">
          <label for="ftm-phone" class="ftm-label">WhatsApp Number <span class="ftm-req">*</span></label>
          <input id="ftm-phone" type="tel" class="ftm-input" placeholder="+1 555 000 0000" autocomplete="tel" required />
          <span class="ftm-error" id="ftm-err-phone">Please enter your WhatsApp number.</span>
        </div>
        <div class="ftm-field" id="ftm-f-country">
          <label for="ftm-country" class="ftm-label">Country <span class="ftm-req">*</span></label>
          <select id="ftm-country" class="ftm-input ftm-select" required>
            <option value="" disabled selected>Select your country…</option>
            <option value="US">🇺🇸 United States</option>
            <option value="GB">🇬🇧 United Kingdom</option>
            <option value="CA">🇨🇦 Canada</option>
            <option value="AU">🇦🇺 Australia</option>
            <option value="PK">🇵🇰 Pakistan</option>
            <option value="IN">🇮🇳 India</option>
            <option value="BD">🇧🇩 Bangladesh</option>
            <option value="AE">🇦🇪 UAE</option>
            <option value="SA">🇸🇦 Saudi Arabia</option>
            <option value="MY">🇲🇾 Malaysia</option>
            <option value="NG">🇳🇬 Nigeria</option>
            <option value="ZA">🇿🇦 South Africa</option>
            <option value="other">🌍 Other</option>
          </select>
          <span class="ftm-error" id="ftm-err-country">Please select your country.</span>
        </div>
        <div class="ftm-field" id="ftm-f-time">
          <label for="ftm-time" class="ftm-label">Preferred Class Time <span class="ftm-req">*</span></label>
          <select id="ftm-time" class="ftm-input ftm-select" required>
            <option value="" disabled selected>Select a time slot…</option>
            <option value="morning">🌅 Morning (6am – 12pm)</option>
            <option value="afternoon">☀️ Afternoon (12pm – 5pm)</option>
            <option value="evening">🌆 Evening (5pm – 9pm)</option>
            <option value="night">🌙 Night (9pm – 12am)</option>
            <option value="weekend">🗓️ Weekends Only</option>
            <option value="flexible">✅ I'm Flexible</option>
          </select>
          <span class="ftm-error" id="ftm-err-time">Please choose a preferred time.</span>
        </div>
        <button type="submit" class="ftm-submit" id="ftm-submit">
          <span class="ftm-submit-spinner"></span>
          <span class="ftm-submit-text">📅 Book Free Trial Now</span>
        </button>
        <p class="ftm-trust">✓ Free Trial &nbsp;·&nbsp; ✓ No Credit Card Required &nbsp;·&nbsp; ✓ Quick Response</p>
      </form>
    </div>
    <div class="ftm-success" id="ftm-success" hidden>
      <span class="ftm-success-icon">✅</span>
      <h3 class="ftm-success-title">You're Booked!</h3>
      <p class="ftm-success-msg">Thank you! We will contact you shortly on WhatsApp.</p>
      <p class="ftm-success-sub">Check your WhatsApp for confirmation within 2 hours.</p>
      <button class="ftm-success-close" onclick="closeFtm()" type="button">✕ Close</button>
    </div>
  </div>
</div>

</body>
</html>