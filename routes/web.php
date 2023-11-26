<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



Route::get('portfolio/portfolio-details', function () {
    return view('portfolio/portfolio-details', [
        "title" => "My-Profile",
    ]);
});

Route::get('portfolio/bromo-details', function () {
    return view('portfolio/bromo-details', [
        "title" => "Memory-Bromo",
    ]);
});

Route::get('portfolio/selecta-details', function () {
    return view('portfolio/selecta-details', [
        "title" => "Memory-Selecta",
    ]);
});

Route::get('portfolio/persami-details', function () {
    return view('portfolio/persami-details', [
        "title" => "Persami-Details",
    ]);
});

Route::get('portfolio/penghijauan-details', function () {
    return view('portfolio/penghijauan-details', [
        "title" => "Penghijauan-Details",
    ]);
});

Route::get('portfolio/coffee-details', function () {
    return view('portfolio/coffee-details', [
        "title" => "Coffee-Details",
    ]);
});


Route::get('index', function () {
    return view('index', [
        "title" => "Main-Page",
        "icon" => "logo.jpg"
    ]);
});