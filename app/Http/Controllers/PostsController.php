<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Technic;
use App\Models\User;


class PostsController extends Controller {

    

        public function getPosts(Request $request) {
        // Get all posts associated with the request
        $posts = Post::with('user', 'technic')->get();
        return $posts;
    }

    public function store(Request $request){
        $user = auth()->user();

        // Validation des données
        $validated = $request->validate( [
            'user_id' => 'required|exists:users,id',
            'technic_id' => 'nullable|exists:technics,id',
            'text' => 'required|string|max:255',
            'img_url' => 'string',
        ]);

        // Création du post
        $post = Post::create([
            'user_id'=>$user->id,
            'name'=>$user->name,
            'text'=> $validated[
                'text'],
        ]);

        // Retourne une réponse JSON
        return response()->json([
            'message' => 'Post créé avec succès',
            'data' =>[
                'name' => $user->name,
                'text' => $post->text,
                'img_url' => $post->img_url,
            ] 
        ], 201);
    }
        
}