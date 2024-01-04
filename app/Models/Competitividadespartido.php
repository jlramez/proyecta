<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competitividadespartido extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'competitividadespartidos';

    protected $fillable = ['municipios_id','descripcionmunicipio','votaciontotal','vve','competitividadpan','competitividadpri','competitividadprd','competitividadpt','competitividadpvem','competitividadmorena','competitividadpanal','totalcoalicion1','totalcoalicion2'];
	
}
