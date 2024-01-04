<?php

namespace Database\Factories;

use App\Models\Seccione;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SeccioneFactory extends Factory
{
    protected $model = Seccione::class;

    public function definition()
    {
        return [
			'distritos_id' => $this->faker->name,
			'entidades_id' => $this->faker->name,
			'seccion' => $this->faker->name,
			'tiposecciones_id' => $this->faker->name,
			'distritosfederales_id' => $this->faker->name,
			'municipios_id' => $this->faker->name,
        ];
    }
}
