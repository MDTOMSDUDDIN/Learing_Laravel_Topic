<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProfileController;
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


route::get('/tomas',[DemoController::class,'view']);


route::get('demo1', [DemoController::class,'demo1']);


route::post('demo2/{name}/{city}', [DemoController::class,'demo2']);
route::post('demo3', [DemoController::class,'demo3']);
route::get('demo4', [DemoController::class,'demo4']);
route::post('demo5', [DemoController::class,'demo5']);

route::post('/fileData', [DemoController::class,'fileData']);