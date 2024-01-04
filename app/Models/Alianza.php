<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partido;

class Alianza extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'alianzas';

    protected $fillable = ['descripcion'];
    public function partidos()
	{

		return $this->belongsToMany(Partido::class,'alianzaspartidos','alianzas_id','partidos_id');

	}	
}
	

