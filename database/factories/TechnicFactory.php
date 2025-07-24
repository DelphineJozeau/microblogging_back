<?php
/** quoi sert une Factory ? Elle permet de définir la nature de la valeur d’une propriété d’un modèle dans le cadre d’un test ou en environnement de développement.
 * C’est à dire, qu’on va y définir des instructions via l’outil Faker, comme :
 * Le nom d’un utilisateur doit avoir la forme M. Dupond
 * Le contenu de mon article est un Lorem Ipsum de 300 caractères maximum */


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Technic>
 */
class TechnicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            /** Ajouter les colonnes que l'on veux faire et surtout, sert pour les TESTS UNITAIRES
             * Pas besoin de mettre l'entièreté de la table, juste des cas qui passent les tests et d'autres qui ne passent pas si il faut)
             */
            'name' => $this->faker->randomElement([
                'oil painting',
                'watercolor',
                'sketching',
            ])
        ];
    }
}
