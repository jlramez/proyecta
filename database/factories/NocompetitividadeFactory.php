<?php

namespace Database\Factories;

use App\Models\Nocompetitividade;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NocompetitividadeFactory extends Factory
{
    protected $model = Nocompetitividade::class;

    public function definition()
    {
        return [
			'municipios_id' => $this->faker->name,
			'mun_descripcion' => $this->faker->name,
			'partidos_id' => $this->faker->name,
			'partido_descripcion' => $this->faker->name,
			'competitividad' => $this->faker->name,
        ];
    }
}
