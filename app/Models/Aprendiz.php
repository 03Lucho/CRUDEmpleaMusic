<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;

    protected $table = 'aprendizes'; 
    protected $primaryKey = 'idaprendiz'; 
    protected $fillable = ['nombre', 'apellido', 'email', 'contrasena', 'telefono', 'descripcion', 'Imagen'];
}
