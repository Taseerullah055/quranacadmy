@extends('client.layouts.teachers_layout')

@section('content')

 <!-- ================================================ -->
  <!-- HERO SECTION -->
  <!-- ================================================ -->
  @include('client.teachers_includes.hero')

  <!-- ================================================ -->
  <!-- TRUST BAR -->
  <!-- ================================================ -->
  @include('client.teachers_includes.trust_bar')
  

  <!-- ================================================ -->
  <!-- WHY CHOOSE US -->
  <!-- ================================================ -->

  @include('client.teachers_includes.choose_us')
  

  <!-- ================================================ -->
  <!-- HOW IT WORKS -->
  <!-- ================================================ -->
  
  @include('client.teachers_includes.how_it_work')
  

  <!-- ================================================ -->
  <!-- PRICING SECTION -->
  <!-- ================================================ -->

  @include('client.teachers_includes.plans')
  
  
  <!-- ================================================ -->
  <!-- TESTIMONIALS -->
  <!-- ================================================ -->
  
  @include('client.teachers_includes.testimonials')


  <!-- ================================================ -->
  <!-- FINAL CTA SECTION -->
  <!-- ================================================ -->

  @include('client.teachers_includes.people_choose')
  
    
@endsection