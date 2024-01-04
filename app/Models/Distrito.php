<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Municipio;
use App\Models\Seccione;

class Distrito extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'distritos';

    protected $fillable = ['descripcion'];
    public function municipios()
	{

		return $this->belongsToMany(Municipio::class,'municipiosdistritos','distritos_id','municipios_id');

	}	
}
