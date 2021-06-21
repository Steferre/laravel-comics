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

Route::get('/comicPage/{index}', function ($index) {
    $comicsData = config('comics');

    /*effettuo controlli sull index*/

    if(!is_numeric($index) || $index < 0) {
        abort(404);
    }
    /*setto il singolo fumetto usando l'indice/chiave numerico dell'array non avendo a disposizione l'id univoco*/
    $singleComic = $comicsData[$index];
    
    return view('comicPage', [
        'singleComic' => $singleComic
    ]);
})->name('comicPage');


