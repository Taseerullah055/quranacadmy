<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>@yield('title','NoorPath Academy | Help Your Child Read Quran Fluently in 30–60 Days — Book a Free Trial')</title>
  <meta name="description" content="Join 120+ Muslim families across the USA. Al-Azhar certified 1-on-1 Quran teachers. Your child starts reading confidently within weeks. Book your FREE 30-minute trial — no credit card needed.">

  <!-- ══ META PIXEL — replace YOUR_PIXEL_ID ══ -->
  <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', 'YOUR_PIXEL_ID');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=YOUR_PIXEL_ID&ev=PageView&noscript=1"/></noscript>

  <!-- ══ GOOGLE TAG MANAGER — replace GTM-XXXXXXX ══ -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-XXXXXXX');</script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800;900&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
</head>
<body>
<!-- GTM noscript -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- ══════════════════════════════
     NAV
══════════════════════════════ -->
@include('client.female_teachers_includes.header')

<!-- ══════════════════════════════
     COUNTDOWN URGENCY BAR
══════════════════════════════ -->
@include('client.female_teachers_includes.urgency_bar')

@yield('content')

<!-- ══════════════════════════════
     FOOTER
══════════════════════════════ -->
<footer>
  <div class="footer-links">
    <a href="#">Privacy Policy</a>
    <a href="#">Terms of Use</a>
    <a href="#">Contact Support</a>
  </div>
  <p>© 2026 NoorPath Academy — Guiding hearts to the Book of Allah. Al-Azhar certified teachers.</p>
  <p style="margin-top:4px">Serving Muslim families in Texas · Michigan · New York · California · New Jersey · Virginia · Florida &amp; across all 50 states · Ijazah &amp; Sanad certified teachers</p>
</footer>

<!-- ══════════════════════════════
     STICKY MOBILE CTA
══════════════════════════════ -->
<div class="sticky-mobile">
  <a href="#final-cta">📖 Book Free Trial — Only <span id="mobileSlotsLeft">6</span> Slots Left This Week!</a>
</div>

<!-- ══════════════════════════════
     WHATSAPP FLOAT
══════════════════════════════ -->
<a href="https://wa.me/18889078726" class="wa-float" target="_blank" rel="noopener" title="Chat on WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

<script>
  // ── FAQ Accordion
  function toggleFaq(btn) {
    const item = btn.parentElement;
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(el => el.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
  }

  // ── Scroll Reveal
  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); } });
  }, { threshold: 0.12 });
  reveals.forEach(el => observer.observe(el));

  // ── Countdown Timer — counts down to Sunday midnight (end of week)
  function getDeadline() {
    const now = new Date();
    const day = now.getDay(); // 0=Sun
    const daysUntilSunday = day === 0 ? 7 : 7 - day;
    const deadline = new Date(now);
    deadline.setDate(now.getDate() + daysUntilSunday);
    deadline.setHours(23, 59, 59, 0);
    return deadline;
  }

  function updateCountdown() {
    const deadline = getDeadline();
    const now = new Date();
    const diff = deadline - now;
    if (diff <= 0) return;
    const h = Math.floor(diff / 3600000);
    const m = Math.floor((diff % 3600000) / 60000);
    const s = Math.floor((diff % 60000) / 1000);
    const pad = n => String(n).padStart(2, '0');
    document.getElementById('cd-h').textContent = pad(h);
    document.getElementById('cd-m').textContent = pad(m);
    document.getElementById('cd-s').textContent = pad(s);
    // update final CTA countdown text
    const finalEl = document.getElementById('finalCountdown');
    if (finalEl) finalEl.textContent = `${pad(h)}h ${pad(m)}m ${pad(s)}s`;
  }
  updateCountdown();
  setInterval(updateCountdown, 1000);

  // ── Slots countdown (start at 6, decrease by 1 every ~8 min to simulate scarcity)
  let slots = 6;
  const storedSlots = sessionStorage.getItem('np_slots');
  if (storedSlots) {
    slots = parseInt(storedSlots);
  }
  function updateSlots() {
    if (slots > 1) {
      slots--;
      sessionStorage.setItem('np_slots', slots);
      const el1 = document.getElementById('slotsLeft');
      const el2 = document.getElementById('finalSlotsLeft');
      if (el1) el1.textContent = slots;
      if (el2) el2.textContent = slots;
    }
  }
  setInterval(updateSlots, 8 * 60 * 1000); // every 8 minutes

  // ── Geo detection — personalise eyebrow copy based on US timezone
  (function() {
    const tz = Intl.DateTimeFormat().resolvedOptions().timeZone || '';
    const el = document.getElementById('geoLine');
    if (!el) return;
    if (tz.female_teachers_includes('America/New_York') || tz.female_teachers_includes('America/Detroit'))
      el.textContent = 'Enrolling Now — Muslim Families in New York & Michigan';
    else if (tz.female_teachers_includes('America/Chicago'))
      el.textContent = 'Enrolling Now — Muslim Families in Texas & Illinois';
    else if (tz.female_teachers_includes('America/Los_Angeles'))
      el.textContent = 'Enrolling Now — Muslim Families in California';
    else if (tz.female_teachers_includes('America/Denver') || tz.female_teachers_includes('America/Phoenix'))
      el.textContent = 'Enrolling Now — Muslim Families Across the USA';
    else if (tz.startsWith('America/'))
      el.textContent = 'Enrolling Now — Muslim Families Across the USA';
  })();

  // ── Hero Form Submit — with validation + Meta Pixel lead event
  document.getElementById('heroFormBtn').addEventListener('click', function() {
    const name = document.getElementById('f-name').value.trim();
    const phone = document.getElementById('f-phone').value.trim();
    const age = document.getElementById('f-age').value;

    if (!name) { document.getElementById('f-name').focus(); return; }
    if (!phone || phone.length < 7) { document.getElementById('f-phone').focus(); return; }
    if (!age) { document.getElementById('f-age').focus(); return; }

    // Fire Meta Pixel Lead event
    if (typeof fbq !== 'undefined') {
      fbq('track', 'Lead', { content_name: 'FreeTrialBooking', content_category: 'QuranAcademy' });
    }
    // Fire Google Ads conversion (replace AW-XXXXXXXXX/YYYYYYY with your conversion ID/label)
    if (typeof gtag !== 'undefined') {
      gtag('event', 'conversion', { 'send_to': 'AW-XXXXXXXXX/YYYYYYY' });
    }

    this.innerHTML = '<i class="fas fa-check-circle"></i> Reserved! We\'ll call or text you within 10 minutes.';
    this.style.background = 'linear-gradient(135deg, #16a34a, #15803d)';
    this.disabled = true;
  });

  // ── Offer CTA — scroll to form
  document.getElementById('offerCtaBtn').addEventListener('click', function() {
    document.querySelector('.hero-form-card').scrollIntoView({behavior:'smooth'});
  });

  // ── Video Placeholder — swap to YouTube embed when clicked
  function loadVideo() {
    const container = document.querySelector('.video-proof');
    // Replace with your actual YouTube video ID
    const videoId = 'YOUR_YOUTUBE_VIDEO_ID';
    container.innerHTML = `<iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0" allow="autoplay; encrypted-media" allowfullscreen style="width:100%;height:100%;border:none;display:block;"></iframe>`;
  }

</script>

</body>
</html>
