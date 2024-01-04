<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiposeccione extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'tiposecciones';

    protected $fillable = ['descripcion'];
	
}
