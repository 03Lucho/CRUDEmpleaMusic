<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Instrumento;
use DB;

class AdminController extends Controller
{
    //Mostrar comentarios
    public function indexcoment()
    {
        //
        $comentario= Comentario ::all();
    return view ('administradores/index',['comentario'=>$comentario]);
    }
    //Eliminar comentarios
    public function destroycoment(string $id)
    {
        //
        DB::table('comentarios')->where('idcomentario', $id)->delete();
        return redirect()->route('admins.index');
    }

      /**
     *retorna a la vista para crear un instrumento
     */
    public function instrucreate()
    {
        //
        return view ('administradores/instrumentoscreate');
    }

    /**
     * alamacena la clase en la base de datos
     */
    public function intrustore(Request $request)
    {
        //
        Instrumento::create([
            'nombre'=>$request['nombre'],
            'tipo'=>$request['tipo']
        ]);
        return redirect()->route('admins.index');
    }






}
