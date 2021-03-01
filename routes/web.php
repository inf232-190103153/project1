<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use app\Models\Post;


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

Route::get('post/add', function () {
    DB::table('post')->insert([
        'title' => 'Kuka',
        'body' => 'djkfsjk' 
    ]);
});

Route::get('post', function(){
    $post = Post::find(2);
    return $post->title;
});