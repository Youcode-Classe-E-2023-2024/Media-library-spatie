<?php

use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/media' ,[MediaController::class, 'index'])->name('show.form.media');
Route::post('/media' ,[MediaController::class, 'store'])->name('create.media');

Route::get('/table' ,[MediaController::class, 'show'])->name('show.table.media');

Route::delete('/delete/{id}' , [MediaController::class, 'destroy'])->name('delete.media');

Route::get('/cards' ,[MediaController::class, 'showCards'])->name('show.table.media.card');
