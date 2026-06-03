<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>You're Booked — NoorPath Academy</title>
<link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- ✅ ACTION REQUIRED: Replace YOUR_PIXEL_ID_HERE with your real Meta Pixel ID -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init','YOUR_PIXEL_ID_HERE');
fbq('track','PageView');
fbq('track','Lead'); /* Conversion event — do NOT remove */
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=YOUR_PIXEL_ID_HERE&ev=Lead&noscript=1"/></noscript>

<style>
/* ── DESIGN TOKENS — match landing page exactly ── */
:root{
  --forest:#071E13;
  --forest-rich:#0D2E1C;
  --forest-mid:#145236;
  --green-mid:#1A6644;
  --gold:#C8902E;
  --gold-bright:#E0A93C;
  --gold-cream:rgba(200,144,46,.10);
  --cream:#FAF6EE;
  --cream-warm:#F5EFE4;
  --white:#fff;
  --serif:'Amiri',Georgia,serif;
  --sans:'Plus Jakarta Sans',system-ui,sans-serif;
  --r16:16px;--r20:20px;--r24:24px;--rpill:100px;
  --ease:.22s cubic-bezier(.4,0,.2,1);
  --sh-gold:0 8px 32px rgba(200,144,46,.35);
  --sh-gold-lg:0 12px 48px rgba(200,144,46,.45);
}

*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{
  background:var(--forest);
  color:var(--white);
  font-family:var(--sans);
  min-height:100vh;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:flex-start;
  overflow-x:hidden;
}

