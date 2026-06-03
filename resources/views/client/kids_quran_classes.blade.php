<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NoorPath Academy — Where Muslim Children Fall in Love with the Quran</title>

<!-- ═══ FONT OPTIMISATION: preload critical weight, swap so text renders immediately ═══ -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('client/css/landing_page_three.css') }}">


</head>
<body>

<!-- GTM noscript -->
<!-- ✅ ACTION REQUIRED: Replace YOUR_GTM_ID_HERE below too -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=YOUR_GTM_ID_HERE" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- ═══ OWNER ACTION CHECKLIST (remove this entire div before going live) ═══ -->

@include('client.kids_quran_includes.checklist')

<!-- ═══ SCARCITY BAR ═══ -->
<div id="scarcity-bar">
  <span class="sbar-dot"></span>
  <strong>Only <span id="spot-count">4</span> free trial spots remaining this week</strong> — spots are matched to certified teachers and fill fast &nbsp;|&nbsp; Offer resets in <strong id="sbar-timer">--:--:--</strong>
</div>

<!-- ═══ STICKY NAV ═══ -->
<nav id="nav">
  <a href="#top" class="nav-logo">🌙 NoorPath Academy</a>
  <div class="nav-pills">
    <span class="nav-pill"><span class="nav-pill-dot"></span>Ijazah Certified</span>
    <span class="nav-pill"><span class="nav-pill-dot"></span>English-Fluent</span>
    <span class="nav-pill"><span class="nav-pill-dot"></span>4.9 ★ Rating</span>
  </div>
  <a href="#lead-form" class="btn btn-gold nav-cta">Book Free Trial →</a>
</nav>

<!-- ═══ HERO ═══ -->
<section class="hero" id="top">
  <div class="hero-bg"></div>
  <div class="hero-pattern"></div>
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="orb orb-3"></div>

  <div class="hero-inner">
    <p class="hero-bismillah">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</p>

    <div class="hero-badge">
      <span class="live-dot"></span>
      Live · 1-on-1 · From Home · Any US Time Zone
    </div>

    <h1 class="display">
      Your Child Deserves to<br>Grow Up <em>Loving the Quran</em>
    </h1>

    <p class="hero-sub">
      Certified, English-fluent teachers. Live 1-on-1 lessons. From home, on your schedule.<br>
      <strong style="color:var(--gold-bright)">Your child's first 3 lessons are completely free.</strong>
    </p>

    <p class="hero-social-proof">
      <span class="hero-stars">★★★★★</span>
      <span class="proof-dot"></span>
      Rated 4.9/5 by 500+ families
      <span class="proof-dot"></span>
      Trusted in 15+ US states
    </p>

    <!-- ── HERO LEAD FORM ── -->
    <div class="hero-form-wrap" id="lead-form">
      <div class="hero-form-title">Book Your 3 Free Lessons</div>
      <p class="hero-form-sub">Takes 30 seconds. A teacher will WhatsApp you within 1 hour.</p>
      <!-- ✅ ACTION REQUIRED: Replace YOUR_FORMSPREE_ID with your Formspree form ID from formspree.io (free plan works) -->
      <form class="hero-form" id="heroForm" onsubmit="handleFormSubmit(event,'heroFormSuccess')" data-form="hero">
        <div class="form-row">
          <div class="form-field">
            <label for="h-name">Child's First Name</label>
            <input type="text" id="h-name" name="child_name" placeholder="e.g. Aisha" required>
          </div>
          <div class="form-field">
            <label for="h-age">Child's Age</label>
            <select id="h-age" name="child_age" required>
              <option value="" disabled selected>Select age range</option>
              <option>4 – 7 years</option>
              <option>8 – 12 years</option>
              <option>13 – 17 years</option>
              <option>Adult (18+)</option>
            </select>
          </div>
        </div>
        <div class="form-field">
          <label for="h-wa">Your WhatsApp Number</label>
          <input type="tel" id="h-wa" name="whatsapp" placeholder="+1 (555) 000-0000" required>
        </div>
        <div class="form-field">
          <label for="h-tz">Best Time Zone</label>
          <select id="h-tz" name="timezone" required>
            <option value="" disabled selected>Select your time zone</option>
            <option>Eastern (ET)</option>
            <option>Central (CT)</option>
            <option>Mountain (MT)</option>
            <option>Pacific (PT)</option>
          </select>
        </div>
        <button type="submit" class="form-submit">
          Book My 3 Free Lessons — No Card Needed
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:18px;height:18px"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>
        <p class="form-privacy">🔒 We never share your number. Reply STOP at any time.</p>
      </form>
      <div class="form-success" id="heroFormSuccess">
        <div class="form-success-icon">🎉</div>
        <h4>You're Booked In!</h4>
        <p>We'll WhatsApp you within the next hour to confirm your child's teacher and first lesson time. Check your WhatsApp!</p>
      </div>
    </div>

    <div class="stat-bar">
      <div class="sbar-item"><div class="sbar-n">500+</div><div class="sbar-l">Active Students</div></div>
      <div class="sbar-item"><div class="sbar-n">50+</div><div class="sbar-l">Certified Tutors</div></div>
      <div class="sbar-item"><div class="sbar-n">4.9★</div><div class="sbar-l">Average Rating</div></div>
      <div class="sbar-item"><div class="sbar-n">100%</div><div class="sbar-l">English-Fluent</div></div>
    </div>
  </div>

  <div class="scroll-hint">
    <svg width="20" height="28" viewBox="0 0 20 28" fill="none" stroke="white" stroke-width="1.5"><rect x="1" y="1" width="18" height="26" rx="9"/><circle cx="10" cy="9" r="2.5" fill="white" stroke="none"/></svg>
    <span>Scroll</span>
  </div>
