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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/Cuento', [App\Http\Controllers\Cuento::class, 'index'])->name('Cuento');

Auth::routes();

Route::get('/Novela', [App\Http\Controllers\Novela::class, 'index'])->name('Novela');

Auth::routes();

Route::get('/Poesia', [App\Http\Controllers\Poesia::class, 'index'])->name('Poesia');

Auth::routes();

Route::get('/Aventura', [App\Http\Controllers\Aventura::class, 'index'])->name('Aventura');

Auth::routes();

Route::get('/Fantasia', [App\Http\Controllers\FantasiaController::class, 'index'])->name('Fantasia');

Auth::routes();

Route::get('/Romance', [App\Http\Controllers\Romance::class, 'index'])->name('Romance');

Auth::routes();

Route::get('/Tragedia', [App\Http\Controllers\Tragedia::class, 'index'])->name('Tragedia');

Auth::routes();

Route::get('/Politica', [App\Http\Controllers\Politica::class, 'index'])->name('Politica');

Auth::routes();

Route::get('/Ciencias', [App\Http\Controllers\Ciencias::class, 'index'])->name('Ciencias');

Auth::routes();

Route::get('/agregarlibro', [App\Http\Controllers\agregarlibroController::class, 'index'])->name('agregarlibro');
Route::post('/agregarlibroProceso', [App\Http\Controllers\agregarlibroController::class, 'agregarlibroProceso'])->name('agregarlibroProceso');
