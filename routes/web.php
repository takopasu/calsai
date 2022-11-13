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
    Route::get('/', 'index')->name('index');
    Route::get('/get','get')->name('get');
    Route::delete('/menus/{menu}', 'delete')->name('delete');
});

Route::patch('/text/restore/{trashed_text}', 'TextController@restore')->name('text.restore');