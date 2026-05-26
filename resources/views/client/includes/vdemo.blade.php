<section class="vdemo-section" id="demo" aria-labelledby="vdemo-heading">
    <div class="vdemo-container">

      <!-- Section header — centred above the 2-col layout -->
      <div class="vdemo-header">
        <div class="vdemo-eyebrow" aria-hidden="true">🎬 See It In Action</div>
        <!-- Spec: "Watch a Sample Quran Class", 32–36px, #0B3D91, centre -->
        <h2 class="vdemo-title" id="vdemo-heading">
          Watch a <span class="vdemo-accent">Sample Quran Class</span>
        </h2>
        <span class="vdemo-underline" aria-hidden="true"></span>
        <!-- Spec: 16–18px, #555, 15–20px margin -->
        <p class="vdemo-subtitle">
          See how our expert teachers guide students in a personalized
          and interactive way — from the comfort of home.
        </p>
      </div>

      <!-- 2-col grid: Left = trust copy | Right = video -->
      <div class="vdemo-grid">

        <!-- LEFT — trust badges + CTA -->
        <div class="vdemo-left">

          <!-- Spec optional trust elements: ✔ Certified  ✔ Interactive  ✔ Flexible -->
          <div class="vdemo-badges" aria-label="Class highlights">

            <div class="vdemo-badge-item">
              <div class="vdemo-badge-icon" aria-hidden="true">🎓</div>
              <div class="vdemo-badge-text">
                <span class="vdemo-badge-label">Certified Teachers</span>
                <span class="vdemo-badge-sub">Ijazah-qualified &amp; background checked</span>
              </div>
            </div>

            <div class="vdemo-badge-item">
              <div class="vdemo-badge-icon" aria-hidden="true">💬</div>
              <div class="vdemo-badge-text">
                <span class="vdemo-badge-label">Interactive Classes</span>
                <span class="vdemo-badge-sub">Live 1-on-1 via Zoom or Google Meet</span>
              </div>
            </div>

            <div class="vdemo-badge-item">
              <div class="vdemo-badge-icon" aria-hidden="true">🕐</div>
              <div class="vdemo-badge-text">
                <span class="vdemo-badge-label">Flexible Timings</span>
                <span class="vdemo-badge-sub">Morning, evening &amp; weekend slots</span>
              </div>
            </div>

          </div>

          <!-- Quote / social proof -->
          <div class="vdemo-quote-card" role="blockquote">
            <div class="vdemo-quote-stars" aria-label="5 stars">★★★★★</div>
            <p class="vdemo-quote-text">
              "The teacher was so patient. My daughter learned the
              alphabet in just 2 weeks!"
            </p>
            <div class="vdemo-quote-author">
              <div class="vdemo-quote-avatar" aria-hidden="true">S</div>
              <div>
                <div class="vdemo-quote-name">Sara K.</div>
                <div class="vdemo-quote-loc">🇺🇸 USA · Parent</div>
              </div>
            </div>
          </div>

          <!-- Spec: CTA — #28A745, 14px 28px, radius 10px, hover scale + brighter green -->
          <a href="#book-trial" class="vdemo-cta-btn" data-track="vdemo-cta"
             aria-label="Book your free trial class">
            📅 Book Your Free Trial Now
          </a>
          <span class="vdemo-cta-note" aria-hidden="true">
            ✓ No credit card &nbsp;·&nbsp; ✓ Free first class &nbsp;·&nbsp; ✓ Cancel anytime
          </span>

        </div>
        <!-- /vdemo-left -->

        <!-- RIGHT — video player -->
        <div class="vdemo-right">
          <div class="vdemo-player-wrap">

            <!-- Floating quality card — bottom-left -->
            <div class="vdemo-quality-card" aria-label="2,400+ views on this demo">
              <span class="vdemo-qcard-icon" aria-hidden="true">👁️</span>
              <div class="vdemo-qcard-text">
                <span class="vdemo-qcard-num">2,400+</span>
                <span class="vdemo-qcard-label">Views on this demo</span>
              </div>
            </div>

            <!-- Floating trust badge — top-right -->
            <div class="vdemo-trust-card" aria-hidden="true">
              <span style="font-size:13px;">⭐</span>
              <span class="vdemo-trust-card-text">4.9 Rated Teacher</span>
            </div>

            <!-- 16:9 aspect ratio wrapper -->
            <div class="vdemo-aspect">
              <!--
                REPLACE VIDEO_ID with your actual YouTube video ID.
                e.g. https://youtu.be/ABC123XYZ  →  data-src uses ABC123XYZ
              -->
              <video
                    id="vdemo-video"
                    class="vdemo-iframe"
                    controls
                    preload="none"
                    poster="{{ asset('client/images/video-thumbnail.jpg') }}"
              >
                    <source src="{{ asset('client/videos/video1.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
              </video>

              <!-- Play overlay — click to load YouTube video -->
              <div class="vdemo-thumbnail" id="vdemo-thumbnail"
                   role="button" tabindex="0"
                   aria-label="Play sample Quran class video"
                   onclick="vdemoPlay()"
                   onkeydown="if(event.key==='Enter'||event.key===' '){vdemoPlay();}">

                <!-- Sample-class badge -->
                <div class="vdemo-live-badge" aria-hidden="true">
                  <span class="live-dot"></span>Sample Class
                </div>

                <!-- Play button -->
                <div class="vdemo-play-btn" aria-hidden="true">
                  <div class="play-circle">
                    <span class="play-pulse"></span>
                    <span class="play-pulse"></span>
                    <div class="play-inner">
                      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 5v14l11-7z"/>
                      </svg>
                    </div>
                  </div>
                  <span class="play-label">▶ Watch Free Demo</span>
                </div>

                <!-- Bottom info bar -->
                <div class="vdemo-thumb-info" aria-hidden="true">
                  <span class="vdemo-thumb-title">NoorPath Academy · Tajweed Demo</span>
                  <span class="vdemo-duration-badge">4:32</span>
                </div>

              </div>
              <!-- /vdemo-thumbnail -->

            </div>
            <!-- /vdemo-aspect -->

          </div>
          <!-- /vdemo-player-wrap -->
        </div>
        <!-- /vdemo-right -->

      </div>
      <!-- /vdemo-grid -->

    </div>

    <script>
      function vdemoPlay() {

        const video = document.getElementById('vdemo-video');
        const thumbnail = document.getElementById('vdemo-thumbnail');

        thumbnail.style.display = 'none';

        video.play();
      }
    </script>
  </section>