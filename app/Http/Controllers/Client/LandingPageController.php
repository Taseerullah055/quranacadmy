<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

  public function index(){

    return view('client.landing_page_one');
  }

  public function landingPageTwo(){

    return view('client.landing_page_two');
  }

}
