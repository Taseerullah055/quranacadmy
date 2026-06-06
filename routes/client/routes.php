<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\{HomeController,LandingPageController,FreeTrailController,ContactUs,ThankYouController,ReviewController};

Route::get('/',[HomeController::class,'index'])->name('client.home');
Route::get('/female/teachers',[LandingPageController::class,'index']);
Route::get('/teachers',[LandingPageController::class,'landingPageTwo']);
Route::get('/kids/quran/class',[LandingPageController::class,'landingPageThree']);

Route::post('/free_trail',[FreeTrailController::class,'store'])->name('free_trail.store');
Route::post('/contactus',[FreeTrailController::class,'store'])->name('contact.store');
Route::get('/thank/you',[ThankYouController::class,'thankYou'])->name('thankYour');

Route::get('/add/review',[ReviewController::class,'addReview'])->name('client.add.review');
Route::post('/store/review',[ReviewController::class,'storeReview'])->name('cleint.review.store');
?>