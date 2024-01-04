<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partido;
use App\Models\distrito;

class Novotosdistrito extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'novotosdistritos';

    protected $fillable = ['distritos_id','distritos_desc','partidos_id','partidos_desc','novotos'];

    public function partidos()
    {
  
      return $this->HasOne(Partido::class,'id','partidos_id');//relacion con entidades
  
    }
    public function distritos()
    {
  
      return $this->HasOne(Distrito::class,'id','distritos_id');//relacion con entidades
  
    }
	
}
