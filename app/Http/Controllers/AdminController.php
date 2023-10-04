<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Comentario;
use App\Models\Categoria;
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
    //Mostrar categorias
    public function showcates()
    {
        //
        $categorias = Categoria :: all();

        return view ('administradores/showcates',['categorias'=>$categorias]);
    }
    //Eliminar comentarios
    public function destroycoment(string $id)
    {
        //
        DB::table('comentarios')->where('idcomentario', $id)->delete();
        return redirect()->route('admins.index');
    }

      /**
     *retorna a la vista para crear una categoria
     */
    public function catecreate()
    {
        //
        return view ('administradores/categoriascreate');
    }

    /**
     * alamacena la clase en la base de datos
     */
    public function catestore(Request $request)
    {
        //
        Categoria::create([
            'nombre'=>$request['nombre'],
            'tipo'=>$request['tipo']
        ]);
        return redirect()->route('admins.index');
    }






=======

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
>>>>>>> origin/esteban
}