</section>

<!-- ═══ TRUST STRIP ═══ -->
<div class="strip">
  <div class="strip-inner">
    <span class="strip-label">Muslim families from</span>
    <div class="strip-chips">
      <div class="strip-chip"><div class="strip-chip-ico">🗽</div>New York</div>
      <div class="strip-chip"><div class="strip-chip-ico">🤠</div>Texas</div>
      <div class="strip-chip"><div class="strip-chip-ico">🌴</div>California</div>
      <div class="strip-chip"><div class="strip-chip-ico">🌆</div>Illinois</div>
      <div class="strip-chip"><div class="strip-chip-ico">🏙️</div>Michigan</div>
      <div class="strip-chip"><div class="strip-chip-ico">➕</div>10 more states</div>
    </div>
  </div>
</div>

<!-- ═══ MANIFESTO ═══ -->
<section class="manifesto">
  <div class="manifesto-pattern"></div>
  <div class="wrap">
    <div class="manifesto-inner">
      <div class="manifesto-left fade">
        <div class="manifesto-quote">The Quran is not a subject to be studied and put aside. It is a companion for life. Our job is not to make your child memorize it — it is to make them love it.</div>
        <div class="manifesto-attr"><div class="manifesto-line"></div><span class="manifesto-attr-text">The NoorPath Promise</span></div>
      </div>
      <div class="manifesto-right fade d2">
        <div class="eyebrow eyebrow-light">Why We Exist</div>
        <h2 class="headline light" style="margin-bottom:32px">We Built NoorPath<br>for <em>Your</em> Family</h2>
        <div class="promise-list">
          <div class="promise-item"><span class="promise-num">01</span><div><h4>Connection Before Curriculum</h4><p>We spend the first session understanding your child — their personality, their pace, their passions. The lesson plan follows. Never the other way around.</p></div></div>
          <div class="promise-item"><span class="promise-num">02</span><div><h4>No Language Barriers, Ever</h4><p>Every teacher is rigorously tested for English fluency before being certified. Your child can ask any question, in plain English, and receive a clear, confident answer.</p></div></div>
          <div class="promise-item"><span class="promise-num">03</span><div><h4>You're Always In the Loop</h4><p>Weekly progress reports, open-door parent sessions, and a teacher you can message directly. You will never wonder how your child is doing.</p></div></div>
          <div class="promise-item"><span class="promise-num">04</span><div><h4>If It's Not Working, We Fix It</h4><p>Wrong teacher? We re-match immediately, no questions asked. Your child's progress is our responsibility — not something we leave to chance.</p></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ PAIN — reordered: emotional pain first ═══ -->
