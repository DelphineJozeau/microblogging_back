<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users =[

        // Création d'un utilisateur fixe : Flaya
        [
            'name' => 'Flaya',
            'email' => 'flaya@example.com',
            'password' => Hash::make('Flaya'),
            'biography' => 'Artiste visuelle passionnée par les couleurs.',
        ],
        
        [
            'name' => 'Moose',
            'email' => 'moose@example.com',
            'password'=> Hash::make('Moose'),
            'biography' => 'Je dessine mes cauchemars et des gens.',
        ],
        
        [
            'name' => 'RBF',
            'email' => 'rbf@example.com',
            'password'=> Hash::make('RBF'),
            'biography' => 'Je peins des trucs.',
        ],

    ];

        // Insérer les utilisateurs dans la base de données
        User::insert($users);
        
        // Lancer les autres seeders (technic + post)
        $this->call([
            TechnicSeeder::class,
            PostSeeder::class,
        ]);
    }
}
