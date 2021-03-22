<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Posts;

class ApiController extends Controller
{
    /*
        This function return that all client rows
    */
    public function index(Request $request){
        $posts = Posts::all();

        return response($posts, 200);
    }
    /*
    Return client with posts_id
    */
    public function get_posts(Request $request){
        $posts = Posts::find($request->posts_id);

        if ($posts == null){
            return response(['message' => 'There is no posts'], 404);
        }
        return response($posts, 200);
    }
}
