<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Technic;
use App\Models\User;


class PostsController extends Controller {
        public function getPosts(Request $request) {
        // Get all posts associated with the request
        $posts = Post::all();
        return $posts;
        
    }
}