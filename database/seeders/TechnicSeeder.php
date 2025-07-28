<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technic;

class TechnicSeeder extends Seeder
{
    public function run(): void
    {
        $technics = [
            [
                'name' => 'oil painting',
            ],
            [
                'name' => 'watercolor',
            ],
            [
                'name' => 'acrylic painting',
            ],
            [
                'name' => 'gouache',
            ],
            [
                'name' => 'digital art',
            ],
            [
                'name' => 'calligraphy',
            ],
            [
                'name' => 'sketching',
            ],
            [
                'name' => 'charcoal drawing',
            ],
            [
                'name' => 'pastel art',
            ],
            [
                'name' => 'ballpoint pen',
            ],
            [
                'name' => 'pencil',
            ],
            [
                'name' => 'mixed media',
            ],
        ];


        Technic::insert($technics);
    }
}