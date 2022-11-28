<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(MenuController::class)->middleware(['auth'])->group(function(){
    Route::get('/','kcal')->name('kcal');
    Route::get('/price', 'price')->name('price');
    Route::get('/save','save')->name('save');
    Route::post('/kcal_input','kcal_input')->name('kcal_input');
    Route::post('/price_input','price_input')->name('price_input');
});

Route::patch('/text/restore/{trashed_text}', 'TextController@restore')->name('text.restore');