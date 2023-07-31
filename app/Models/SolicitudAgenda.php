<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudAgenda extends Model
{
    use HasFactory;
    protected $fillable = ['idsolicitudagenda','idaprendiz','idclase','fechaagendada','fechahora','descripcion'];
    protected $primaryKey = 'idsolicitudagenda' ;
}
