<?php

use App\Http\Controllers\PhonebookController;
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

Route::get('/p', [PhonebookController::class, 'index']);

Route::get('/p/{id}', [PhonebookController::class, 'show']);

Route::post('/p', [PhonebookController::class, 'store']);

Route::put('/p/{id}', [PhonebookController::class, 'update']);

Route::delete('/p/{id}', [PhonebookController::class, 'destroy']);