<section class="pain">
  <div class="wrap">
    <div class="pain-layout">
      <div class="fade">
        <div class="eyebrow">The Reality</div>
        <h2 class="headline">You Shouldn't Have to Choose Between <em>Faith and Convenience</em></h2>
        <p class="subhead" style="margin-top:14px">Every Muslim parent in America shares the same wish — a child who carries the Quran with them through life. The system just makes it harder than it should be.</p>
        <div class="pain-grid">
          <!-- Card 1: deepest fear first — child disengagement -->
          <div class="pain-card fade d1">
            <div class="picon">💬</div>
            <h3>Your Child Sits There, Quietly Disconnecting</h3>
            <p>When lessons are confusing, your child stops asking questions — and slowly stops caring. That quiet disconnection is the thing parents fear most, and it happens faster than anyone expects.</p>
          </div>
          <!-- Card 2: safety / trust anxiety -->
          <div class="pain-card fade d2">
            <div class="picon">🔍</div>
            <h3>No Way to Know If the Teacher Is Qualified</h3>
            <p>Finding a local tutor feels like a leap of faith. Do they actually hold Ijazah? Have they been properly vetted? Is it even safe? There's no transparent way to verify — until now.</p>
          </div>
          <!-- Card 3: schedule friction -->
          <div class="pain-card fade d3">
            <div class="picon">📅</div>
            <h3>Life Doesn't Fit a Fixed Timetable</h3>
            <p>School, homework, sports, and family. A rigid class time that can't move is always the first thing dropped when life gets busy — and then weeks pass with nothing.</p>
          </div>
          <!-- Card 4: logistical pain -->
          <div class="pain-card fade d4">
            <div class="picon">🚗</div>
            <h3>Another Weekend Disappearing Into a Drive</h3>
            <p>Long commutes to Islamic centers. Classes that get cancelled last minute. By the time you're home, the whole day is gone — and it's not sustainable for anyone.</p>
          </div>
        </div>
      </div>
      <div class="fade d2">
        <div class="solution-card">
          <div class="solution-inner">
            <div class="solution-tag">The NoorPath Difference</div>
            <h3>There Is a Better Way — and It Starts Right Here at Home</h3>
            <p>NoorPath Academy delivers Ijazah-certified, English-fluent scholars directly to your child — live, one-on-one, on a schedule your family actually controls. No commutes. No credential guesswork. No disengaged children. Just steady, joyful Quran learning that genuinely lasts.</p>
            <div class="sol-items">
              <div class="sol-item"><div class="sol-check">✓</div>Live 1-on-1 sessions — mornings, evenings, weekends</div>
              <div class="sol-item"><div class="sol-check">✓</div>Every teacher holds verified Ijazah — no exceptions</div>
              <div class="sol-item"><div class="sol-check">✓</div>100% English-fluent — zero confusion, zero gaps</div>
              <div class="sol-item"><div class="sol-check">✓</div>Weekly progress reports sent directly to you</div>
              <div class="sol-item"><div class="sol-check">✓</div>Dedicated female teachers — always available</div>
              <div class="sol-item"><div class="sol-check">✓</div>Re-match guarantee — wrong teacher? Fixed immediately</div>
            </div>
            <a href="#lead-form" class="btn btn-gold">Book My 3 Free Lessons — No Card Needed →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ HOW IT WORKS ═══ -->
<section class="how">
  <div class="how-decor"></div><div class="how-decor-2"></div>
  <div class="wrap">
    <div class="how-header fade">
      <div class="eyebrow">Simple Process</div>
      <h2 class="headline" style="text-align:center">From First Click to First Lesson<br>in Under <em>24 Hours</em></h2>
      <p class="subhead" style="text-align:center;margin:0 auto;max-width:540px">We've made starting as frictionless as possible — because the only hard part should be deciding which course to begin with.</p>
    </div>
    <div class="steps">
      <div class="step fade d1"><div class="step-bubble">1</div><h3>Fill In the Form Above</h3><p>30 seconds. Tell us your child's name, age, and your WhatsApp number. That's all we need to get started.</p></div>
      <div class="step fade d2"><div class="step-bubble">2</div><h3>We Match Your Child</h3><p>Within 24 hours, we pair your child with the ideal certified teacher based on age, current level, and learning style.</p></div>
      <div class="step fade d3"><div class="step-bubble">3</div><h3>Experience 3 Free Lessons</h3><p>Your child attends three complete, full-length sessions — completely free. No pressure, no pitch, just genuine learning.</p></div>
      <div class="step fade d4"><div class="step-bubble">4</div><h3>Enroll with Confidence</h3><p>Only join if your child is excited. If not, walk away — no awkward conversations. Most families enroll after session one.</p></div>
    </div>
  </div>
</section>

