<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

  public function index(){

    return view('client.females_teachers');
  }

  public function landingPageTwo(){

    return view('client.teachers');
  }

   public function landingPageThree(){

    return view('client.kids_quran_classes');
  }

}
