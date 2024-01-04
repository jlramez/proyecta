<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Distrito;
use App\Models\Tiposeccione;
use App\Models\Municipio;

class Seccione extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'secciones';

    protected $fillable = ['distritos_id','entidades_id','seccion','tiposecciones_id','distritosfederales_id','municipios_id'];
	
    public function distritos()
	{

		return $this->hasone(Distrito::class,'id','distritos_id');

	}	
    public function tiposecciones()
	{

		return $this->hasone(Tiposeccione::class,'id','tiposecciones_id');

	}	
    public function municipios()
	{

		return $this->hasone(Municipio::class,'id','tiposecciones_id');

	}	
}
