<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CleanController;
use App\Http\Controllers\AuthController;
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

Route::get('/info_kontak', function () {
    return view('Info_kontak');
});

Route::get('/beranda', function () {
   return view('beranda');
});

Route::get('/', function () {
    return view('beranda');
 });

Route::get('/petunjuk', function () {
    return view('petunjuk');
});

//Route::get('/order', function () {
//    return view('order');
//});

Route::get('/fast_cleaning', function () {
    return view('fast_cleaning');
});

Route::get('/deep_cleaning', function () {
    return view('deep_cleaning');
});

Route::get('/hard_cleaning', function () {
    return view('hard_cleaning');
});

Route::get('/reglue', function () {
    return view('reglue');
});

Route::get('/repaint', function () {
    return view('repaint');
});

Route::get('/recolour', function () {
    return view('recolour');
});

Route::get('/bag_cleaning', function () {
    return view('bag_cleaning');
});
// Route::resource('cleans', CleanController::class);
// Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
// Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
// Route::post('login', [AuthController::class, 'login']);
// Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
// Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('order', [CleanController::class, 'index'])->name('order');
    //Route::get('beranda', [AuthController::class, 'index'])->name('beranda');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