<!-- ═══ COURSES — Nazra highlighted as Most Popular ═══ -->
<section class="courses" id="courses">
  <div class="wrap">
    <div class="courses-header fade">
      <div class="eyebrow">Our Curriculum</div>
      <h2 class="headline">Every Child Has a Starting Point.<br><em>We Meet Them There.</em></h2>
      <p class="subhead">Four expertly structured tracks — from complete beginner to advanced Hifz — each with a transparent syllabus, clear pricing, and measurable weekly outcomes.</p>
    </div>
    <div class="courses-grid">
      <div class="course-card fade d1">
        <div class="course-ico">📖</div>
        <div class="course-level">Beginner</div>
        <h3>Noorani Qaida</h3>
        <p>The right foundation changes everything. We teach correct Arabic phonetics (Makhraj) from day one — so your child builds on solid ground and never develops habits they'll have to painfully unlearn.</p>
        <ul class="course-features"><li>Arabic alphabet mastery</li><li>Correct Makhraj pronunciation</li><li>Letter joining & short-word formation</li><li>Engaging sessions for young learners</li></ul>
        <div class="course-footer"><div><div class="price-from">Starting from</div><span class="price-val">$35</span><span class="price-per">/ mo</span></div><a href="#lead-form" class="course-try">Try free →</a></div>
      </div>

      <!-- MOST POPULAR -->
      <div class="course-card popular fade d2">
        <div class="popular-badge">⭐ Most Popular</div>
        <div class="course-ico">🎵</div>
        <div class="course-level">Intermediate</div>
        <h3>Quran Recitation (Nazra)</h3>
        <p>Your child will read the Quran fluently and beautifully — with correct Tajweed — and feel the deep satisfaction of reciting the words of Allah with real confidence. Progress reported weekly.</p>
        <ul class="course-features"><li>Fluent page-by-page Quran reading</li><li>Core Tajweed rules — applied, not memorized</li><li>Weekly parent progress report</li><li>Audio recordings of each milestone</li></ul>
        <div class="course-footer"><div><div class="price-from">Starting from</div><span class="price-val">$45</span><span class="price-per">/ mo</span></div><a href="#lead-form" class="course-try">Try free →</a></div>
      </div>

      <div class="course-card fade d3">
        <div class="course-ico">⭐</div>
        <div class="course-level">Advanced</div>
        <h3>Hifz Program</h3>
        <p>Memorizing the Quran is one of the most profound gifts a parent can give. Our personalized plans move your child forward — steadily and sustainably — without the burnout that ends so many Hifz journeys prematurely.</p>
        <ul class="course-features"><li>Personalised daily memorization schedule</li><li>Spaced-repetition revision system</li><li>Session-by-session tracking</li><li>Parent updates at every Juz milestone</li></ul>
        <div class="course-footer"><div><div class="price-from">Starting from</div><span class="price-val">$60</span><span class="price-per">/ mo</span></div><a href="#lead-form" class="course-try">Try free →</a></div>
      </div>

      <div class="course-card fade d4">
        <div class="course-ico">🌙</div>
        <div class="course-level">All Ages</div>
        <h3>Islamic Studies</h3>
        <p>Daily Duas, Salah, manners, and the stories that shaped our faith — woven into lessons your child actively engages with. We don't just teach Islam. We help your child want to live it.</p>
        <ul class="course-features"><li>Essential daily prayers & Duas</li><li>Islamic character & manners (Akhlaq)</li><li>Seerah, Sahabah & Islamic heritage</li><li>Age-appropriate discussions & Q&A</li></ul>
        <div class="course-footer"><div><div class="price-from">Starting from</div><span class="price-val">$35</span><span class="price-per">/ mo</span></div><a href="#lead-form" class="course-try">Try free →</a></div>
      </div>
    </div>
    <div class="free-banner fade">
      <div class="free-banner-text"><h4>🎁 Your First 3 Lessons Are Completely Free</h4><p>No credit card. No sales call. No pressure of any kind. Let your child experience it — then decide with full confidence.</p></div>
      <a href="#lead-form" class="btn btn-gold">Book My Free Lessons →</a>
    </div>
  </div>
</section>

<!-- ═══ COMPARISON TABLE ═══ -->
<section class="compare">
  <div class="wrap">
    <div class="compare-header fade">
      <div class="eyebrow">Why NoorPath</div>
      <h2 class="headline">How We Compare to the Alternatives</h2>
      <p class="subhead">Not all Quran education is equal. Here's what sets a professional academy apart from the other options most US families try first.</p>
    </div>
    <div class="compare-table fade">
      <table>
        <thead><tr><th>Feature</th><th>Local Weekend School</th><th>Random Online Tutor</th><th class="th-highlight">🌙 NoorPath Academy</th></tr></thead>
        <tbody>
          <tr><td>Certified Ijazah</td><td><span class="chk chk-partial">⚠ Sometimes</span></td><td><span class="chk chk-no">✕ Rarely verified</span></td><td class="td-highlight"><span class="chk chk-yes">✓ Every teacher, always</span></td></tr>
          <tr><td>100% English-Fluent</td><td><span class="chk chk-partial">⚠ Varies widely</span></td><td><span class="chk chk-no">✕ Not guaranteed</span></td><td class="td-highlight"><span class="chk chk-yes">✓ Rigorously tested</span></td></tr>
          <tr><td>Background Checked</td><td><span class="chk chk-partial">⚠ Inconsistent</span></td><td><span class="chk chk-no">✕ No screening</span></td><td class="td-highlight"><span class="chk chk-yes">✓ Mandatory screening</span></td></tr>
          <tr><td>Flexible Scheduling</td><td><span class="chk chk-no">✕ Fixed weekend only</span></td><td><span class="chk chk-partial">⚠ Hit or miss</span></td><td class="td-highlight"><span class="chk chk-yes">✓ Any day, any time zone</span></td></tr>
          <tr><td>Weekly Progress Reports</td><td><span class="chk chk-no">✕ No</span></td><td><span class="chk chk-no">✕ No</span></td><td class="td-highlight"><span class="chk chk-yes">✓ Every week, to the parent</span></td></tr>
          <tr><td>Female Tutors Available</td><td><span class="chk chk-partial">⚠ Limited</span></td><td><span class="chk chk-partial">⚠ Hard to find</span></td><td class="td-highlight"><span class="chk chk-yes">✓ Always available</span></td></tr>
          <tr><td>Free Trial</td><td><span class="chk chk-no">✕ No</span></td><td><span class="chk chk-partial">⚠ Rarely</span></td><td class="td-highlight"><span class="chk chk-yes">✓ 3 full lessons free</span></td></tr>
          <tr><td>Re-match Guarantee</td><td><span class="chk chk-no">✕ No</span></td><td><span class="chk chk-no">✕ No</span></td><td class="td-highlight"><span class="chk chk-yes">✓ Immediate, no questions</span></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ═══ TEACHERS ═══ -->
