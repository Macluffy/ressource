<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    // n nom, une date, un auteur, une profession de l'auteur, age de l'auteur et une description.
    public function definition()
    {
        return [
            "nom"=>$this->faker->firstname,
            "date"=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            "auteur"=>$this->faker->firstname,
            "profession"=>$this->faker->jobTitle,
            "age"=>$this->faker->numberBetween($min=1, $max = 100),
            "description"=>$this->faker->realText($maxNbChars = 300, $indexSize = 2),


        ];
    }
}
