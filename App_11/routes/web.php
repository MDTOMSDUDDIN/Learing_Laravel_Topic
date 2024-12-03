<?php

use App\Http\Controllers\ConstructorController;
use App\Http\Controllers\DemoActionController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\DemoMiddleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\VedioController;
use App\Http\Middleware\DemoMiddleware;
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

require __DIR__ . '/auth.php';

//module 12 started
route::get('/tomas', [DemoController::class, 'view']);
route::get('/demo1', [DemoController::class, 'demo1']);
route::post('/demo2/{name}/{city}', [DemoController::class, 'demo2']);
route::post('/demo3', [DemoController::class, 'demo3']);
route::get('/demo4', [DemoController::class, 'demo4']);
route::post('/demo5', [DemoController::class, 'demo5']);
route::post('/fileData', [DemoController::class, 'fileData']);
//module 12 started

//module-13 started
route::get('/logs/{num1}/{num2}', [DemoActionController::class, 'logs']);
route::get('/log1/{num1}/{num2}', [DemoActionController::class, 'log1']);
route::get('/log2/{num1}/{num2}', [DemoActionController::class, 'log2']);
route::get('/log3/{num1}/{num2}', [DemoActionController::class, 'log3']);
route::get('/log4/{num1}/{num2}', [DemoActionController::class, 'log4']);

//session put /pull /get/forget/flush 
route::get('/sessionput/{email}', [SessionController::class, 'sessionPut']);
route::get('/sessionget', [SessionController::class, 'sessionGet']);
route::get('/sessionPull', [SessionController::class, 'sessionPull']);
route::get('/sessionforget', [SessionController::class, 'sessionforget']);
route::get('/sessionFlus', [SessionController::class, 'sessionFlus']);

//middleware 
// route::get('/demoHeader1/{key}',[DemoMiddleController::class,'DemoHeader1'])->middleware([DemoMiddleware::class]);
// route::get('/demoHeader2',[DemoMiddleController::class,'DemoHeader2']);

// route::middleware(['DEMO'])->group( function (){
//     route::get('demo1/{key}' ,[DemoMiddleController::class, 'Demo1']);
//     route::get('demo2/{key}' ,[DemoMiddleController::class, 'Demo2']);
//     route::get('demo3/{key}' ,[DemoMiddleController::class, 'Demo3']);
//     route::get('demo4/{key}' ,[DemoMiddleController::class, 'Demo4']);
// });


// // apply full web route
// route::get('demo1/{key}', [DemoMiddleController::class, 'Demo1']);
// route::get('demo2/{key}', [DemoMiddleController::class, 'Demo2']);
// route::get('demo3/{key}', [DemoMiddleController::class, 'Demo3']);
// route::get('demo4/{key}', [DemoMiddleController::class, 'Demo4']);


route::get('hello1', [DemoMiddleController::class,'DemoAction'])->middleware([DemoMiddleware::class]);

route::get('Action', [DemoMiddleController::class,'Action'])->middleware(["throttle:4,1"]);

//single action controller 
route::get('/video',VedioController::class);

route::resource('photo', PhotoController::class);
Route::get('/hello',[ConstructorController::class,'demo1']);