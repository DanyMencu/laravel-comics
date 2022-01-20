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

//HOME | COMICS
Route::get('/', function () {

    //Comics data
    $comics = config('comics-data');

    return view('home', [
        'comics' => $comics
    ]);
})->name('home');

//COMIC DETAILS
Route::get('/comic-details/{id}', function($id) {

    //Comics data
    $comics = config('comics-data');
    dump($comics, $id);

    if( is_numeric($id) && $id >= 0 && $id < count($comics) ) {
        $comic = $comics[$id];
    } else {
        abort(404);
    }

})->name('comic-details');

//NEWS
Route::get('/news', function() {

    return view('news');
})->name('news');