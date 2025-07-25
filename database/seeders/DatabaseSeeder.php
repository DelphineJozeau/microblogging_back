<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Création d'un utilisateur fixe : Flaya
        User::create([
            'name' => 'Flaya',
            'email' => 'flaya@example.com',
            'password' => Hash::make('Flaya'),
            'biography' => 'Artiste visuelle passionnée par les couleurs.',
        ]);
        
        User::create([
            'name' => 'Moose',
            'email' => 'moose@example.com',
            'password'=> Hash::make('Moose'),
            'biography' => 'Je dessine mes cauchemars et des gens.',
        ]);
        
        // Création d'un autre utilisateur avec la factory
        User::factory()->create([
            'name' => 'RBF',
            'email' => 'rbf@example.com',
            'password'=> Hash::make('RBF'),
            'biography' => 'Je peint des trucs.',
        ]);


        // Lancer les autres seeders (technic + post)
        $this->call([
            TechnicSeeder::class,
            PostSeeder::class,
        ]);
    }
}
