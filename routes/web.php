<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ListingController;
use App\Http\Controllers\Frontend\User\ListingController as UserListingController;
use App\Http\Controllers\Frontend\User\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'pages','as' => 'pages.'], function () {
    Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about.us');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
});

Route::group(['prefix' => 'blogs','as' => 'blogs.'], function () {
    Route::get("/", [BlogController::class, 'index'])->name('index');
    Route::get("/{slug}", [BlogController::class, 'showBlog'])->name('show');
});


Route::group(['prefix' => 'listings','as' => 'listings.'], function () {
    Route::get("/", [ListingController::class, 'index'])->name('index');
    Route::get("/{slug}", [ListingController::class, 'showListing'])->name('show');
});

Route::group(['prefix' => 'user','as' => 'user.'], function () {
    Route::get("/dashboard", [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('listings', UserListingController::class);
});

