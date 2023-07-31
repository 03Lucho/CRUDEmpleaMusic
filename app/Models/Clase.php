<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;
    protected $fillable = ['idclase','idagenda','idprofesor','idinstrumento','nombre','descripcion','costo','disponibilidad'];
    protected $primaryKey = 'idclase' ;
}
