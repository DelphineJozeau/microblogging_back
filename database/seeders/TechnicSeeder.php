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
                'name' => 'sketching',
            ],
            [
                'name' => 'acrylic painting',
            ],
            [
                'name' => 'digital art',
            ],
            [
                'name' => 'calligraphy',
            ],
            [
                'name' => 'charcoal drawing',
            ],
            [
                'name' => 'pastel art',
            ],
            [
                'name' => 'mixed media',
            ],
        ];

        Order::insert($technics);
    }
}