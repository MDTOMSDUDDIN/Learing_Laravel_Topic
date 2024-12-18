<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CountryMiddleware;
use App\Http\Middleware\SimpleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
//end profile 



route::get('/public',[HomeController::class,"publicMessage"]);

route::middleware('auth','throttle:3,1')->group( function(){
    route::get('/private',[HomeController::class,"PrivateMessage"])->middleware('auth');
    route::get('/secret',[HomeController::class,"secretMessage"])->middleware('auth');
});

route::get('/download',[HomeController::class,"downloadFile"])->middleware('throttle:2,1');

route::get('/message',[HomeController::class,"messages"])->middleware(SimpleMiddleware::class);



route::get('/bd',[HomeController::class,"contectForBD"])->middleware(CountryMiddleware::class);