<?php

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

Route::get('/',[App\Http\Controllers\PublicController::class, 'index']);
Route::get('/listproduct',[App\Http\Controllers\PublicController::class, 'listproduct']);
Route::get('/listproduct/item/{id}',[App\Http\Controllers\PublicController::class, 'listproductdetail']);
Route::get('/blog/detail/{id}',[App\Http\Controllers\PublicController::class, 'blogdetail']);
Route::post('sendmail',[App\Http\Controllers\PublicController::class, 'sendemail']);


Route::get('/blog',[App\Http\Controllers\PublicController::class, 'blog']);
Route::get('/contact',[App\Http\Controllers\PublicController::class, 'contact']);
Auth::routes();
Auth::routes(['register' => false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/postinganbarang/tambah', [App\Http\Controllers\HomeController::class, 'tambahbarang']);
Route::get('/postinganbarang/lihatdata/{id}', [App\Http\Controllers\HomeController::class, 'lihatdata']);
Route::get('/postinganbarang/editdata/{id}', [App\Http\Controllers\HomeController::class, 'editdatabarang']);
Route::get('/postinganbarang/deletedata/{id}', [App\Http\Controllers\HomeController::class, 'deletedatabarang']);
Route::post('/postinganbarang/posttambah', [App\Http\Controllers\HomeController::class, 'posttambahbarang']);
Route::post('/postinganbarang/posteditbarang', [App\Http\Controllers\HomeController::class, 'posteditbarang']);
Route::post('/postinganbarang/posthapusbarang', [App\Http\Controllers\HomeController::class, 'posthapusbarang']);


Route::get('/postinganblog/tambah', [App\Http\Controllers\HomeController::class, 'tambahblog']);
Route::post('postinganblog/posttambah', [App\Http\Controllers\HomeController::class, 'posttambahblog']);
Route::get('/postinganblog/lihatdata/{id}', [App\Http\Controllers\HomeController::class, 'lihatdatablog']);
Route::get('/postinganblog/editdata/{id}', [App\Http\Controllers\HomeController::class, 'editdatablog']);
Route::get('/postinganblog/deletedata/{id}', [App\Http\Controllers\HomeController::class, 'deletedatablog']);
