<script>

  
  (() => {
    const navbar     = document.getElementById('navbar');
    const ctaText    = document.getElementById('cta-text');
    let lastScroll   = 0;
    let ticking      = false;
    
    const annoHeight = document.querySelector('.announcement-bar')?.offsetHeight || 36;

    
    navbar.style.top = annoHeight + 'px';

    function updateNavbar () {
      const currentScroll = window.scrollY;
      const scrolledPast  = currentScroll > 50;

      
      navbar.classList.toggle('scrolled', scrolledPast);

      
      if (currentScroll > lastScroll && currentScroll > 120) {
        
        navbar.classList.add('hidden');
        navbar.classList.remove('visible');
      } else {
        
        navbar.classList.remove('hidden');
        navbar.classList.add('visible');
      }

      
      
      if (ctaText) {
        ctaText.textContent = currentScroll > 300
          ? 'Start Free Trial Now'   
          : 'Book Free Trial';        
      }

      lastScroll = Math.max(currentScroll, 0);
      ticking = false;
    }

    window.addEventListener('scroll', () => {
      if (!ticking) {
        requestAnimationFrame(updateNavbar);
        ticking = true;
      }
    }, { passive: true });

    
    updateNavbar();
  })();

  
  (() => {
    const hamburger   = document.getElementById('hamburger');
    const mobileMenu  = document.getElementById('mobile-menu');
    const coursesToggle = document.getElementById('mobile-courses-toggle');
    const coursesSub    = document.getElementById('mobile-courses-sub');

    hamburger.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.toggle('open');
      hamburger.classList.toggle('open', isOpen);
      hamburger.setAttribute('aria-expanded', String(isOpen));
      mobileMenu.setAttribute('aria-hidden', String(!isOpen));
      document.body.style.overflow = isOpen ? 'hidden' : '';

      track('hamburger-toggle', { state: isOpen ? 'open' : 'closed' });
    });

    coursesToggle.addEventListener('click', () => {
      const isOpen = coursesSub.classList.toggle('open');
      coursesToggle.setAttribute('aria-expanded', String(isOpen));
      coursesToggle.querySelector('span').textContent = isOpen ? '−' : '+';
    });

    
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        hamburger.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        mobileMenu.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
      });
    });
  })();

  
  
  /* ============================================================
     ANALYTICS & TRACKING SYSTEM — NoorPath Academy
     ─────────────────────────────────────────────────────────────
     Architecture:
       1. Thin track() function → pushes to window.dataLayer
       2. GTM reads dataLayer → routes to GA4, Meta Pixel, etc.
       3. All fire-and-forget: never blocks page render
       4. Privacy-safe: no PII in event names or properties

     TO ACTIVATE:
       Replace GTM-XXXXXXX with your real GTM container ID.
       OR replace the gtag() calls with your GA4 measurement ID (G-XXXXXXXX).
       Both methods are shown — use whichever you prefer.
  ============================================================ */

  /* ── Google Tag Manager — paste your container ID ─────────── */
  (function() {
    var GTM_ID = 'GTM-XXXXXXX'; /* ← Replace with your GTM Container ID */

    window.dataLayer = window.dataLayer || [];

    /* GTM snippet (production-ready, async, non-render-blocking) */
    if (GTM_ID !== 'GTM-XXXXXXX') { /* Only fires when real ID is set */
      (function(w,d,s,l,i){
        w[l]=w[l]||[];
        w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'});
        var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s), dl=l!='dataLayer'?'&l='+l:'';
        j.async=true;
        j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
        f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer',GTM_ID);
    }
  })();

  /* ── GA4 direct (alternative to GTM) ─────────────────────── */
  /* Uncomment and replace G-XXXXXXXXXX with your GA4 Measurement ID:
  (function() {
    var GA4_ID = 'G-XXXXXXXXXX';
    var s = document.createElement('script');
    s.async = true;
    s.src = 'https://www.googletagmanager.com/gtag/js?id=' + GA4_ID;
    document.head.appendChild(s);
    window.dataLayer = window.dataLayer || [];
    window.gtag = function(){ window.dataLayer.push(arguments); };
    window.gtag('js', new Date());
    window.gtag('config', GA4_ID, {
      send_page_view: true,
      page_title: document.title,
      page_location: window.location.href
    });
  })();
  */

  /* ── Core track() function ────────────────────────────────── */
  function track(eventName, props) {
    props = props || {};

    /* Always-on session context */
    var ctx = {
      event:          eventName,
      event_category: props.category   || 'engagement',
      event_label:    props.label      || props.package || props.filter || '',
      event_value:    props.value      || 0,
      page_url:       window.location.pathname,
      page_title:     document.title,
      timestamp:      Math.floor(Date.now() / 1000),
      ab_variant:     window._noorABVariant || null
    };

    /* Merge caller properties */
    Object.assign(ctx, props);

    /* 1. Push to GTM dataLayer */
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push(ctx);

    /* 2. Direct GA4 gtag() (if available) */
    if (typeof window.gtag === 'function') {
      window.gtag('event', eventName, ctx);
    }

    /* 3. Facebook Pixel (if available) */
    if (typeof window.fbq === 'function') {
      if (eventName === 'cta-form-submitted')  { window.fbq('track', 'Lead', ctx); }
      if (eventName === 'pageview')            { window.fbq('track', 'PageView'); }
    }

    /* Dev-mode logging (auto-disabled in production via URL check) */
    if (window.location.hostname === 'localhost' ||
        window.location.hostname === '127.0.0.1' ||
        window.location.search.indexOf('debug_analytics=1') !== -1) {
      console.log('[NoorPath Analytics]', eventName, ctx);
    }
  }

  /* ── 1. Page view ─────────────────────────────────────────── */
  (function() {
    track('pageview', {
      category:       'navigation',
      referrer:       document.referrer || 'direct',
      user_agent_cat: /Mobile|Android|iPhone|iPad/.test(navigator.userAgent) ? 'mobile' : 'desktop'
    });
  })();

  /* ── 2. CTA button click tracking via data-track attributes ── */
  (function() {
    document.addEventListener('click', function(e) {
      var el = e.target.closest('[data-track]');
      if (!el) return;

      var eventName = el.dataset.track;
      var isCTA     = /cta|enroll|trial|subscribe|book/.test(eventName);
      var isNav     = /nav-|footer-|logo|mobile-/.test(eventName);
      var isSocial  = /social-/.test(eventName);

      track(eventName, {
        category:    isCTA ? 'cta_click' : isNav ? 'navigation' : isSocial ? 'social' : 'engagement',
        element_tag: el.tagName.toLowerCase(),
        element_text: (el.textContent || '').trim().slice(0, 50),
        page_section: (el.closest('section') || el.closest('nav') || {}).id || 'global'
      });
    }, { passive: true });
  })();

  /* ── 3. Form submissions (with rich properties) ───────────── */
  /* Note: individual forms also call track() directly on submit.
     This global handler catches any form we might have missed. */
  (function() {
    document.addEventListener('submit', function(e) {
      var form = e.target;
      var formId = form.id || 'unknown-form';

      /* Extract non-PII fields */
      var packageEl  = form.querySelector('[id$="-package"], [id$="-course"]');
      var timezoneEl = form.querySelector('[id$="-timezone"]');

      track('form_submit', {
        category:     'conversion',
        form_id:      formId,
        package:      packageEl  ? packageEl.value  : null,
        timezone:     timezoneEl ? timezoneEl.value : null,
        has_phone:    !!form.querySelector('[type="tel"]'),
        label:        formId
      });
    }, { passive: true });
  })();

  /* ── 4. Video play ────────────────────────────────────────── */
  /* vdemoPlay() already calls track('vdemo-video-played') —
     this adds richer video engagement tracking */
  (function() {
    var origPlay = window.vdemoPlay;
    window.vdemoPlay = function() {
      track('video_play', {
        category:     'video',
        video_title:  'NoorPath Academy Demo Class',
        video_url:    'youtube.com/embed/VIDEO_ID',
        play_trigger: 'user_click'
      });
      if (typeof origPlay === 'function') origPlay();
    };
  })();

  /* ── 5. Scroll depth milestones ───────────────────────────── */
  (function() {
    var fired = {};
    var milestones = [25, 50, 75, 90];
    var rticking = false;

    function getScrollPct() {
      var doc    = document.documentElement;
      var body   = document.body;
      var scroll = window.scrollY || window.pageYOffset;
      var total  = Math.max(
        body.scrollHeight, doc.scrollHeight,
        body.offsetHeight, doc.offsetHeight
      ) - window.innerHeight;
      return total > 0 ? Math.round((scroll / total) * 100) : 0;
    }

    window.addEventListener('scroll', function() {
      if (rticking) return;
      rticking = true;
      requestAnimationFrame(function() {
        var pct = getScrollPct();
        milestones.forEach(function(m) {
          if (pct >= m && !fired[m]) {
            fired[m] = true;
            track('scroll_depth', {
              category:       'engagement',
              scroll_percent: m,
              label:          m + '%'
            });
          }
        });
        rticking = false;
      });
    }, { passive: true });
  })();

  /* ── 6. Section view events ───────────────────────────────── */
  (function() {
    var sections = document.querySelectorAll(
      'section[id], div[id="stats"]'
    );
    if (!sections.length) return;

    var sectionObs = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (!entry.isIntersecting) return;
        track('section_viewed', {
          category:     'engagement',
          section_id:   entry.target.id,
          section_name: entry.target.getAttribute('aria-labelledby')
            ? (document.getElementById(entry.target.getAttribute('aria-labelledby')) || {}).textContent || entry.target.id
            : entry.target.id
        });
        sectionObs.unobserve(entry.target);
      });
    }, { threshold: 0.3, rootMargin: '0px' });

    sections.forEach(function(s) { sectionObs.observe(s); });
  })();

  /* ── 7. Engagement time (session heartbeat) ───────────────── */
  (function() {
    var startTime  = Date.now();
    var engaged    = false;
    var firedAt    = {};
    var heartbeats = [30, 60, 120, 300]; /* seconds */

    /* Mark engaged on meaningful interaction */
    ['scroll', 'click', 'keydown', 'touchstart'].forEach(function(evt) {
      document.addEventListener(evt, function() { engaged = true; }, { once: true, passive: true });
    });

    setInterval(function() {
      if (!engaged) return;
      var elapsed = Math.round((Date.now() - startTime) / 1000);
      heartbeats.forEach(function(s) {
        if (elapsed >= s && !firedAt[s]) {
          firedAt[s] = true;
          track('engaged_time', {
            category:         'engagement',
            seconds_on_page:  s,
            label:            s + 's'
          });
        }
      });
    }, 5000);
  })();

  /* ── 8. Exit intent ───────────────────────────────────────── */
  (function() {
    var fired = false;
    document.addEventListener('mouseleave', function(e) {
      if (fired || e.clientY > 0) return;
      fired = true;
      track('exit_intent', {
        category:      'engagement',
        scroll_pct:    Math.round((window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100),
        time_on_page:  Math.round((Date.now() - (window._pageLoadTime || Date.now())) / 1000)
      });
    });
    window._pageLoadTime = Date.now();
  })();

  /* ── 9. A/B test assignment tracking ─────────────────────── */
  (function() {
    var variants = ['Book Free Trial', 'Start Learning Today', 'Try Free Class'];
    var stored   = sessionStorage.getItem('cta_variant');
    var variant  = stored || variants[Math.floor(Math.random() * variants.length)];
    if (!stored) sessionStorage.setItem('cta_variant', variant);
    window._noorABVariant = variant;

    var ctaEl = document.getElementById('cta-text');
    if (ctaEl && variant !== 'Book Free Trial') ctaEl.textContent = variant;

    document.querySelectorAll('[data-track="cta-book-trial"]').forEach(function(el) {
      el.dataset.abVariant = variant;
    });

    track('ab_variant_assigned', {
      category: 'experiment',
      variant:   variant,
      label:     variant
    });
  })();

  /* ── 10. Performance mark (Web Vitals proxy) ──────────────── */
  (function() {
    if (!window.performance || !window.performance.mark) return;

    window.addEventListener('load', function() {
      var nav = performance.getEntriesByType('navigation')[0];
      if (!nav) return;

      track('page_performance', {
        category:       'performance',
        dom_interactive: Math.round(nav.domInteractive),
        dom_complete:    Math.round(nav.domComplete),
        load_time:       Math.round(nav.loadEventEnd - nav.startTime),
        label:           'load'
      });
    });

    /* LCP approximation via PerformanceObserver */
    if (window.PerformanceObserver) {
      try {
        new PerformanceObserver(function(list) {
          var entries = list.getEntries();
          var last    = entries[entries.length - 1];
          if (last) {
            track('lcp', {
              category:  'performance',
              lcp_value: Math.round(last.startTime),
              label:     Math.round(last.startTime) + 'ms'
            });
          }
        }).observe({ entryTypes: ['largest-contentful-paint'] });
      } catch(e) {}
    }
  })();


  
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
      document.querySelectorAll('.nav-links li').forEach(li => li.classList.remove('open'));
      document.getElementById('mobile-menu').classList.remove('open');
      document.getElementById('hamburger').classList.remove('open');
      document.body.style.overflow = '';
    }
  });

  
  (() => {
    const cards = document.querySelectorAll('.course-card');

    if (!cards.length) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        const el    = entry.target;
        const delay = parseInt(el.dataset.delay || '0', 10);
        setTimeout(() => {
          el.classList.add('is-visible');
        }, delay);
        observer.unobserve(el);
      });
    }, {
      threshold:  0.12,
      rootMargin: '0px 0px -40px 0px',
    });

    cards.forEach(card => observer.observe(card));
  })();

  
  (() => {
    
    const track      = document.getElementById('testi-track');
    const dotsWrap   = document.getElementById('testi-dots');
    const progressEl = document.getElementById('testi-progress');

    if (!track) return;

    const cards     = track.querySelectorAll('.testi-card');
    const totalCards = cards.length;
    let perView   = 4;   
    let current   = 0;
    let autoTimer = null;
    let progTimer = null;
    let progVal   = 0;
    const AUTO_INTERVAL = 4000; 

    function getPerView() {
      if (window.innerWidth <= 768)  return 2;
      if (window.innerWidth <= 1100) return 3;
      return 4;
    }

    const maxIdx = () => totalCards - perView;

    
    function buildDots() {
      if (!dotsWrap) return;
      dotsWrap.innerHTML = '';
      const pages = Math.ceil(totalCards / perView);
      for (let i = 0; i < pages; i++) {
        const btn = document.createElement('button');
        btn.className = 'carousel-dot' + (i === 0 ? ' active' : '');
        btn.setAttribute('aria-label', 'Go to page ' + (i + 1));
        btn.addEventListener('click', () => goTo(i * perView));
        dotsWrap.appendChild(btn);
      }
    }

    function updateDots() {
      if (!dotsWrap) return;
      const page = Math.round(current / perView);
      dotsWrap.querySelectorAll('.carousel-dot').forEach((d, i) => {
        d.classList.toggle('active', i === page);
      });
    }

    function goTo(idx) {
      perView = getPerView();
      current = Math.max(0, Math.min(idx, maxIdx()));
      const cardW = cards[0].offsetWidth + 24; 
      track.style.transform = 'translateX(-' + (current * cardW) + 'px)';
      updateDots();
      resetProgress();
      const prevBtn = document.getElementById('testi-prev');
      const nextBtn = document.getElementById('testi-next');
      if (prevBtn) prevBtn.disabled = current === 0;
      if (nextBtn) nextBtn.disabled = current >= maxIdx();
    }

    window.testiCarousel = function(dir) {
      perView = getPerView();
      goTo(current + dir * perView);
      clearAutoScroll();
      setTimeout(startAutoScroll, 6000); 
    };

    
    function resetProgress() {
      clearInterval(progTimer);
      progVal = 0;
      if (progressEl) progressEl.style.width = '0%';
      progTimer = setInterval(() => {
        progVal += 100 / (AUTO_INTERVAL / 100);
        if (progressEl) progressEl.style.width = Math.min(progVal, 100) + '%';
      }, 100);
    }

    function startAutoScroll() {
      clearAutoScroll();
      resetProgress();
      autoTimer = setInterval(() => {
        perView = getPerView();
        if (current >= maxIdx()) { goTo(0); }
        else                     { goTo(current + perView); }
      }, AUTO_INTERVAL);
    }

    function clearAutoScroll() {
      clearInterval(autoTimer);
      clearInterval(progTimer);
      if (progressEl) progressEl.style.width = '0%';
    }

    
    const wrap = document.querySelector('.testi-carousel-wrap');
    if (wrap) {
      wrap.addEventListener('mouseenter', clearAutoScroll);
      wrap.addEventListener('mouseleave', () => {
        setTimeout(startAutoScroll, 1000);
      });
    }

    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        const el    = entry.target;
        const delay = parseInt(el.dataset.tdelay || '0', 10);
        setTimeout(() => el.classList.add('is-visible'), delay);
        observer.unobserve(el);
      });
    }, { threshold: 0.1 });

    cards.forEach(c => observer.observe(c));

    
    perView = getPerView();
    buildDots();
    goTo(0);
    startAutoScroll();
    window.addEventListener('resize', () => {
      perView = getPerView();
      buildDots();
      goTo(0);
    }, { passive: true });

    
    const mSlider = document.getElementById('mobile-testi-slider');
    const mDots   = document.querySelectorAll('#slider-dots .slider-dot');

    if (mSlider && mDots.length) {
      mSlider.addEventListener('scroll', () => {
        const cw  = mSlider.querySelector('.testi-card');
        if (!cw) return;
        const idx = Math.round(mSlider.scrollLeft / (cw.offsetWidth + 16));
        mDots.forEach((d, i) => {
          d.classList.toggle('active', i === idx);
        });
      }, { passive: true });

      mDots.forEach(d => {
        d.addEventListener('click', () => {
          const cw = mSlider.querySelector('.testi-card');
          if (!cw) return;
          mSlider.scrollTo({ left: parseInt(d.dataset.slide) * (cw.offsetWidth + 16), behavior: 'smooth' });
        });
      });
    }

  })();

  
  (() => {

    
    const priceCards = document.querySelectorAll('.price-card[data-pdelay]');

    if (priceCards.length) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (!entry.isIntersecting) return;
          const el    = entry.target;
          const delay = parseInt(el.dataset.pdelay || '0', 10);
          setTimeout(() => el.classList.add('is-visible'), delay);
          observer.unobserve(el);
        });
      }, { threshold: 0.1, rootMargin: '0px 0px -24px 0px' });

      priceCards.forEach(c => observer.observe(c));
    }

    
    const PRICES = {
      monthly: { starter: 25,   pro: 45,   premium: 65   },
      '6month':{ starter: 20,   pro: 36,   premium: 52   },
    };

    const ORIGINAL = {
      monthly: { starter: null, pro: null,  premium: null },
      '6month':{ starter: 25,   pro: 45,    premium: 65   },
    };

    window.setBilling = function(period) {
      const p = PRICES[period];
      const o = ORIGINAL[period];

      
      document.getElementById('starter-price').textContent  = p.starter;
      document.getElementById('pro-price').textContent       = p.pro;
      document.getElementById('premium-price').textContent   = p.premium;

      
      ['starter','pro','premium'].forEach(plan => {
        const origEl = document.getElementById(plan + '-original');
        if (!origEl) return;
        if (o[plan]) {
          origEl.style.display = 'block';
          origEl.innerHTML = '<s>$' + o[plan] + ' / month</s>';
        } else {
          origEl.style.display = 'none';
        }
      });

      
      document.getElementById('bill-monthly').classList.toggle('active', period === 'monthly');
      document.getElementById('bill-monthly').setAttribute('aria-pressed', String(period === 'monthly'));
      document.getElementById('bill-6month').classList.toggle('active', period === '6month');
      document.getElementById('bill-6month').setAttribute('aria-pressed', String(period === '6month'));

      
      if (typeof track === 'function') track('pricing-billing-toggle', { period });
    };

    
    document.querySelectorAll('.billing-option').forEach(btn => {
      btn.addEventListener('keydown', e => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          btn.click();
        }
      });
    });

    
    window.toggleFaq = function(btn) {
      const item   = btn.closest('.faq-item');
      const isOpen = item.classList.contains('open');

      
      document.querySelectorAll('.faq-item.open').forEach(open => {
        open.classList.remove('open');
        open.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
      });

      
      if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
      }

      if (typeof track === 'function')
        track('faq-toggle', { question: btn.textContent.trim().slice(0, 50) });
    };

  })();

  
  (() => {

    
    const yearEl = document.getElementById('footer-year');
    if (yearEl) yearEl.textContent = new Date().getFullYear();

    
    const footerRevealEls = document.querySelectorAll('.footer-reveal');

    if (footerRevealEls.length) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (!entry.isIntersecting) return;
          const el    = entry.target;
          const delay = parseInt(el.dataset.fdelay || '0', 10);
          setTimeout(() => {
            el.classList.add('is-visible');
            el.style.animationDelay = delay + 'ms';
          }, delay);
          observer.unobserve(el);
        });
      }, { threshold: 0.1, rootMargin: '0px 0px -20px 0px' });

      footerRevealEls.forEach(el => observer.observe(el));
    }

    
    window.handleNewsletterSubmit = function(e) {
      e.preventDefault();
      const input   = document.getElementById('newsletter-email');
      const success = document.getElementById('newsletter-success');
      const form    = document.getElementById('newsletter-form');

      if (!input || !input.value.includes('@')) {
        input.focus();
        input.style.borderColor = '#f87171';
        setTimeout(() => { input.style.borderColor = ''; }, 2000);
        return;
      }

      
      form.style.display = 'none';
      if (success) success.style.display = 'flex';

      
      if (typeof track === 'function')
        track('newsletter-subscribed', { email_domain: input.value.split('@')[1] });

      

      
      
      
      
      
      
      
      
      
    };

  })(); 

  
  window.handleCtaFormSubmit = function(e) {
    e.preventDefault();
    var name    = document.getElementById('cta-form-name');
    var email   = document.getElementById('cta-form-email');
    var pkg     = document.getElementById('cta-form-package');
    var btn     = document.getElementById('cta-submit-btn');
    var body    = document.getElementById('cta-form-body');
    var success = document.getElementById('cta-form-success');
    var msg     = document.getElementById('cta-success-msg');

    ['name','email','package'].forEach(function(id) {
      var errEl   = document.getElementById('err-' + id);
      var inputEl = document.getElementById('cta-form-' + (id === 'package' ? 'package' : id));
      if (errEl)   errEl.classList.remove('show');
      if (inputEl) inputEl.classList.remove('error');
    });

    var valid = true;
    if (!name || !name.value.trim()) {
      name.classList.add('error');
      document.getElementById('err-name').classList.add('show');
      valid = false;
    }
    var emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email || !emailRe.test(email.value)) {
      email.classList.add('error');
      document.getElementById('err-email').classList.add('show');
      valid = false;
    }
    if (!pkg || !pkg.value) {
      pkg.classList.add('error');
      document.getElementById('err-package').classList.add('show');
      valid = false;
    }
    if (!valid) return;

    if (btn) { btn.classList.add('loading'); btn.disabled = true; }
    if (typeof track === 'function') track('cta-form-submitted', { package: pkg ? pkg.value : '' });

    setTimeout(function() {
      if (btn) { btn.classList.remove('loading'); btn.disabled = false; }
      var firstName = name.value.trim().split(' ')[0] || 'there';
      if (msg) msg.textContent = 'Thank you, ' + firstName + '! We\'ll reach out within 2 hours to confirm your free trial class details.';
      if (body)    body.style.display = 'none';
      if (success) success.classList.add('show');
    }, 1400);
  };

  
  (() => {
    var statEls = document.querySelectorAll('.stat-count');
    if (!statEls.length) return;
    var started = false;

    function animateCounters() {
      if (started) return;
      started = true;
      statEls.forEach(function(el) {
        var target  = parseInt(el.dataset.target, 10);
        var decimal = el.dataset.decimal;
        var start   = 0;
        var duration = 1800;
        var startTime = null;

        function step(ts) {
          if (!startTime) startTime = ts;
          var progress = Math.min((ts - startTime) / duration, 1);
          var ease = 1 - Math.pow(1 - progress, 3); 
          var current = Math.floor(ease * target);
          el.textContent = decimal ? target + '.' + decimal : current;
          if (progress < 1) requestAnimationFrame(step);
          else el.textContent = decimal ? target + '.' + decimal : target;
        }

        requestAnimationFrame(step);
      });
    }

    var statsBar = document.querySelector('.stats-bar');
    if (statsBar) {
      var obs = new IntersectionObserver(function(entries) {
        if (entries[0].isIntersecting) { animateCounters(); obs.disconnect(); }
      }, { threshold: 0.3 });
      obs.observe(statsBar);
    }
  })();

  
  (() => {
    var aboutCards = document.querySelectorAll('.about-card[data-adelay]');
    if (!aboutCards.length) return;
    var obs = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) {
        if (!e.isIntersecting) return;
        var el = e.target;
        var delay = parseInt(el.dataset.adelay || '0', 10);
        setTimeout(function() { el.classList.add('is-visible'); }, delay);
        obs.unobserve(el);
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -24px 0px' });
    aboutCards.forEach(function(c) { obs.observe(c); });
  })();

  
  (() => {
    var steps = document.querySelectorAll('.how-step[data-hdelay]');
    if (!steps.length) return;
    var obs = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) {
        if (!e.isIntersecting) return;
        var el = e.target;
        var delay = parseInt(el.dataset.hdelay || '0', 10);
        setTimeout(function() { el.classList.add('is-visible'); }, delay);
        obs.unobserve(el);
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -24px 0px' });
    steps.forEach(function(s) { obs.observe(s); });
  })();

  
  window.handleContactSubmit = function(e) {
    e.preventDefault();
    var name    = document.getElementById('contact-name');
    var email   = document.getElementById('contact-email');
    var message = document.getElementById('contact-message');
    var btn     = document.getElementById('contact-submit-btn');
    var body    = document.getElementById('contact-form-body');
    var success = document.getElementById('contact-success');

    
    ['name','email','message'].forEach(function(id) {
      var err = document.getElementById('contact-err-' + id);
      var inp = document.getElementById('contact-' + id);
      if (err) err.classList.remove('show');
      if (inp) inp.classList.remove('error');
    });

    var valid = true;
    if (!name || !name.value.trim()) {
      name.classList.add('error');
      document.getElementById('contact-err-name').classList.add('show');
      valid = false;
    }
    var emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email || !emailRe.test(email.value)) {
      email.classList.add('error');
      document.getElementById('contact-err-email').classList.add('show');
      valid = false;
    }
    if (!message || !message.value.trim()) {
      message.classList.add('error');
      document.getElementById('contact-err-message').classList.add('show');
      valid = false;
    }
    if (!valid) return;

    if (btn) { btn.classList.add('loading'); btn.disabled = true; }
    if (typeof track === 'function') track('contact-form-submitted');

    setTimeout(function() {
      if (btn) { btn.classList.remove('loading'); btn.disabled = false; }
      if (body)    body.style.display = 'none';
      if (success) success.classList.add('show');
    }, 1400);
  };

  
  window.vdemoPlay = function() {
    var iframe = document.getElementById('vdemo-iframe');
    var thumb  = document.getElementById('vdemo-thumbnail');
    if (!iframe || !thumb) return;
    var dataSrc = iframe.getAttribute('data-src');
    if (dataSrc && !iframe.src) { iframe.src = dataSrc; }
    iframe.style.display = 'block';
    thumb.classList.add('hidden');
    if (typeof track === 'function') track('vdemo-video-played');
  };

  
  (() => {

    
    function revealVisible() {
      var cards = document.querySelectorAll('.blog-card:not([data-extra="true"]):not([data-hidden="true"])');
      var obs = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
          if (!e.isIntersecting) return;
          var el = e.target;
          var delay = parseInt(el.dataset.bdelay || '0', 10);
          setTimeout(function() { el.classList.add('is-visible'); }, delay);
          obs.unobserve(el);
        });
      }, { threshold: 0.10, rootMargin: '0px 0px -20px 0px' });
      cards.forEach(function(c) { obs.observe(c); });
    }
    revealVisible();

    
    window.blogFilter = function(btn, filter) {
      
      document.querySelectorAll('.blog-filter-tab').forEach(function(t) {
        var isActive = t === btn;
        t.classList.toggle('active', isActive);
        t.setAttribute('aria-selected', String(isActive));
      });

      
      var cards = document.querySelectorAll('.blog-card:not([data-extra="true"])');
      cards.forEach(function(card) {
        var cat = card.dataset.category || 'all';
        var show = filter === 'all' || cat === filter;
        card.setAttribute('data-hidden', show ? 'false' : 'true');
        if (show) {
          card.style.display = '';
          
          card.classList.remove('is-visible');
          var delay = parseInt(card.dataset.bdelay || '0', 10);
          setTimeout(function() { card.classList.add('is-visible'); }, delay + 60);
        } else {
          card.style.display = 'none';
        }
      });

      if (typeof track === 'function') track('blog-filter-click', { filter: filter });
    };

    
    window.blogLoadMore = function() {
      var btn     = document.getElementById('blog-load-more');
      var extras  = document.querySelectorAll('.blog-card[data-extra="true"]');

      if (!extras.length) return;

      
      if (btn) { btn.classList.add('loading'); btn.disabled = true; }

      setTimeout(function() {
        extras.forEach(function(card, i) {
          card.style.display = '';
          card.removeAttribute('data-extra');
          card.style.opacity = '0';
          card.style.transform = 'translateY(24px)';
          setTimeout(function() {
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            card.style.opacity  = '1';
            card.style.transform = 'translateY(0)';
          }, 60 + i * 80);
        });

        
        if (btn) {
          btn.classList.remove('loading');
          btn.style.display = 'none';
        }

        if (typeof track === 'function') track('blog-load-more-clicked');
      }, 900);
    };

    
    window.blogNewsletterSubmit = function() {
      var input   = document.getElementById('blog-nl-email');
      var form    = document.getElementById('blog-nl-form');
      var success = document.getElementById('blog-nl-success');
      if (!input || !input.value.includes('@')) {
        if (input) {
          input.style.borderColor = '#f87171';
          setTimeout(function() { input.style.borderColor = ''; }, 2000);
        }
        return;
      }
      if (form)    form.style.display = 'none';
      if (success) success.classList.add('show');
      if (typeof track === 'function')
        track('blog-newsletter-subscribed', { email_domain: input.value.split('@')[1] });
    };

  })();

  
  (() => {

    
    var pill = document.getElementById('sticky-trial-pill');
    var heroSection = document.getElementById('hero');
    var bookSection = document.getElementById('book-trial');

    if (pill) {
      var pillticking = false;

      function updatePill() {
        var y = window.scrollY;
        var heroBottom  = heroSection  ? heroSection.offsetTop  + heroSection.offsetHeight  : 0;
        var bookTop     = bookSection  ? bookSection.offsetTop  - window.innerHeight * 0.5  : Infinity;

        
        var show = y > heroBottom && y < bookTop;
        pill.classList.toggle('visible', show);
        pillticking = false;
      }

      window.addEventListener('scroll', function() {
        if (!pillticking) {
          requestAnimationFrame(updatePill);
          pillticking = true;
        }
      }, { passive: true });

      updatePill(); 
    }

    
    var parallaxSections = document.querySelectorAll(
      '.about-section, .how-section, .courses-section, .blog-section'
    );

    if (parallaxSections.length && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      var pticking = false;

      function updateParallax() {
        var scrollY = window.scrollY;
        parallaxSections.forEach(function(sec) {
          var rect   = sec.getBoundingClientRect();
          var center = rect.top + rect.height / 2;
          var shift  = (window.innerHeight / 2 - center) * 0.08; 
          sec.style.setProperty('--parallax-y', shift.toFixed(1) + 'px');
          
          sec.style.backgroundPositionY = (50 + shift * 0.05) + '%';
        });
        pticking = false;
      }

      window.addEventListener('scroll', function() {
        if (!pticking) {
          requestAnimationFrame(updateParallax);
          pticking = true;
        }
      }, { passive: true });
    }

    
    var faqList = document.querySelector('.faq-list');
    if (faqList) {
      faqList.addEventListener('keydown', function(e) {
        var btns = Array.from(faqList.querySelectorAll('.faq-question'));
        var idx  = btns.indexOf(document.activeElement);
        if (idx === -1) return;

        if (e.key === 'ArrowDown') {
          e.preventDefault();
          btns[Math.min(idx + 1, btns.length - 1)].focus();
        } else if (e.key === 'ArrowUp') {
          e.preventDefault();
          btns[Math.max(idx - 1, 0)].focus();
        } else if (e.key === 'Home') {
          e.preventDefault();
          btns[0].focus();
        } else if (e.key === 'End') {
          e.preventDefault();
          btns[btns.length - 1].focus();
        }
      });
    }

    
    var navbarHeight = 108; 

    document.querySelectorAll('a[href^="#"]').forEach(function(link) {
      link.addEventListener('click', function(e) {
        var hash = link.getAttribute('href');
        if (!hash || hash === '#') return;

        var target = document.querySelector(hash);
        if (!target) return;

        
        var targetY = target.getBoundingClientRect().top + window.scrollY - navbarHeight;

        
        if (!CSS.supports('scroll-behavior', 'smooth')) {
          e.preventDefault();
          window.scrollTo({ top: targetY, behavior: 'smooth' });
        }
        

        if (typeof track === 'function') {
          track('anchor-nav-click', { target: hash });
        }
      });
    });

    
    window.addEventListener('pagehide', function() {
      var iframe = document.getElementById('vdemo-iframe');
      if (iframe) { iframe.src = ''; }
    });

    
    var carouselWrap = document.querySelector('.testi-carousel-wrap');
    if (carouselWrap) {
      carouselWrap.setAttribute('tabindex', '0');
      carouselWrap.setAttribute('role', 'region');
      carouselWrap.setAttribute('aria-label', 'Student testimonials carousel');

      carouselWrap.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft')  { e.preventDefault(); if (typeof testiCarousel === 'function') testiCarousel(-1); }
        if (e.key === 'ArrowRight') { e.preventDefault(); if (typeof testiCarousel === 'function') testiCarousel(1);  }
      });
    }

  })();


  /* ============================================================
     TRUST BAR — count-up + fade-in on scroll
  ============================================================ */
  (() => {
    const tbMetrics = document.querySelectorAll('.tb-metric[data-tbdelay]');
    const tbCounts  = document.querySelectorAll('.tb-count[data-tbtarget]');
    let   tbFired   = false;

    function animateTbCounters() {
      tbCounts.forEach(el => {
        const target   = parseInt(el.dataset.tbtarget, 10);
        const duration = target >= 1000 ? 2200 : 1600;
        const startTime = performance.now();

        (function tick(now) {
          const elapsed  = now - startTime;
          const progress = Math.min(elapsed / duration, 1);
          /* Ease-out cubic */
          const eased = 1 - Math.pow(1 - progress, 3);
          const value = Math.floor(eased * target);

          /* Format with commas for 10,000+ */
          el.textContent = value >= 1000
            ? value.toLocaleString()
            : value;

          if (progress < 1) requestAnimationFrame(tick);
          else el.textContent = target >= 1000
            ? target.toLocaleString()
            : target;
        })(performance.now());
      });
    }

    /* Scroll-reveal + counter trigger */
    if (tbMetrics.length) {
      const obs = new IntersectionObserver(entries => {
        if (!entries[0].isIntersecting) return;

        /* Stagger fade-in for each metric */
        tbMetrics.forEach(el => {
          const delay = parseInt(el.dataset.tbdelay || '0', 10);
          setTimeout(() => el.classList.add('tb-visible'), delay);
        });

        /* Trigger count-up once */
        if (!tbFired) {
          tbFired = true;
          setTimeout(animateTbCounters, 200); /* slight delay after reveal */
        }

        obs.disconnect();
      }, { threshold: 0.4 });

      const bar = document.querySelector('.trust-bar');
      if (bar) obs.observe(bar);
    }
  })();


  /* ============================================================
     TEACHER PROFILES — scroll-reveal with staggered delays
  ============================================================ */
  (() => {
    const tpCards = document.querySelectorAll('.tp-card[data-tpdelay]');
    if (!tpCards.length) return;

    const obs = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        const el    = entry.target;
        const delay = parseInt(el.dataset.tpdelay || '0', 10);
        setTimeout(() => el.classList.add('is-visible'), delay);
        obs.unobserve(el);
      });
    }, { threshold: 0.10, rootMargin: '0px 0px -24px 0px' });

    tpCards.forEach(c => obs.observe(c));
  })();


  

  

  

  /* ============================================================
     COMPARISON SECTION — scroll-reveal
  ============================================================ */
  (() => {
    const compEls = [
      [document.querySelector('.comp-header'),       0  ],
      [document.querySelector('.comp-table-wrap'),   120],
      [document.querySelector('.comp-cards-mobile'), 120],
      [document.querySelector('.comp-cta-wrap'),     240],
    ];

    compEls.forEach(([el, delay]) => {
      if (!el) return;
      new IntersectionObserver((entries, obs) => {
        if (!entries[0].isIntersecting) return;
        setTimeout(() => el.classList.add('comp-visible'), delay);
        obs.disconnect();
      }, { threshold: 0.10 }).observe(el);
    });
  })();


  /* Features cards — single IntersectionObserver */
  (() => {
    document.querySelectorAll('.about-card[data-adelay]').forEach(card => {
      new IntersectionObserver((entries, obs) => {
        if (!entries[0].isIntersecting) return;
        const delay = parseInt(card.dataset.adelay || '0', 10);
        setTimeout(() => card.classList.add('ac-visible'), delay);
        obs.disconnect();
      }, { threshold: 0.08 }).observe(card);
    });
  })();

  /* Video/Demo + CTA sections — scroll-reveal (in-view) */
  (() => {
    [
      ['.vdemo-left',  0  ],
      ['.vdemo-right', 100],
      ['.cta-left',    0  ],
      ['.cta-right',   100],
    ].forEach(([sel, delay]) => {
      const el = document.querySelector(sel);
      if (!el) return;
      new IntersectionObserver((entries, obs) => {
        if (!entries[0].isIntersecting) return;
        setTimeout(() => el.classList.add('in-view'), delay);
        obs.disconnect();
      }, { threshold: 0.12 }).observe(el);
    });
  })();

  /* Teacher cards — scroll-reveal */
  (() => {
    document.querySelectorAll('.tp-card[data-tpdelay]').forEach(card => {
      new IntersectionObserver((entries, obs) => {
        if (!entries[0].isIntersecting) return;
        const delay = parseInt(card.dataset.tpdelay || '0', 10);
        setTimeout(() => card.classList.add('is-visible'), delay);
        obs.disconnect();
      }, { threshold: 0.08 }).observe(card);
    });
  })();

  /* Comparison section — scroll-reveal */
  (() => {
    ['.comp-header','.comp-table-wrap','.comp-cards-mobile','.comp-cta-wrap'].forEach(sel => {
      const el = document.querySelector(sel);
      if (!el) return;
      new IntersectionObserver((entries, obs) => {
        if (!entries[0].isIntersecting) return;
        el.classList.add('comp-visible');
        obs.disconnect();
      }, { threshold: 0.10 }).observe(el);
    });
  })();


  /* CTA section — scroll-reveal for cta-inner + cta-form-wrap */
  (() => {
    [
      ['.cta-inner',     0  ],
      ['.cta-form-wrap', 120],
    ].forEach(([sel, delay]) => {
      const el = document.querySelector(sel);
      if (!el) return;
      new IntersectionObserver((entries, obs) => {
        if (!entries[0].isIntersecting) return;
        setTimeout(() => el.classList.add('in-view'), delay);
        obs.disconnect();
      }, { threshold: 0.10 }).observe(el);
    });
  })();


  /* Premium scroll animations — section header fade-ups */
  (() => {
    // Headers: fade up when section enters viewport
    const headers = document.querySelectorAll(
      '.about-header, .vdemo-header, .teachers-header, ' +
      '.pricing-header, .testimonials-header'
    );
    const hdrObs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (!e.isIntersecting) return;
        e.target.classList.add('hdr-visible');
        hdrObs.unobserve(e.target);
      });
    }, { threshold: 0.15 });
    headers.forEach(h => hdrObs.observe(h));

    // About-cards: ensure ac-visible with stagger
    document.querySelectorAll('.about-card[data-adelay]').forEach(card => {
      new IntersectionObserver((entries, obs) => {
        if (!entries[0].isIntersecting) return;
        const delay = parseInt(card.dataset.adelay || '0', 10);
        setTimeout(() => card.classList.add('ac-visible'), delay);
        obs.disconnect();
      }, { threshold: 0.08 }).observe(card);
    });

    // Teacher cards: stagger
    document.querySelectorAll('.tp-card[data-tpdelay]').forEach(card => {
      new IntersectionObserver((entries, obs) => {
        if (!entries[0].isIntersecting) return;
        const delay = parseInt(card.dataset.tpdelay || '0', 10);
        setTimeout(() => card.classList.add('is-visible'), delay);
        obs.disconnect();
      }, { threshold: 0.08 }).observe(card);
    });

    // Pricing cards: stagger
    document.querySelectorAll('.price-card[data-pdelay]').forEach(card => {
      new IntersectionObserver((entries, obs) => {
        if (!entries[0].isIntersecting) return;
        const delay = parseInt(card.dataset.pdelay || '0', 10);
        setTimeout(() => card.classList.add('is-visible'), delay);
        obs.disconnect();
      }, { threshold: 0.08 }).observe(card);
    });
  })();

  /* FREE TRIAL MODAL */
  (() => {
    const overlay   = document.getElementById('ftm-overlay');
    const closeBtn  = document.getElementById('ftm-close');
    const form      = document.getElementById('ftm-form');
    const submitBtn = document.getElementById('ftm-submit');
    const body      = document.getElementById('ftm-body');
    const success   = document.getElementById('ftm-success');
    if (!overlay) return;

    window.openFtm = function(e) {
      if (e) { e.preventDefault(); e.stopPropagation(); }
      overlay.removeAttribute('aria-hidden');
      overlay.classList.add('ftm-open');
      document.body.style.overflow = 'hidden';
      setTimeout(() => { const f = overlay.querySelector('.ftm-input'); if(f) f.focus(); }, 300);
    };

    window.closeFtm = function() {
      overlay.classList.remove('ftm-open');
      overlay.setAttribute('aria-hidden','true');
      document.body.style.overflow = '';
    };

    window.handleFtmSubmit = function(e) {
      e.preventDefault();
      let valid = true;
      overlay.querySelectorAll('.ftm-input[required]').forEach(function(input) {
        const wrap = input.closest('.ftm-field');
        const empty = !input.value.trim();
        const emailBad = input.type==='email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value);
        if (empty || emailBad) { wrap.classList.add('has-error'); valid = false; }
        else wrap.classList.remove('has-error');
      });
      if (!valid) return;
      submitBtn.disabled = true;
      submitBtn.classList.add('loading');
      /* Replace with real API call:
         fetch('/api/book-trial', { method:'POST', headers:{'Content-Type':'application/json'},
           body: JSON.stringify({
             name: document.getElementById('ftm-name').value,
             email: document.getElementById('ftm-email').value,
             phone: document.getElementById('ftm-phone').value,
             country: document.getElementById('ftm-country').value,
             time: document.getElementById('ftm-time').value
           })}).then(() => showFtmSuccess()); */
      setTimeout(function() {
        if (typeof gtag === 'function') gtag('event','free_trial_booked',{event_category:'conversion'});
        showFtmSuccess();
      }, 1000);
    };

    function showFtmSuccess() {
      body.hidden = true; success.hidden = false;
      submitBtn.disabled = false; submitBtn.classList.remove('loading');
    }

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && overlay.classList.contains('ftm-open')) closeFtm();
    });
    overlay.addEventListener('click', function(e) { if(e.target===overlay) closeFtm(); });
    if (closeBtn) closeBtn.addEventListener('click', closeFtm);

    /* Live validation */
    overlay.querySelectorAll('.ftm-input').forEach(function(input) {
      input.addEventListener('blur', function() {
        const wrap = input.closest('.ftm-field');
        const empty = !input.value.trim();
        const emailBad = input.type==='email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value);
        if ((empty || emailBad) && input.required) wrap.classList.add('has-error');
        else wrap.classList.remove('has-error');
      });
      input.addEventListener('input', function() {
        input.closest('.ftm-field').classList.remove('has-error');
      });
    });

    /* Reset on close */
    overlay.addEventListener('transitionend', function() {
      if (!overlay.classList.contains('ftm-open')) {
        setTimeout(function() {
          if(form) form.reset();
          body.hidden = false; success.hidden = true;
          overlay.querySelectorAll('.ftm-field').forEach(function(f){ f.classList.remove('has-error'); });
        }, 200);
      }
    });

    /* Connect ALL Book Free Trial buttons */
    document.querySelectorAll('a[href="#book-trial"]').forEach(function(btn) {
      if (btn.closest('#ftm-overlay')) return;
      btn.addEventListener('click', openFtm);
    });
    /* Also connect sticky pill and primary CTAs */
    ['sticky-trial-pill','cta-btn-primary','hero-btn-primary'].forEach(function(cls) {
      document.querySelectorAll('.'+cls).forEach(function(btn) {
        if (btn.closest('#ftm-overlay')) return;
        btn.addEventListener('click', openFtm);
      });
    });
  })();

</script>