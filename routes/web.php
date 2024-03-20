<?php

use App\Http\Controllers\ContactController;
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

Route::get('/contato', [ContactController::class, 'index']);

Route::post('/contato/store', [ContactController::class, 'store'])->name('contato.store');

Route::put('/contato/update', [ContactController::class, 'update'])->name('contato.update');

Route::delete('/contato/delete{id}', [ContactController::class, 'destroy'])->name('contato.destroy');
