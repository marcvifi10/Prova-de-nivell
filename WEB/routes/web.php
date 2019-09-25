<?php

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
    return redirect(route('llibres'));
});

Route::get('/llibres', 'HomeController@llibres')->name('llibres');
Route::get('/llibres/{autor}', 'HomeController@llibresCategoria')->name('llibresCategoria');
Route::get('/llibresInferiors15', 'HomeController@llibresInferiors15')->name('llibres15');
Route::get('/llibresIVA', 'HomeController@llibresIVA')->name('llibresIVA');
Route::get('/autors', 'HomeController@autors')->name('autors');
Route::get('/editorials', 'HomeController@editorials')->name('editorials');
Route::get('/editorials/{autor}', 'HomeController@editorialsCategoria')->name('editorials');
// Route::get('/editorials/{autor}', 'HomeController@editorials')->name('editorials');

