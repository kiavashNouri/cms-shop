<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/auth/google',[\App\Http\Controllers\Auth\GoogleAuthController::class,'redirect'])->name('auth.google');
Route::get('/auth/google/callback',[\App\Http\Controllers\Auth\GoogleAuthController::class,'callback']);


Route::get('/admin',function (){
   return view('profile.admin.index');
});


Route::middleware('auth')->group(function () {
   Route::get('/profile',[\App\Http\Controllers\Profile\ProfileController::class,'index'])->name('profile');
   Route::get('/profile/two-factor',[\App\Http\Controllers\Profile\ProfileController::class,'manageTwoFactor'])->name('profile.2fa-manage');
   Route::get('profile/reset-password',[\App\Http\Controllers\Profile\ProfileController::class,'resetPassShow'])->name('profile.reset-password');

   Route::get('profile/notification/management',[\App\Http\Controllers\Profile\ProfileController::class,'notifManageShow'])->name('profile.notification.show');

});
