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
// TEMP TESTING
// Route::domain('croxxtalent.com')->group(function () {
//     Route::any('/', function (Request $request) {
//         echo "<title>CROXXTALENT</title>";
//         echo "<div style=\"text-align:center\"><b>CROXXTALENT</b> <br> croxxtalent.com <br><br> Wow! Something amazing is coming here. Check back soon.</div>";
//     });
// });

// // TEMP TESTING
// Route::domain('www.croxxtalent.com')->group(function () {
//     Route::any('/', function (Request $request) {
//         echo "<title>CROXXTALENT</title>";
//         echo "<div style=\"text-align:center\"><b>CROXXTALENT</b> <br> www.croxxtalent.com <br><br> Wow! Something amazing is coming here. Check back soon.</div>";
//     });
// });


// Landing Pages Route
Route::get('/', function (Request $request) {
    return view('welcome');
})->name('home');

Route::get('/about', function (Request $request) {
    return view('about');
})->name('about');

Route::get('/contact', function (Request $request) {
    return view('contact');
})->name('contact');

Route::get('/terms', function (Request $request) {
    return view('contact');
})->name('terms');

//

Route::get('/login', function (Request $request) {
    return redirect('/app/login');
})->name('login');

Route::get('/register', function (Request $request) {
    return redirect('/app/register');
})->name('register');

Route::get('/dashboard', function (Request $request) {
    return redirect('/app/dashboard');
})->name('dashboard');
