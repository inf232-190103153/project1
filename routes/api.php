<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); 
Route::get('/posts', [ApiController::class, 'index']);

Route::post('/posts/details', [ApiController::class, 'get_posts']);
