<?php

namespace Database\Factories;

use App\Models\Municipiosdistrito;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MunicipiosdistritoFactory extends Factory
{
    protected $model = Municipiosdistrito::class;

    public function definition()
    {
        return [
			'municipios_id' => $this->faker->name,
			'distritos_id' => $this->faker->name,
        ];
    }
}
