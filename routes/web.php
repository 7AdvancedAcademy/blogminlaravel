<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/blog/{slug}', [PublicController::class, 'article'])->name('article');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');;



Route::get('/admin/create', function () {
    return view('admin.create');
})->name('admin.create');


Route::get('/admin', [AdminController::class, 'welcome'])->name('admin.welcone');
Route::post('/admin/create', [AdminController::class, 'create'])->name('admin.create.post');


