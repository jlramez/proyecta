<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compmunicipioscoalicione extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'compmunicipioscoaliciones';

    protected $fillable = ['muncipios_id', 'mun_descripcion', 'partidos_id', 'partido_descripcion', 'novottos'];
}