<section class="teachers">
  <div class="wrap">
    <div class="teachers-header fade">
      <div class="eyebrow">Our Tutors</div>
      <h2 class="headline">You'll Know Exactly Who Is <em>Teaching Your Child</em></h2>
      <p class="subhead">Every NoorPath scholar clears a rigorous four-stage verification before they ever enter a virtual classroom. Because the trust of a parent is not something we take lightly.</p>
    </div>
    <div class="trust-row">
      <div class="tcard-trust fade d1"><div class="tcard-trust-ico">🗣️</div><div><h4>100% English Fluent</h4><p>Your child will never sit quietly confused. Every teacher is tested for fluency — so any question gets a clear, confident answer, every time.</p></div></div>
      <div class="tcard-trust fade d2"><div class="tcard-trust-ico">🎓</div><div><h4>Ijazah Certified</h4><p>Every tutor holds a verified, unbroken chain of Quran transmission — including Al-Azhar graduates and scholars from leading Islamic institutions.</p></div></div>
      <div class="tcard-trust fade d3"><div class="tcard-trust-ico">🔒</div><div><h4>Fully Background Checked</h4><p>We screen every teacher thoroughly before they join. You will never have to wonder about who is with your child — we've already done that work for you.</p></div></div>
      <div class="tcard-trust fade d4"><div class="tcard-trust-ico">👩‍🏫</div><div><h4>Female Tutors Available</h4><p>Dedicated female scholars for sisters and young girls — always available, never a special request, never a compromise on comfort.</p></div></div>
    </div>

    <!-- ── CHILD SAFETY CALLOUT ── -->
    <div class="safety-callout fade">
      <div class="safety-callout-icon">🛡️</div>
      <p><strong>Your child's safety is non-negotiable.</strong> All NoorPath sessions run on a secure, encrypted platform with parent monitoring built in. You can sit in on any lesson, at any time, without notice — no permission needed. Every session can be recorded for your personal review.</p>
    </div>

    <div class="teachers-row">
      <div class="teacher-card fade d1"><div class="teacher-ring"><div class="teacher-av">FA</div><div class="teacher-online"></div></div><h4>Ustadha Fatima A.</h4><div class="teacher-spec">Quran & Tajweed Specialist</div><div class="teacher-bdg">Al-Azhar Certified</div><div class="teacher-stars">★★★★★</div><div class="teacher-lessons">847 lessons completed</div><div class="teacher-exp">Specialises in building genuine love for recitation in young learners ages 5–14.</div></div>
      <div class="teacher-card fade d2"><div class="teacher-ring"><div class="teacher-av">YM</div><div class="teacher-online"></div></div><h4>Ustadh Yusuf M.</h4><div class="teacher-spec">Hifz Program Director</div><div class="teacher-bdg">Ijazah Holder</div><div class="teacher-stars">★★★★★</div><div class="teacher-lessons">1,240 lessons completed</div><div class="teacher-exp">Known for sustaining motivation in long-term memorization students, including those with ADHD.</div></div>
      <div class="teacher-card fade d3"><div class="teacher-ring"><div class="teacher-av">SR</div><div class="teacher-online"></div></div><h4>Ustadha Sarah R.</h4><div class="teacher-spec">Islamic Studies & Qaida</div><div class="teacher-bdg">Female Tutor · Certified</div><div class="teacher-stars">★★★★★</div><div class="teacher-lessons">692 lessons completed</div><div class="teacher-exp">Beloved by parents for her warm patience with beginners and ability to make Islamic studies feel alive.</div></div>
      <div class="teacher-card fade d4"><div class="teacher-ring"><div class="teacher-av">AK</div><div class="teacher-online"></div></div><h4>Ustadh Ahmed K.</h4><div class="teacher-spec">Advanced Tajweed Coach</div><div class="teacher-bdg">Ijazah Holder</div><div class="teacher-stars">★★★★★</div><div class="teacher-lessons">1,058 lessons completed</div><div class="teacher-exp">Trusted by intermediate and advanced students for his detail-oriented, structured Tajweed approach.</div></div>
    </div>
  </div>
</section>

