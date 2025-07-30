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

    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'technic_id' => 'required|exists:technics,id',
            'text' => 'required|string|max:255',
            'img_url' => 'string',
        ]);

        // Création du post
        $post = Post::create($validated);
        
        // Retourne une réponse JSON
        return response()
        ->json([
            'message' => 'Post créé avec succès',
            'data' => $post
        ], 201)
        ->header('Access-Control-Allow-Origin', 'http://localhost:5174')
        ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    }
        
}