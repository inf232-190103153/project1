<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Posts;
use App\Http\Controllers\PostsController;

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



Route::get('posts/add', function(){
    DB::table('posts')->insert([
        'title' => 'My title',
        'body' => 'My body'
    ]);
});

Route::get('posts',[PostsController::class, 'index']);
Route::get('posts/create', function(){
    return view('posts.create');
});
Route::post('posts/create',[PostsController::class, 'store'])->name('add-posts');


Route::get('/user', 'App\Http\Controllers\UserController@mail_send');

Route::post('/addphoto', 'App\Http\Controllers\UserController@store')->name('addphoto');

Route::get('meil/send', 'App\Http\Controllers\MailController@send');