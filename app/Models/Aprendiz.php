<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;

    protected $table = 'aprendizes'; 
    protected $primaryKey = 'idaprendiz'; 
    protected $fillable = ['idaprendiz','nombre', 'apellido', 'user_id', 'telefono', 'descripcion','documento', 'Imagen'];
}