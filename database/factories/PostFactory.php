<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=> function(){
                return create(\App\User::class)->id;
            },
            'text' => $faker->text(),
            'img_url'=>$faker->randomElement([
                'POST IMAGE 1',
                'POST IMAGE 2',
                'POST IMAGE 3',
            ]), // FINIR CAR PAS TROUVE DOSSIER AVEC LES IMAGES
            'technic_id' => function() {
                return create(\App\Technic::class)->id;
            },
            'created_at'=> now(),
        ];
    }
}
