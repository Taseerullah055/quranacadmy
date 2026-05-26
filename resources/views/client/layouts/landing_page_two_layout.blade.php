<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>@yield('title','Noor Academy | Book Your Free Quran Trial Lesson')</title>
  <meta name="description" content="Al-Azhar certified Quran teachers for kids in USA, UK, Canada & Australia. 1-on-1 live classes, flexible timing, female teachers available. Book your free trial lesson today.">

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="stylesheet" href="{{ asset('client/css/landing_page_two.css')}}">
</head>
<body class="bg-white">

  <!-- ================================================ -->
  <!-- CONVERSION NAV — Logo + Single CTA Only -->
  <!-- ================================================ -->
  @include('client.landing_page_two_includes.header')

   @yield('content')
 
  <!-- ================================================ -->
  <!-- FOOTER — Contact + Socials + Legal -->
  <!-- ================================================ -->
  
  @include('client.landing_page_two_includes.footer')

  <!-- ================================================ -->
  <!-- STICKY MOBILE CTA BAR -->
  <!-- ================================================ -->
  <div class="fixed bottom-4 left-4 right-4 md:hidden z-50 flex justify-center gap-3">
    <a href="https://wa.me/923019426706" target="_blank" rel="noopener noreferrer"
       class="bg-green-500 text-white font-bold py-3 px-5 rounded-full shadow-2xl flex items-center gap-2 text-sm">
      <i class="fab fa-whatsapp text-lg"></i> Chat
    </a>
    <a href="#final-cta" class="gold-gradient text-gray-900 font-extrabold py-3 px-6 rounded-full shadow-2xl flex items-center gap-2 text-sm animate-pulse">
      📖 Book Free Trial → Limited Slots!
    </a>
  </div>

</body>
</html>
