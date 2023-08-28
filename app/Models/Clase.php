<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;
    protected $table = 'clases'; 
    protected $fillable = ['idclase','idprofesor','idcategoria','nombre','descripcion','fecha','costo','horainicio','horafin','cupos'];
    protected $primaryKey = 'idclase' ;

    public function solicitudagendas()
    {
        return $this->hasMany(SolicitudAgenda::class, 'idclase', 'idclase');
    }
    public function categorias()
    {
    return $this->belongsTo(Categoria::class, 'idcategoria','idcategoria');
    }
}
