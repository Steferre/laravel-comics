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
    $comicsData = config('comics');

    $comicsDataArray = [
        "comicsList" => $comicsData
    ];

    return view('myHomepage', $comicsDataArray);
});

Route::get('/comicPage1', function () {
    $comicsData = config('comics');

    $comicsDataArray = [
        "comicsList" => $comicsData
    ]; 
    
    return view('comicPage1', $comicsDataArray);
})->name('comicPage1');