/* ── ANIMATED BACKGROUND ── */
.bg-orbs{position:fixed;inset:0;pointer-events:none;overflow:hidden;z-index:0}
.orb{position:absolute;border-radius:50%;filter:blur(80px);opacity:.35;animation:drift 12s ease-in-out infinite alternate}
.orb1{width:600px;height:600px;background:radial-gradient(circle,#1A6644,transparent 70%);top:-100px;left:-150px;animation-delay:0s}
.orb2{width:500px;height:500px;background:radial-gradient(circle,#C8902E,transparent 70%);top:40%;right:-150px;opacity:.18;animation-delay:-5s}
.orb3{width:400px;height:400px;background:radial-gradient(circle,#145236,transparent 70%);bottom:-100px;left:30%;animation-delay:-8s}
@keyframes drift{0%{transform:translate(0,0)}100%{transform:translate(30px,20px)}}

/* ── LAYOUT ── */
.page-wrap{
  position:relative;z-index:1;
  width:100%;max-width:680px;
  margin:0 auto;
  padding:48px 24px 80px;
  display:flex;flex-direction:column;align-items:center;
  gap:0;
}

/* ── LOGO ── */
.logo{
  font-family:var(--serif);font-size:22px;font-weight:700;
  color:var(--gold-bright);letter-spacing:.02em;
  margin-bottom:48px;
  display:flex;align-items:center;gap:10px;
  text-decoration:none;
}
.logo-dot{width:8px;height:8px;border-radius:50%;background:var(--gold);box-shadow:0 0 10px var(--gold)}

/* ── CHECKMARK ANIMATION ── */
.check-circle{
  width:96px;height:96px;border-radius:50%;
  background:linear-gradient(135deg,#1A6644,#0D9463);
  display:flex;align-items:center;justify-content:center;
  margin-bottom:32px;
  box-shadow:0 0 0 16px rgba(26,102,68,.15), var(--sh-gold);
  animation:popIn .6s cubic-bezier(.34,1.56,.64,1) forwards;
  transform:scale(0);
}
@keyframes popIn{to{transform:scale(1)}}
.check-svg{width:44px;height:44px;stroke:var(--white);stroke-width:3;fill:none;stroke-linecap:round;stroke-linejoin:round}
.check-path{stroke-dasharray:60;stroke-dashoffset:60;animation:drawCheck .5s ease .55s forwards}
@keyframes drawCheck{to{stroke-dashoffset:0}}

/* ── HEADLINE ── */
.ty-eyebrow{
  font-family:var(--sans);font-size:10.5px;font-weight:700;letter-spacing:.2em;
  text-transform:uppercase;color:var(--gold);background:var(--gold-cream);
  border:1px solid rgba(200,144,46,.25);padding:5px 18px;border-radius:var(--rpill);
  margin-bottom:20px;
  opacity:0;animation:fadeUp .5s ease .3s forwards;
}
.ty-headline{
  font-family:var(--serif);font-size:clamp(34px,7vw,52px);font-weight:700;
  line-height:1.1;text-align:center;color:var(--white);margin-bottom:16px;
  opacity:0;animation:fadeUp .5s ease .45s forwards;
}
.ty-headline em{color:var(--gold-bright);font-style:normal}
.ty-sub{
  font-size:16px;line-height:1.7;color:rgba(255,255,255,.65);
  text-align:center;max-width:520px;margin-bottom:40px;
  opacity:0;animation:fadeUp .5s ease .6s forwards;
}
@keyframes fadeUp{from{opacity:0;transform:translateY(16px)}to{opacity:1;transform:translateY(0)}}

/* ── WHAT HAPPENS NEXT CARD ── */
.next-card{
  width:100%;background:rgba(255,255,255,.06);
  border:1px solid rgba(255,255,255,.12);
  border-radius:var(--r24);padding:36px 32px;
  margin-bottom:32px;backdrop-filter:blur(12px);
  opacity:0;animation:fadeUp .5s ease .75s forwards;
}
.next-title{
  font-family:var(--sans);font-size:11px;font-weight:700;letter-spacing:.18em;
  text-transform:uppercase;color:var(--gold);margin-bottom:24px;
}
.next-steps{display:flex;flex-direction:column;gap:20px}
.next-step{display:flex;align-items:flex-start;gap:16px}
.ns-num{
  width:36px;height:36px;border-radius:50%;flex-shrink:0;
  background:linear-gradient(135deg,var(--green-mid),var(--forest-mid));
  border:1px solid rgba(200,144,46,.3);
  display:flex;align-items:center;justify-content:center;
  font-family:var(--serif);font-size:16px;font-weight:700;color:var(--gold-bright);
}
.ns-body h4{font-size:15px;font-weight:700;color:var(--white);margin-bottom:4px}
.ns-body p{font-size:13.5px;color:rgba(255,255,255,.55);line-height:1.55}
.ns-time{
  display:inline-block;font-size:10.5px;font-weight:700;letter-spacing:.1em;
  text-transform:uppercase;color:var(--gold);background:rgba(200,144,46,.12);
  border:1px solid rgba(200,144,46,.2);border-radius:var(--rpill);
  padding:2px 10px;margin-top:5px;
}

/* ── WHATSAPP CTA ── */
.wa-cta{
  display:flex;align-items:center;justify-content:center;gap:12px;
  width:100%;padding:18px 28px;border-radius:var(--rpill);
  background:linear-gradient(135deg,#25D366,#128C7E);
  color:var(--white);font-family:var(--sans);font-size:16px;font-weight:700;
  text-decoration:none;box-shadow:0 8px 32px rgba(37,211,102,.35);
  transition:transform var(--ease),box-shadow var(--ease);
  margin-bottom:16px;
  opacity:0;animation:fadeUp .5s ease .9s forwards;
}
.wa-cta:hover{transform:translateY(-3px);box-shadow:0 14px 48px rgba(37,211,102,.45)}
.wa-cta svg{width:22px;height:22px;flex-shrink:0}

/* ── BACK LINK ── */
.back-link{
  font-size:13px;color:rgba(255,255,255,.35);text-decoration:none;
  transition:color var(--ease);
  opacity:0;animation:fadeUp .5s ease 1.05s forwards;
}
.back-link:hover{color:var(--gold-bright)}

/* ── TRUST STRIP ── */
.trust-strip{
  display:flex;align-items:center;justify-content:center;
  gap:24px;flex-wrap:wrap;
  margin-top:48px;padding-top:32px;
  border-top:1px solid rgba(255,255,255,.07);
  opacity:0;animation:fadeUp .5s ease 1.1s forwards;
}
.ts-item{
  display:flex;align-items:center;gap:7px;
  font-size:12px;color:rgba(255,255,255,.35);font-weight:500;
}
.ts-icon{font-size:15px}

/* ── MOBILE ── */
@media(max-width:480px){
  .page-wrap{padding:36px 18px 60px}
  .next-card{padding:24px 20px}
  .ty-headline{font-size:32px}
}
</style>
</head>
<body>

<div class="bg-orbs">
  <div class="orb orb1"></div>
  <div class="orb orb2"></div>
  <div class="orb orb3"></div>
</div>

<div class="page-wrap">

  <!-- Logo -->
  <a href="noorpath-fixed.html" class="logo">
    <span class="logo-dot"></span>NoorPath Academy
  </a>

  <!-- Animated checkmark -->
  <div class="check-circle">
    <svg class="check-svg" viewBox="0 0 52 52">
      <path class="check-path" d="M14 26 l10 10 l14 -18"/>
    </svg>
  </div>

  <!-- Eyebrow -->
  <div class="ty-eyebrow">Booking Confirmed</div>

  <!-- Headline — JS fills in child's name if available -->
  <h1 class="ty-headline">
    You're All Set,<br><em id="parent-name">Your Trial Is Booked!</em>
  </h1>

  <p class="ty-sub" id="ty-sub-text">
    3 free lessons have been reserved for your child. Here's exactly what happens next — no guessing, no waiting in the dark.
  </p>

  <!-- What Happens Next -->
  <div class="next-card">
    <div class="next-title">What Happens Next</div>
    <div class="next-steps">
      <div class="next-step">
        <div class="ns-num">1</div>
        <div class="ns-body">
          <h4>We WhatsApp You to Confirm</h4>
          <p>A NoorPath team member will message you on WhatsApp to confirm your child's details and match them with the right certified teacher.</p>
          <span class="ns-time">⏱ Within 1 hour</span>
        </div>
      </div>
      <div class="next-step">
        <div class="ns-num">2</div>
        <div class="ns-body">
          <h4>Meet Your Teacher Before Lesson 1</h4>
          <p>We'll introduce you to your assigned tutor so you can ask questions, share any special needs, and make sure it feels right — before a single lesson begins.</p>
          <span class="ns-time">⏱ Before your first session</span>
        </div>
      </div>
      <div class="next-step">
        <div class="ns-num">3</div>
        <div class="ns-body">
          <h4>First Live Lesson on Your Schedule</h4>
          <p>Your child's first session is booked at a time that fits your family. No fixed slots, no rush — just a calm, joyful first lesson from home.</p>
          <span class="ns-time">⏱ Within 24–48 hours</span>
        </div>
      </div>
      <div class="next-step">
        <div class="ns-num">4</div>
        <div class="ns-body">
          <h4>After 3 Lessons, You Decide — Zero Pressure</h4>
          <p>If your child loves it, enrolling is one message. If it's not the right fit, you simply walk away — no awkward calls, no charges, no obligations.</p>
          <span class="ns-time">✓ No credit card ever required</span>
        </div>
      </div>
    </div>
  </div>

  <!-- WhatsApp CTA — ✅ ACTION REQUIRED: Replace YOUR_WHATSAPP_NUMBER -->
  <a href="https://wa.me/YOUR_WHATSAPP_NUMBER?text=Assalamu%20Alaikum%2C%20I%20just%20signed%20up%20for%20the%203%20free%20lessons%20on%20NoorPath.%20Looking%20forward%20to%20connecting!" class="wa-cta" target="_blank" rel="noopener">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    Message Us on WhatsApp Now
  </a>

  <a href="noorpath-fixed.html" class="back-link">← Back to NoorPath Academy</a>

  <!-- Trust strip -->
  <div class="trust-strip">
    <div class="ts-item"><span class="ts-icon">🔒</span>Your data is never shared</div>
    <div class="ts-item"><span class="ts-icon">⭐</span>4.9/5 from 500+ families</div>
    <div class="ts-item"><span class="ts-icon">🇺🇸</span>Trusted in 15+ US states</div>
    <div class="ts-item"><span class="ts-icon">✅</span>No card. No commitment.</div>
  </div>

</div>

<script>
/* ── Read lead data from sessionStorage and personalise the page ── */
(function() {
  try {
    const raw = sessionStorage.getItem('noorpath_lead');
    if (!raw) return;
    const lead = JSON.parse(raw);

    /* Personalise headline with child's name if captured */
    const childName = lead.child_name || '';
    if (childName) {
      document.getElementById('parent-name').textContent =
        childName + "'s Trial Is Booked!";
    }

    /* Personalise subtitle with timezone if captured */
    const tz = lead.timezone || '';
    if (tz) {
      document.getElementById('ty-sub-text').textContent =
        '3 free lessons have been reserved for ' +
        (childName ? childName : 'your child') +
        ' (' + tz + '). Here\'s exactly what happens next — no guessing, no waiting in the dark.';
    }

  } catch(e) { /* silent fail — page still looks great without personalisation */ }
})();
</script>

</body>
</html>
