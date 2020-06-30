<?php

use Illuminate\Support\Facades\Route;
use App\Post;

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
//     $posts = Post::latest()->paginate(6);
//     return view('home', compact('posts')); 
// })->name('home');

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/posts', 'PostController@index')->name('posts'); //not necessary
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
