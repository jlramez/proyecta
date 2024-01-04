<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entidade;

class Municipio extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'municipios';

    protected $fillable = ['descripcion','entidades_id'];
     public function entidades()
    {
  
      return $this->HasOne(Entidade::class,'id','entidades_id');//relacion con entidades
  
    }

}
