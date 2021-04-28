<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/home/chiSiamo', [App\Http\Controllers\HomeController::class, 'indexWhoWeAre'])->name('chiSiamo');




// crud article

// create-> get & post
// read -> get & get
// update -> get & put
// delete -> delete

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store')->middleware('auth');

Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index')->middleware('auth');
Route::get('/articles/show/{article}', [ArticleController::class, 'show'])->name('articles.show')->middleware('auth');

Route::get('/articles/edit/{article}', [ArticleController::class, 'edit'])->name('articles.edit')->middleware('auth');
Route::put('/articles/update/{article}', [ArticleController::class, 'update'])->name('articles.update')->middleware('auth');

Route::delete('/articles/delete/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy')->middleware('auth');




