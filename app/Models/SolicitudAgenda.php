<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudAgenda extends Model
{
    use HasFactory;
    protected $table = 'solicitudagendas'; 
    protected $fillable = ['idsolicitudagenda','idclase','nombreaprendiz','fechaagendada','fechahora','documento','descripcion'];
    protected $primaryKey = 'idsolicitudagenda' ;
    
    public function aprendiz()
    {
        return $this->belongsTo(Aprendiz::class, 'idaprendiz');
    }

    public function clase()
    {
        return $this->belongsTo(Clase::class, 'idclase', 'idclase');
    }
}
