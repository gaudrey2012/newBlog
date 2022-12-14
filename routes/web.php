<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
Route::get('/', [ MainController::class, 'home' ])->name('home');

Route::get('/articles', [ MainController::class, 'index' ])->name('articles');

Route::get('/articles/{article:slug}', [ MainController::class, 'show' ])->name('article');

// route::prefix('admin')->middleware('admin')->group(function()
// {
//     Route::resource('articles', 'ArticleController')->except([
//         'show'
//     ]);
// });



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