<!-- ═══ TESTIMONIALS — ADHD testimonial moved to first position ═══ -->
<section class="testimonials">
  <div class="wrap">
    <div class="test-header fade">
      <div class="eyebrow eyebrow-light">Family Reviews</div>
      <h2 class="headline light">Parents Across America<br>Are Seeing the <em>Difference</em></h2>
      <p class="subhead light" style="margin:0 auto 48px;max-width:560px">These aren't crafted testimonials. They are the real, unedited words of families — after their children's first months learning with NoorPath.</p>
    </div>

    <!-- FEATURED QUOTE — trimmed to the emotional punch line -->
    <div class="featured-quote fade">
      <span class="fq-mark">"</span>
      <p class="fq-text">After her very first NoorPath class, my daughter came to me and said: "Mama, can I go again tomorrow?" No local school or random tutor ever gave us that.</p>
      <div class="fq-author"><span class="fq-star">★★★★★</span> — Nadia H., Dallas, TX</div>
    </div>

    <div class="stat-row fade">
      <div class="srow-item"><div class="srow-n">500+</div><div class="srow-l">Active Students</div></div>
      <div class="srow-item"><div class="srow-n">50+</div><div class="srow-l">Certified Tutors</div></div>
      <div class="srow-item"><div class="srow-n">4.9/5</div><div class="srow-l">Star Rating</div></div>
      <div class="srow-item"><div class="srow-n">15+</div><div class="srow-l">US States</div></div>
    </div>

    <!-- ADHD testimonial moved to first / most prominent position -->
    <div class="test-cards">
      <div class="tc fade d1">
        <div class="tc-stars">★★★★★</div>
        <div class="tc-quote">"</div>
        <p>My son has ADHD and I was genuinely worried no teacher could hold his attention for a full lesson. Ustadh Yusuf figured him out in the first week. Three months later, he has memorised two full surahs.</p>
        <div class="tc-author"><div class="tc-av" style="background:linear-gradient(135deg,#1A6644,#227A52)">TR</div><div><div class="tc-name">Brother Tariq R. <span class="tc-badge">✓ Verified Parent</span></div><div class="tc-loc">📍 Chicago, IL</div></div></div>
      </div>
      <div class="tc fade d2">
        <div class="tc-stars">★★★★★</div>
        <div class="tc-quote">"</div>
        <p>Honestly I did not expect much — we'd tried two other online academies before NoorPath. But my daughter now reminds ME when her class is. She has never done that before in her life.</p>
        <div class="tc-author"><div class="tc-av" style="background:linear-gradient(135deg,#7A5010,#C8902E)">UK</div><div><div class="tc-name">Umm Khalid <span class="tc-badge">✓ Verified Parent</span></div><div class="tc-loc">📍 Houston, TX</div></div></div>
      </div>
      <div class="tc fade d3">
        <div class="tc-stars">★★★★★</div>
        <div class="tc-quote">"</div>
        <p>What finally sold me was being able to actually speak with the teacher — in fluent English — about exactly how my daughter was doing. That alone is worth everything. We are not going anywhere.</p>
        <div class="tc-author"><div class="tc-av" style="background:linear-gradient(135deg,#145236,#1A6644)">FA</div><div><div class="tc-name">Fatima Al-Rashid <span class="tc-badge">✓ Verified Parent</span></div><div class="tc-loc">📍 Dearborn, MI</div></div></div>
      </div>
    </div>

    <div class="test-cta">
      <a href="#lead-form" class="btn btn-gold btn-gold-lg">
        Book My 3 Free Lessons — No Card Needed
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <p>No credit card · No commitment · Cancel anytime</p>
    </div>
  </div>
</section>

<!-- ═══ FAQ ═══ -->
<section class="faq">
  <div class="wrap">
    <div class="faq-layout">
      <div class="fade">
        <div class="eyebrow">Questions</div>
        <h2 class="headline">Every Question Parents Ask Before <em>Enrolling</em></h2>
        <p class="subhead" style="margin-top:14px">Still on the fence? These are the questions every family asks. If yours isn't here, WhatsApp us directly — we reply within the hour.</p>
        <a href="#lead-form" class="btn btn-outline" style="margin-top:28px">Book a Free Trial →</a>
      </div>
      <div class="faq-items fade d2">
        <details class="faq-item"><summary class="faq-q">Is the free trial genuinely free — or is there a catch?</summary><p class="faq-a">There is no catch whatsoever. Three complete, full-length lessons — at zero cost, with no credit card required. At the end of your trial, you decide whether to enroll. If it is not the right fit, you walk away with no awkward conversations and no obligations. We offer the trial because we are confident in what your child will experience from the very first session.</p></details>
        <details class="faq-item"><summary class="faq-q">What age groups do you teach, and is it right for my young child?</summary><p class="faq-a">We teach students from age 4 through to adults. Our youngest learners begin with Noorani Qaida in short, play-based sessions designed around their attention spans. Teens and adults follow a more structured curriculum at their own comfortable pace. Every program is built around the individual — there is no one-size-fits-all approach at NoorPath.</p></details>
        <details class="faq-item"><summary class="faq-q">How exactly are teachers vetted? Can I meet the tutor before we commit?</summary><p class="faq-a">Every teacher undergoes four stages of verification: credential authentication (Ijazah or equivalent), a rigorous English fluency assessment, a full background check, and a live trial-teaching evaluation reviewed by our academic director. And yes — you can speak with your assigned tutor before the very first session. You can also request a different teacher at any time, for any reason, with zero judgment.</p></details>
        <details class="faq-item"><summary class="faq-q">We're on the West Coast. Do you have tutors at reasonable times?</summary><p class="faq-a">We have certified teachers available across Eastern, Central, Mountain, and Pacific time zones — including early mornings before school, evenings after dinner, and full weekend availability. Scheduling is entirely flexible, and you can change your slot at any time with 24 hours notice.</p></details>
        <details class="faq-item"><summary class="faq-q">What platform do sessions happen on? Is it safe for my child?</summary><p class="faq-a">All classes are held via a secure, encrypted video platform with parent monitoring built in. Every session can be recorded for your personal review. Parents are welcome to sit in on any lesson at any time — no need to ask permission. Child safety is not a feature at NoorPath. It is a non-negotiable foundation.</p></details>
        <details class="faq-item"><summary class="faq-q">How will I actually know if my child is progressing?</summary><p class="faq-a">Every enrolled student receives a detailed weekly progress report delivered directly to the parent. Each report covers what was taught, what your child excelled at, what needs more attention, and a clear plan for the following lesson. At every Juz milestone in the Hifz program, you receive a personal message from the teacher. You will never be left wondering.</p></details>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FINAL CTA with inline form ═══ -->
