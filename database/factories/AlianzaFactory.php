<?php

namespace Database\Factories;

use App\Models\Alianza;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AlianzaFactory extends Factory
{
    protected $model = Alianza::class;

    public function definition()
    {
        return [
			'descripcion' => $this->faker->name,
        ];
    }
}
