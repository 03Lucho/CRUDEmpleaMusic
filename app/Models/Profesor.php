<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    protected $fillable = ['idprofesor','user_id','nombre','apellido','Imagen','telefono','descripcion','aniosexperiencia','especialidad'];
    protected $primaryKey = 'idprofesor';
}
