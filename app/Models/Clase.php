<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = ['idclase','idagenda','idprofesor','idinstrumento','nombre','descripcion','fecha','costo','horainicio','horafin','estado'];
=======
    protected $fillable = ['idclase','idagenda','idprofesor','idinstrumento','nombre','descripcion','costo','disponibilidad'];
>>>>>>> bbe2b4ea4e9bba218dc38fbb9c842dba85b5648b
    protected $primaryKey = 'idclase' ;
}
