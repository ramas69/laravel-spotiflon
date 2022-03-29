<?php

namespace Database\Factories;

use App\Models\Chanson;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChansonFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @var string
     */

     protected $model = Chanson::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->name(),
            'annee' => $this->faker->date() ,
            'auteur' =>$this->faker->lastName(),
            'image' =>$this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