<section class="final-cta">
  <div class="final-cta-pattern"></div>
  <div class="final-cta-inner">
    <p class="final-bismillah">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</p>
    <h2>Give Your Child the <em>Gift of the Quran</em></h2>
    <p>The best time to begin was the day they were born. The second best time is right now — three free lessons, zero risk, and a scholar who will genuinely show up for your child, session after session.</p>

    <!-- Second inline form at bottom of page -->
    <div class="final-form-wrap">
      <div class="hero-form-title">Reserve Your Free Trial Spot</div>
      <p class="hero-form-sub">We'll WhatsApp you within 1 hour to confirm.</p>
      <!-- ✅ ACTION REQUIRED: Same Formspree ID as above -->
      <form class="hero-form" id="finalForm" onsubmit="handleFormSubmit(event,'finalFormSuccess')" data-form="final">
        <div class="form-row">
          <div class="form-field"><label for="f-name">Child's First Name</label><input type="text" id="f-name" name="child_name" placeholder="e.g. Omar" required></div>
          <div class="form-field"><label for="f-age">Child's Age</label><select id="f-age" name="child_age" required><option value="" disabled selected>Age range</option><option>4 – 7 years</option><option>8 – 12 years</option><option>13 – 17 years</option><option>Adult (18+)</option></select></div>
        </div>
        <div class="form-field"><label for="f-wa">Your WhatsApp Number</label><input type="tel" id="f-wa" name="whatsapp" placeholder="+1 (555) 000-0000" required></div>
        <button type="submit" class="form-submit">
          Book My 3 Free Lessons — No Card Needed
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:18px;height:18px"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>
        <p class="form-privacy">🔒 We never share your number. Reply STOP at any time.</p>
      </form>
      <div class="form-success" id="finalFormSuccess">
        <div class="form-success-icon">🎉</div>
        <h4>You're Booked In!</h4>
        <p>We'll WhatsApp you within the next hour to confirm your child's teacher and first lesson time.</p>
      </div>
    </div>

    <div class="g-pills">
      <span class="g-pill">3 Free Lessons</span>
      <span class="g-pill">No Credit Card</span>
      <span class="g-pill">Cancel Anytime</span>
      <span class="g-pill">Re-match Guarantee</span>
    </div>
  </div>
</section>

<!-- ═══ FOOTER ═══ -->
<footer>
  <div class="footer-wrap">
    <div class="footer-grid">
      <div class="f-brand">
        <a href="#top" class="f-logo">🌙 NoorPath Academy</a>
        <p>Bringing Ijazah-certified, English-fluent Quran scholars into the homes of Muslim families across America — one child, one lesson, one life-long connection at a time.</p>
        <div class="f-socials">
          <a href="https://wa.me/YOUR_WHATSAPP_NUMBER" class="f-social" title="WhatsApp">💬</a>
          <a href="#" class="f-social" title="Instagram">📷</a>
          <a href="#" class="f-social" title="Facebook">📘</a>
          <a href="#" class="f-social" title="YouTube">▶️</a>
          <a href="#" class="f-social" title="X">✖</a>
        </div>
      </div>
      <div class="f-col"><h5>Programs</h5><a href="#courses">Noorani Qaida</a><a href="#courses">Quran Recitation</a><a href="#courses">Hifz Program</a><a href="#courses">Islamic Studies</a></div>
      <div class="f-col"><h5>Academy</h5><a href="#">About NoorPath</a><a href="#">Our Teachers</a><a href="#">How It Works</a><a href="#">Family Reviews</a></div>
      <div class="f-col"><h5>Contact & Legal</h5><a href="mailto:info@noorpathacademy.com">info@noorpathacademy.com</a><a href="https://wa.me/YOUR_WHATSAPP_NUMBER">WhatsApp Us</a><a href="/privacy-policy" target="_blank">Privacy Policy</a><a href="/terms-of-service" target="_blank">Terms of Service</a><a href="/refund-policy" target="_blank">Refund Policy</a></div>
    </div>
    <div class="footer-bottom">
      <div class="f-copy"><p>© 2025 <strong>NoorPath Academy</strong> <!-- ✅ Add your registered business name here e.g. "NoorPath LLC" -->. All rights reserved. | info@noorpathacademy.com</p></div>
      <div class="f-disclaimer">This site is not a part of the Facebook website or Meta Platforms, Inc. This site is NOT endorsed by Meta in any way. FACEBOOK is a trademark of Meta Platforms, Inc.</div>
    </div>
  </div>
