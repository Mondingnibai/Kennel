<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\OurBreedController;

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

Route::get('/', function () { return view('public.home'); });
Route::get('about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::get('male-breed', [OurBreedController::class, 'maleIndex'])->name('male-breed');
Route::get('female-breed', [OurBreedController::class, 'femaleIndex'])->name('female-breed');
