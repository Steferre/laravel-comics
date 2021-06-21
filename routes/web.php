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

Route::get('/comics/{index}', function ($index) {
    $comicsData = config('comics');

    /*effettuo controlli sull index*/

    if(!is_numeric($index) || $index < 0) {
        abort(404);
    }
    /*setto il singolo fumetto usando l'indice/chiave numerico dell'array non avendo a disposizione l'id univoco*/
    $singleComic = $comicsData[$index];
    
    return view('comics', [
        'singleComic' => $singleComic
    ]);
})->name('comics');

Route::get('/characters', function() {
    return "pagina in lavorazione";
})->name('characters');

Route::get('/movies', function() {
    return "pagina in lavorazione";
})->name('movies');

Route::get('/tv', function() {
    return "pagina in lavorazione";
})->name('tv');

Route::get('/games', function() {
    return "pagina in lavorazione";
})->name('games');

Route::get('/collectibles', function() {
    return "pagina in lavorazione";
})->name('collectibles');

Route::get('/videos', function() {
    return "pagina in lavorazione";
})->name('videos');

Route::get('/fans', function() {
    return "pagina in lavorazione";
})->name('fans');

Route::get('/news', function() {
    return "pagina in lavorazione";
})->name('news');

Route::get('/shop', function() {
    return "pagina in lavorazione";
})->name('shop');
