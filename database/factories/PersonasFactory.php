<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'apellido_paterno'=>$this->faker->sentence(),
            'apellido_materno'=>$this->faker->sentence(),
            'nombre'=>$this->faker->sentence(),
            'fecha_nacimiento' =>$this->faker->date(),
            'sexo' =>$this->faker->sentence()
        ];
    }
}