</footer>

<!-- ═══ WHATSAPP FLOAT BUTTON ═══ -->
<div id="wa-float">
  <div class="wa-tooltip">💬 Chat with us — we reply in minutes</div>
  <a href="https://wa.me/YOUR_WHATSAPP_NUMBER?text=Hi%20NoorPath%2C%20I%27d%20like%20to%20book%20a%20free%20trial%20for%20my%20child." class="wa-btn" target="_blank" rel="noopener" title="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  </a>
</div>

<!-- ═══ MOBILE STICKY BOTTOM CTA ═══ -->
<div id="mobile-cta">
  <div class="mobile-cta-inner">
    <div class="mobile-cta-text">
      <strong>3 Free Lessons — No Card Needed</strong>
      <span>⚡ Only 4 trial spots left this week</span>
    </div>
    <a href="#lead-form" class="mobile-cta-btn">Book Free →</a>
  </div>
</div>

<script>
/* ══════════════════════════════════════════════════════════════
   FORM HANDLER
   — Fires Meta Pixel Lead event
   — Saves lead data to sessionStorage (thank-you page reads it)
   — Redirects to thank-you.html after 600ms
   ══════════════════════════════════════════════════════════════ */
function handleFormSubmit(e, successId) {
  e.preventDefault();
  const form = e.target;
  const btn  = form.querySelector('.form-submit');

  /* 1 — Loading state */
  if (btn) {
    btn.disabled = true;
    btn.innerHTML = 'Confirming your spot… ⏳';
  }

  /* 2 — Collect all field values into an object */
  const leadData = {};
  new FormData(form).forEach((val, key) => { leadData[key] = val; });

  /* 3 — Persist to sessionStorage so thank-you.html can greet by name */
  try { sessionStorage.setItem('noorpath_lead', JSON.stringify(leadData)); } catch(_) {}

  /* 4 — Fire Meta Pixel Lead conversion event */
  if (typeof fbq !== 'undefined') {
    fbq('track', 'Lead', {
      content_name     : 'Free Trial — 3 Free Lessons',
      content_category : 'Quran Academy'
    });
  }

  /* 5 — Redirect to Thank You page */
  setTimeout(() => { window.location.href = 'thank-you.html'; }, 600);
}

/* spinner keyframe used by loading button */
(function(){
  const s = document.createElement('style');
  s.textContent = '@keyframes spin{to{transform:rotate(360deg)}}';
  document.head.appendChild(s);
})();


/* ── SCARCITY COUNTDOWN TIMER — resets every Sunday midnight ET ── */
(function() {
  function getNextSunday() {
    const now = new Date();
    const day = now.getDay(); // 0=Sun
    const daysUntilSunday = day === 0 ? 7 : 7 - day;
    const next = new Date(now);
    next.setDate(now.getDate() + daysUntilSunday);
    next.setHours(0, 0, 0, 0);
    return next;
  }
  function pad(n) { return String(n).padStart(2,'0'); }
  const timerEl = document.getElementById('sbar-timer');
  if (!timerEl) return;
  function tick() {
    const now = new Date();
    const target = getNextSunday();
    const diff = target - now;
    if (diff <= 0) { timerEl.textContent = '00:00:00'; return; }
    const h = Math.floor(diff / 3600000);
    const m = Math.floor((diff % 3600000) / 60000);
    const s = Math.floor((diff % 60000) / 1000);
    timerEl.textContent = pad(h) + ':' + pad(m) + ':' + pad(s);
  }
  tick();
  setInterval(tick, 1000);
})();


const nav = document.getElementById('nav');
window.addEventListener('scroll', () => {
  const y = window.scrollY;
  nav.classList.toggle('visible', y > 320);
  nav.classList.toggle('scrolled', y > 60);
}, { passive: true });

/* ── FADE-IN ── */
const io = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in'); });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
document.querySelectorAll('.fade').forEach(el => io.observe(el));

/* ── WHATSAPP FLOAT: show after 5s ── */
setTimeout(() => {
  document.getElementById('wa-float').classList.add('show');
}, 5000);

/* ── MOBILE STICKY CTA: show after 60% scroll depth ── */
const mobileCta = document.getElementById('mobile-cta');
const heroForm = document.getElementById('lead-form');
window.addEventListener('scroll', () => {
  const scrollPct = window.scrollY / (document.body.scrollHeight - window.innerHeight);
  const formRect = heroForm.getBoundingClientRect();
  const formVisible = formRect.top < window.innerHeight && formRect.bottom > 0;
  if (scrollPct > 0.6 && !formVisible) {
    mobileCta.classList.add('show');
  } else {
    mobileCta.classList.remove('show');
  }
}, { passive: true });
</script>
</body>
</html>
