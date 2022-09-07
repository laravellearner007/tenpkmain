<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('pages/tentech')->group(function () {
    Route::get('/', function () {

        return view('pages.tentech.welcome');
    });
    Route::get('/clear', function () {
        Artisan::call('optimize:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        dd('clear');
    });


    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //route for ContactUsController
    Route::post('contact-us', [ContactUsController::class, 'contact'])->name('contact.store');
});