<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;
    protected $fillable = ['idclase','idprofesor','idcategoria','nombre','descripcion','fecha','costo','horainicio','horafin','cupos','estado'];
    protected $primaryKey = 'idclase' ;
}
