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
    $data = [
        'name' => 'hassan',
        'surname' => 'hassan',
        'age' => 20,
        'country' => 'egypt',
        'address' => 'cairo',
        'email' => 'hassan@hassan',
        'gender' => 'male',
    ];
    return view('home', $data);
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/product', function () {
    return view('pages.product');
})->name('product');
