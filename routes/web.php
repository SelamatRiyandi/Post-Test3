<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerklien;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/homepage', function () {
    return view('homepage')->middleware('auth');
});

Route::get('/testimonial', function () {
    return view('testimonial'); //bang klo di kasih middleware ada error goib, ke detect nya sama program itu 'return \view('testimonial')'
});

Route::get('/client', function () {
    return view('client')->middleware('auth');
});
Route::get('/addclient', function () {
    return view('addclient')->middleware('auth');
});


Route::get('/pusatlayanan', function () {
    return view('pusatlayanan')->middleware('auth');
});


// menampilkan
Route::get('/client',[controllerklien::class, 'index'])->middleware('auth');
Route::get('/pusatlayanan',[controllerlayanan::class, 'index'])->middleware('auth');

// menyimpan
Route::post('/addclient/store',[controllerklien::class,'store'])->middleware('auth');

//register
// Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create']);
// Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register');

//logout
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout')->middleware('auth');
Route::view('/homepage', 'homepage')->name('homepage')->middleware('auth');

//login
// Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');

//authenticated
// Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenicate'])->name('login');

//midleware
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register')->middleware('guest');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->middleware('guest');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('login')->middleware('guest');