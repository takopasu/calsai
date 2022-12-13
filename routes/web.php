<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SaveController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(MenuController::class)->group(function(){
    Route::get('/','kcal')->name('kcal');
    Route::get('/price', 'price')->name('price');
    Route::post('/kcal_input','kcal_input')->name('kcal_input');
    Route::post('/price_input','price_input')->name('price_input');
});

Route::controller(SaveController::class)->middleware(['auth'])->group(function(){
    Route::get('/saves','save')->name('saves');
    Route::post('/show','show')->name('show');
    Route::get('/only_favorite','only_favorite')->name('only_favorite');
    Route::get('/is_saved','is_saved')->name('is_saved');
    Route::put('/delete','delete')->name('delete');
    Route::put('/favorite','favorite')->name('favorite');
});

Route::patch('/text/restore/{trashed_text}', 'TextController@restore')->name('text.restore');