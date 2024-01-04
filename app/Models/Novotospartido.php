<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Municipio;
use App\Models\Partido;

class Novotospartido extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'novotospartidos';

    protected $fillable = ['municipios_id','mun_descripcion','partidos_id','partido_descripcion','novotos'];
    public function municipios()
    {
  
      return $this->HasOne(Municipio::class,'id','municipios_id');//relacion con entidades
  
    }
    public function partidos()
    {
  
      return $this->HasOne(Partido::class,'id','partidos_id');//relacion con entidades
  
    }
}
