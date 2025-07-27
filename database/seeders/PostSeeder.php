<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Technic;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // Récupère les utilisateurs créés précédemment
        $flaya = User::where('name', 'Flaya')->first();
        $moose = User::where('name', 'Moose')->first();
        $rbf = User::where('name', 'rbf')->first();

        // Récupère tous les technics
        $technics = Technic::all();

        // Crée des posts
        //VOIR COMMENT AJOUTER PLUSIEURS URL (visiblement : nouvelle table, migration ect...)
        $posts = [
            [
                'user_id' => $flaya->id,
                'text' => 'POST 1 de Flaya', // A RENOMMER PAR DELPHINE
                'img_url' => '/assets/images/flaya_art/Flaya_1.jpg', //Noudes
                'technic_id' => 2, // Watercolor?
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $moose->id,
                'text' => 'Bro portrait',
                'img_url' => '/public/assets/images/moose_art/moose_1.jpg', 
                'technic_id' => 10, //ballpoint pen
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $flaya->id,
                'text' => 'POST 2 FLAYA', // A FAIRE RENOMMER PAR DELPHINE
                'img_url' => '/public/assets/images/flaya_art/Flaya_2.jpg', //Colibri
                'technic_id' => 2, //watercolor?
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $rbf->id,
                'text' => 'Lamentation',
                'img_url' => '/public/assets/images/rbf_art/rbf_1.jpg',
                'technic_id' => 3, //Acrylic
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $moose->id,
                'text' => 'FCBD Tarot Sketches',
                'img_url' => '/public/assets/images/moose_art/moose_2.jpg', 
                'technic_id' => 7, //sketch 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $rbf->id,
                'text' => 'JDR BlackSad',
                'img_url' => '/public/assets/images/rbf_art/rbf_2.jpg',
                'technic_id' => 10, //BallPoint Pen
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $rbf->id,
                'text' => 'Terreur',
                'img_url' => '/public/assets/images/rbf_art/rbf_3.jpg', //geante
                'technic_id' => 3, //Acrylic
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $moose->id,
                'text' => 'Safe',
                'img_url' => '/public/assets/images/moose_art/moose_3.png', 
                'technic_id' => 5, //digital
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $flaya->id,
                'text' => 'POST 3 FLAYA', // A FAIRE RENOMMER PAR DELPHINE
                'img_url' => '/public/assets/images/flaya_art/Flaya_3_4.jpg', // Nymphes A FAIRE CHOSIR PAR DELPHINE
                'technic_id' => 12, //Mixed media
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $flaya->id,
                'text' => 'POST 4 FLAYA', // A FAIRE RENOMMER PAR DELPHINE
                'img_url' => '/public/assets/images/flaya_art/Flaya_4.jpg', //reproduction de photos
                'technic_id' => 3, //Acrylic?
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $flaya->id,
                'text' => 'POST 5 FLAYA', // A FAIRE RENOMMER PAR DELPHINE
                'img_url' => '/public/assets/images/flaya_art/Flaya_5_fresque_acrylique.JPG',
                'technic_id' => 3, //Acrylic
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            

        ];

    //insérer les posts dans la database :
        Post::insert($posts);


    }
}
