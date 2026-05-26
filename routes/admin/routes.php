<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{DashboardController,LoginController,UserController};

Route::prefix('adminstretaure')->name('admin.')->group(function(){

    Route::get('/login',[LoginController::class,'login'])->name('login');
    Route::post('/login',[LoginController::class,'authentication'])->name('authentication');
    
    Route::middleware(['auth'])->group(function(){

        Route::get('/logout',[LoginController::class,'logout'])->name('logout');

        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');        

        Route::controller(UserController::class)->name('users.')->group(function(){

            Route::get('users/index','index')->name('index');
            Route::get('users/create','create')->name('create');
            Route::post('users/store','store')->name('store');
            Route::get('users/edit/{id}','edit')->name('edit');
            Route::put('users/update','update')->name('update');
            Route::get('users/delete/{id}','delete')->name('delete');
        });
    });
});


?>