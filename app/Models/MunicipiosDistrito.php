<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Municipio;
use App\Models\Distrito;
class Municipiosdistrito extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'municipiosdistritos';

    protected $fillable = ['municipios_id','distritos_id'];

    public function municipios()
	{

		return $this->hasone(Municipio::class,'id','municipios_id');

	}
    public function distritos()
	{

		return $this->hasone(distrito::class,'id','distritos_id');

	}
	
}
