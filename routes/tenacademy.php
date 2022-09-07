<?php

use App\Http\Controllers\Tenacademy\ContactController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Tenacademy\CartController;
use App\Http\Controllers\Tenacademy\CourseController;
use App\Http\Controllers\Tenacademy\TenAcademyController;
// use App\Http\Controllers\Tenacademy\FrontController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::prefix('pages/tenacademy')->group(function () {

    Route::get('/', [TenAcademyController::class, 'index']);
    // Route::get('/', function () {
    //     return view('pages.tenacademy.frontPages.front');
    // });
    Route::get('/comming-soon', function () {
        return view('pages.tenacademy.comming-soon');
    })->name('comming-soon');
    Route::get('/edit-profile', function () {
        return view('pages.tenacademy.edit-profile');
    })->name('edit-profile');
    Route::get('/intro-profile', function () {
        return view('pages.tenacademy.intro-profile');
    })->name('intro-profile');
    Route::get('/price', function () {
        return view('pages.tenacademy.price');
    })->name('price');
    Route::get('/student-profile', function () {
        return view('pages.tenacademy.student-profile');
    })->name('student-profile');
    Route::get('/blog-detail', function () {
        return view('pages.tenacademy.blog.blog-detail');
    })->name('blog-detail');
    Route::get('/blog', function () {
        return view('pages.tenacademy.blog.blog');
    })->name('blog');
    Route::get('/books-detail', function () {
        return view('pages.tenacademy.book.books-detail');
    })->name('book-detail');
    Route::get('/books', function () {
        return view('pages.tenacademy.books');
    })->name('book');
    Route::get('/error', function () {
        return view('pages.tenacademy.error');
    })->name('error');
    Route::get('/privacy', function () {
        return view('pages.tenacademy.privacy');
    })->name('privacy');
    // Route::get('/index1', function () {
    //     return view('layouts.index3');
    // });

    Auth::routes();
    Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //route for FrontController
    Route::get('/front', [FrontController::class, 'index'])->name('front.index');

    //route for CourceController
    Route::group(['prefix' => 'course'], function () {
        Route::get('grid', [CourseController::class, 'grid'])->name('course.grid');
        Route::get('list', [CourseController::class, 'list'])->name('course.list');
        Route::get('topic', [CourseController::class, 'topic'])->name('course.topic');
        Route::get('lesson', [CourseController::class, 'lesson'])->name('course.lesson');
        Route::get('details/{id}', [CourseController::class, 'detail'])->name('course.details');
    });
    //route for ContactUsController
    Route::group(['prefix' => 'contact-us'], function () {
        Route::get('/contact', [ContactController::class, 'contact'])->name('contact-us');
    });

    // Cart Routes
    Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('remove/{id}', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
    // Cart Routes end

});