<?php

namespace Database\Factories;

use App\Models\Tiposeccione;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TiposeccioneFactory extends Factory
{
    protected $model = Tiposeccione::class;

    public function definition()
    {
        return [
			'descripcion' => $this->faker->name,
        ];
    }
}
