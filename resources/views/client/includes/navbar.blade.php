<nav id="navbar" role="navigation" aria-label="Main navigation">
  <div class="navbar-inner">

    <!-- LOGO — Islamic identity, modern execution -->
    <a href="#" class="logo" aria-label="NoorPath Academy Home"
       data-track="logo-click">
      <div class="logo-icon">
        <!-- SVG: Geometric crescent + star — minimal, premium -->
        <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="18" cy="18" r="18" fill="#064e3b"/>
          <!-- Crescent -->
          <circle cx="18" cy="18" r="10" fill="#d4a847"/>
          <circle cx="22" cy="14" r="8" fill="#064e3b"/>
          <!-- Star -->
          <polygon points="26,11 26.7,13.2 29,13.2 27.2,14.5 27.9,16.7 26,15.4 24.1,16.7 24.8,14.5 23,13.2 25.3,13.2"
                   fill="#d4a847"/>
        </svg>
      </div>
      <div class="logo-text">
        <span class="logo-name">NoorPath</span>
        <span class="logo-tagline">Quran Academy</span>
      </div>
    </a>

    <!-- PRIMARY NAV LINKS -->
    <ul class="nav-links" role="list">

      <!-- About -->
      <li>
        <a href="#about" class="nav-link" data-track="nav-about">About</a>
      </li>

      <!-- Courses — MEGA MENU (CONVERSION TRIGGER #2: Clarity = trust) -->
      <li>
        <button class="nav-link" aria-haspopup="true" aria-expanded="false"
                data-track="nav-courses-open">
          Courses
          <!-- Chevron icon -->
          <svg class="chevron" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>

        <div class="mega-menu" role="menu" aria-label="Courses">
          <div class="mega-menu-header">
            <h3>All Programs</h3>
          </div>

          <!-- Course: Quran for Kids -->
          <a href="#" class="course-card" role="menuitem" data-track="course-kids">
            <div class="course-icon">🌙</div>
            <div class="course-info">
              <div class="course-name">
                Quran for Kids
                <span class="level-tag kids">Kids</span>
              </div>
              <p class="course-desc">Fun, structured lessons for ages 5–12. Certified child-friendly teachers.</p>
            </div>
          </a>

          <!-- Course: Noorani Qaida -->
          <a href="#" class="course-card" role="menuitem" data-track="course-qaida">
            <div class="course-icon">📖</div>
            <div class="course-info">
              <div class="course-name">
                Noorani Qaida
                <span class="level-tag beginner">Beginner</span>
              </div>
              <p class="course-desc">Master Arabic letters and pronunciation from zero. Perfect starting point.</p>
            </div>
          </a>

          <!-- Course: Quran Reading -->
          <a href="#" class="course-card" role="menuitem" data-track="course-reading">
            <div class="course-icon">✨</div>
            <div class="course-info">
              <div class="course-name">
                Quran Reading
                <span class="level-tag beginner">Beginner</span>
              </div>
              <p class="course-desc">Read fluently with correct Makharij. One-to-one sessions, flexible timezone.</p>
            </div>
          </a>

          <!-- Course: Tajweed -->
          <a href="#" class="course-card" role="menuitem" data-track="course-tajweed">
            <div class="course-icon">🎯</div>
            <div class="course-info">
              <div class="course-name">
                Tajweed Rules
                <span class="level-tag advanced">Advanced</span>
              </div>
              <p class="course-desc">Perfect your recitation with Ijazah-certified teachers. Internationally recognized.</p>
            </div>
          </a>

          <!-- Course: Hifz -->
          <a href="#" class="course-card" role="menuitem" data-track="course-hifz">
            <div class="course-icon">🏆</div>
            <div class="course-info">
              <div class="course-name">
                Hifz Program
                <span class="level-tag advanced">Advanced</span>
              </div>
              <p class="course-desc">Memorize the Quran with structured revision tracks and progress reports.</p>
            </div>
          </a>

          <!-- Course: Islamic Studies -->
          <a href="#" class="course-card" role="menuitem" data-track="course-islamic">
            <div class="course-icon">🌟</div>
            <div class="course-info">
              <div class="course-name">
                Islamic Studies
                <span class="level-tag all">All Levels</span>
              </div>
              <p class="course-desc">Duas, pillars, Seerah & more. For kids and adults, curriculum-based.</p>
            </div>
          </a>

          <!-- Mega menu footer -->
          <div class="mega-menu-footer">
            <span>Not sure where to start?</span>
            <a href="#" class="mega-menu-cta" data-track="courses-quiz">
              Take the placement quiz →
            </a>
          </div>
        </div>
      </li>

      <!-- Pricing -->
      <li>
        <a href="#pricing" class="nav-link" data-track="nav-pricing">Pricing</a>
      </li>

      <li>
        <a href="{{ route('client.add.review') }}" class="nav-link" data-track="nav-pricing">Add Review</a>
      </li>

      <!-- Reviews — Social proof link (CONVERSION TRIGGER #3) -->
      <li>
        <a href="#reviews" class="nav-link" data-track="nav-reviews">
          Reviews
          <!-- Star rating inline — instant proof -->
          <span style="font-size:11px;color:#f59e0b;margin-left:2px;">⭐ 4.9</span>
        </a>
      </li>

      <!-- Contact -->
      <li>
        <a href="#contact" class="nav-link" data-track="nav-contact">Contact</a>
      </li>

    </ul>
    <!-- END nav-links -->

    <!-- TRUST STRIP — Inline authority (hidden on tablet/mobile) -->
    <div class="trust-strip" aria-label="Trust indicators">
      <div class="trust-item">
        <span class="star">⭐</span>
        <span><strong>4.9/5</strong> · 500+ students</span>
      </div>
      <div class="dot" aria-hidden="true"></div>
      <div class="trust-item">
        <span>🎓</span>
        <span>Certified Teachers</span>
      </div>
    </div>

    <!-- NAV ACTIONS — CTA pair -->
    <div class="nav-actions">

      <!-- Secondary ghost CTA -->
      <a href="#how-it-works" class="btn-ghost" data-track="cta-how-it-works">
        <!-- Play icon -->
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <circle cx="7" cy="7" r="6.5" stroke="currentColor"/>
          <path d="M5.5 5l4 2.5-4 2.5V5z" fill="currentColor"/>
        </svg>
        See How It Works
      </a>

      <!-- Primary CTA — A/B test ready, analytics hook -->
      <!-- A/B variants: "Book Free Trial" | "Start Learning Today" | "Try Free Class" -->
      <div style="display:flex;flex-direction:column;align-items:center;gap:4px;">
        <a href="#book-trial"
           class="btn-primary pulse"
           id="primary-cta"
           data-track="cta-book-trial"
           data-ab-variant="A"
           aria-label="Book a free trial class — no credit card required">
          <!-- Calendar icon -->
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" style="flex-shrink:0;">
            <rect x="1" y="2.5" width="13" height="11" rx="2" stroke="white" stroke-width="1.3"/>
            <path d="M1 6h13" stroke="white" stroke-width="1.3"/>
            <path d="M5 1v3M10 1v3" stroke="white" stroke-width="1.3" stroke-linecap="round"/>
          </svg>
          <span id="cta-text">Book Free Trial</span>
          <span class="btn-badge">FREE</span>
        </a>
        <!-- Friction reducer: No credit card copy -->
        <span class="no-cc" aria-label="No credit card required">No credit card required</span>
      </div>

    </div>

    <!-- HAMBURGER — Mobile only -->
    <button class="hamburger" id="hamburger"
            aria-label="Open menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
            data-track="hamburger-open">
      <span></span>
      <span></span>
      <span></span>
    </button>

  </div>
</nav>