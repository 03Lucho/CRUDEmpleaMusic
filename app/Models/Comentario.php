<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = ['idcomentario','descripcion','fechahora','tipo'];
=======
    protected $fillable = ['idcomentario','idprofesor','idaprendiz','descripcion','fechahora','tipo'];
>>>>>>> origin/esteban
    protected $primaryKey = 'idcomentario' ;
}
