<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'profesores';
=======
>>>>>>> bbe2b4ea4e9bba218dc38fbb9c842dba85b5648b
    protected $fillable = ['idprofesor','nombre','apellido','email','imagen','contrasena','telefono','descripcion','aniosexperiencia','especialidad'];
    protected $primaryKey = 'idprofesor';
}
