<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======
    protected $table = 'categorias';
>>>>>>> origin/esteban
    protected $fillable = ['idcategoria','nombre','tipo'];
    protected $primaryKey = 'idcategoria' ;
}
