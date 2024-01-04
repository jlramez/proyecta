<?php

namespace Database\Factories;

use App\Models\Competitividadespartido;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompetitividadespartidoFactory extends Factory
{
    protected $model = Competitividadespartido::class;

    public function definition()
    {
        return [
			'municipios_id' => $this->faker->name,
			'descripcionmunicipio' => $this->faker->name,
			'votaciontotal' => $this->faker->name,
			'vve' => $this->faker->name,
			'competitividadpan' => $this->faker->name,
			'competitividadpri' => $this->faker->name,
			'competitividadprd' => $this->faker->name,
			'competitividadpt' => $this->faker->name,
			'competitividadpvem' => $this->faker->name,
			'competitividadmorena' => $this->faker->name,
			'competitividadpanal' => $this->faker->name,
			'totalcoalicion1' => $this->faker->name,
			'totalcoalicion2' => $this->faker->name,
        ];
    }
}
