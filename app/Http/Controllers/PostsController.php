<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Technic;
use App\Models\User;


class PostsController extends Controller {

    

        public function getPosts(Request $request){

    $posts = Post::with('user', 'technic')->get();

    // Formater les données pour corriger les chemins d’image
    $posts = $posts->map(function ($post) {
        if ($post->img_url) {
            // 🔥 Supprime "/public" si présent dans le chemin (problème que tu as)
            $url = str_replace('/public', '', $post->img_url);

            // ✅ Transforme en URL absolue correcte
            $post->img_url = asset($url);
        }
        return $post;
    });

    return response()->json($posts);
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
            'text'=> $validated['text'],
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