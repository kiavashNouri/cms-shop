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

Route::get('user/factor',[\App\Http\Controllers\Profile\ActivityController::class,'showFactor'])->name('user.factor');


Route::middleware('auth')->group(function () {
   Route::get('/profile',[\App\Http\Controllers\Profile\ProfileController::class,'index'])->name('profile');
   Route::get('/profile/two-factor',[\App\Http\Controllers\Profile\ProfileController::class,'manageTwoFactor'])->name('profile.2fa-manage');
   Route::get('profile/reset-password',[\App\Http\Controllers\Profile\ProfileController::class,'resetPassShow'])->name('profile.reset-password');
   Route::get('profile/notification/management',[\App\Http\Controllers\Profile\ProfileController::class,'notifManageShow'])->name('profile.notification.show');
   Route::get('profile/user/activity',[\App\Http\Controllers\Profile\ProfileLinksController::class,'activityShow'])->name('user.activity');
   Route::get('profile/user/full/activity',[\App\Http\Controllers\Profile\ProfileLinksController::class,'viewFullActivity'])->name('user.full.activity');
   Route::get('profile/user/wishlist',[\App\Http\Controllers\Profile\FavoritesListController::class,'index'])->name('user.favorites.lists');
    Route::get('profile/user/public/list',[\App\Http\Controllers\Profile\FavoritesListController::class,'publicList'])->name('user.public.list');
    Route::get('profile/user/pending/comment',[\App\Http\Controllers\Profile\CommentsController::class,'pending'])->name('pending.to.comment');
    Route::get('profile/user/comments',[\App\Http\Controllers\Profile\CommentsController::class,'index'])->name('user.comments');
    Route::get('profile/user/addresses',[\App\Http\Controllers\Profile\AddressController::class,'index'])->name('user.addresses');
    Route::get('profile/user/notifications',[\App\Http\Controllers\Profile\NotificationController::class,'index'])->name('user.notifications');

});
