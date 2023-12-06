<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebhookController;
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

Route::get('/contact', function () {
    return view('welcome');
});
Route::get('/',[HomeController::class,'index'])->name('home');



Route::post('/submit-form', [WebhookController::class, 'submitForm']);
Route::post('/submit-form-api', [WebhookController::class, 'postWithApi']);