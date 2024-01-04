<?php

namespace Database\Factories;

use App\Models\Novotosdistrito;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NovotosdistritoFactory extends Factory
{
    protected $model = Novotosdistrito::class;

    public function definition()
    {
        return [
			'distritos_id' => $this->faker->name,
			'distritos_desc' => $this->faker->name,
			'partidos_id' => $this->faker->name,
			'partidos_desc' => $this->faker->name,
			'novotos' => $this->faker->name,
        ];
    }
}
