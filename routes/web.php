<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\PortfolioController;

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/',[AdminController::class , 'index'])->name('AdminHome');
    Route::resource('categories',CategoryController::class);
    Route::resource('portfolios',PortfolioController::class);
    Route::resource('generals',GeneralController::class);
});
Route::get('/',[pagescontroller::class , 'index'])->name('HomePage');
Route::prefix('creative')->group(function(){
    Route::get('/',[pagescontroller::class , 'index'])->name('HomePage');
    Route::get('about',[pagescontroller::class , 'about'])->name('aboutPage');
    Route::get('contact',[pagescontroller::class , 'contact'])->name('contactPage');
    Route::post('contactSubmit',[pagescontroller::class , 'contactSubmit'])->name('contactSubmit');
    Route::get('portfolio',[pagescontroller::class , 'portfolio'])->name('portfolioPage');
    Route::get('service',[pagescontroller::class , 'service'])->name('servicePage');
});


Auth::routes(['register'=>false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
