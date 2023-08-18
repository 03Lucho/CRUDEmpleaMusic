<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    protected $fillable = ['idprofesor','nombre','apellido','email','Imagen','contrasena','telefono','descripcion','aniosexperiencia','especialidad'];
    protected $primaryKey = 'idprofesor';
}
