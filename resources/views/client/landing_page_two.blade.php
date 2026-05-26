@extends('client.layouts.landing_page_two_layout')

@section('content')

 <!-- ================================================ -->
  <!-- HERO SECTION -->
  <!-- ================================================ -->
  @include('client.landing_page_two_includes.hero')

  <!-- ================================================ -->
  <!-- TRUST BAR -->
  <!-- ================================================ -->
  @include('client.landing_page_two_includes.trust_bar')
  

  <!-- ================================================ -->
  <!-- WHY CHOOSE US -->
  <!-- ================================================ -->

  @include('client.landing_page_two_includes.choose_us')
  

  <!-- ================================================ -->
  <!-- HOW IT WORKS -->
  <!-- ================================================ -->
  
  @include('client.landing_page_two_includes.how_it_work')
  

  <!-- ================================================ -->
  <!-- PRICING SECTION -->
  <!-- ================================================ -->

  @include('client.landing_page_two_includes.plans')
  
  
  <!-- ================================================ -->
  <!-- TESTIMONIALS -->
  <!-- ================================================ -->
  
  @include('client.landing_page_two_includes.testimonials')


  <!-- ================================================ -->
  <!-- FINAL CTA SECTION -->
  <!-- ================================================ -->

  @include('client.landing_page_two_includes.people_choose')
  
    
@endsection