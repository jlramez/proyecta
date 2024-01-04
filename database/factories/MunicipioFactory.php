<?php

namespace Database\Factories;

use App\Models\Municipio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MunicipioFactory extends Factory
{
    protected $model = Municipio::class;

    public function definition()
    {
        return [
			'descripcion' => $this->faker->name,
			'entidades_id' => $this->faker->name,
        ];
    }
}
