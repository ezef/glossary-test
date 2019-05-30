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

Auth::routes();

Route::get('/', function () {
    return redirect(route('dashboard'));
});

Route::get("/glossaries", "GlossaryController@showListGlossaries")->name("glossaries.index");
Route::resource('glossary', 'GlossaryController');

Route::get("/term/{glossary_id}", "TermController@index")->name("term.index");
Route::get("/term/{glossary_id}/create", "TermController@create")->name("term.create");
Route::post("/term/{glossary_id}", "TermController@store")->name("term.store");
Route::get("/term/{term_id}/destroy", "TermController@destroy")->name("term.destroy");

Route::get("/translation/{term_id}", "TranslationController@index")->name("translation.index");
Route::get("/translation/{term_id}/create", "TranslationController@create")->name("translation.create");
Route::post("/translation/{term_id}", "TranslationController@store")->name("translation.store");

Route::get("/translation/{translation_id}/edit", "TranslationController@edit")->name("translation.edit");
Route::post("/translation/{translation_id}/update", "TranslationController@update")->name("translation.update");

Route::get("/translation/{translation_id}/destroy", "TranslationController@destroy")->name("translation.destroy");

// Route::resource('term', 'TermController');

Route::group(['middleware' => 'auth'], function () {
    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
     */
    Route::get('dashboard', 'HomeController@index')->name('dashboard');

});
