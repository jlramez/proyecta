<?php

namespace Database\Factories;

use App\Models\Novotospartido;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NovotospartidoFactory extends Factory
{
    protected $model = Novotospartido::class;

    public function definition()
    {
        return [
			'municipios_id' => $this->faker->name,
			'mun_descripcion' => $this->faker->name,
			'partidos_id' => $this->faker->name,
			'partido_descripcion' => $this->faker->name,
			'novotos' => $this->faker->name,
        ];
    }
}
