<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\{HomeController,LandingPageController,FreeTrailController,ContactUs};

Route::get('/',[HomeController::class,'index'])->name('client.home');
Route::get('/landing_page',[LandingPageController::class,'index']);
Route::get('/landing_page_two',[LandingPageController::class,'landingPageTwo']);

Route::post('/free_trail',[FreeTrailController::class,'store'])->name('free_trail.store');
Route::post('/contactus',[FreeTrailController::class,'store'])->name('contact.store');

?>