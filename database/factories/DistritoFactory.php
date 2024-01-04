<?php

namespace Database\Factories;

use App\Models\Distrito;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DistritoFactory extends Factory
{
    protected $model = Distrito::class;

    public function definition()
    {
        return [
			'descripcion' => $this->faker->name,
        ];
    }
}
