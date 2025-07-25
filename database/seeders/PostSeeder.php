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

        // Récupère tous les technics
        $technics = Technic::all();

        // Crée des posts pour Flaya
        Post::create([
            'user_id' => $flaya->id,
            'text' => 'POST 1 de Flaya',
            'img_url' => '/assets/images/furnitures/soriana_sofa.PNG',
            'technic_id' => $technics->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Crée un post pour Moose
        Post::create([
            'user_id' => $moose->id,
            'text' => 'POST 2 de Moose',
            'img_url' => '/assets/images/furnitures/soriana_sofa.PNG',
            'technic_id' => $technics->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
