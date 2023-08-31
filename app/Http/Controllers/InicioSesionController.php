<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use App\Models\Aprendiz;
use App\Models\Administrador;
use DB;

use Illuminate\Http\Request;

class InicioSesionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function redireccion()
    {
        //
        return view('sesion/iniciar');
    }
    /**
     * Display a listing of the resource.
     */
    public function loginSesion(Request $request)
    {
        $profesores = DB::table('profesores')->orderBy('nombre', 'ASC')->get();
        $aprendices = DB::table('aprendizes')->orderBy('nombre', 'ASC')->get();
        $administradores = DB::table('administradores')->orderBy('email', 'ASC')->get();
        
        $credencialesValidas = false;
    
        foreach ($profesores as $profesor) {
            if ($request->input('email') == $profesor->email && $request->input('password') == $profesor->contrasena) {
                $credencialesValidas = true;
                $codigo = $profesor->idprofesor;
                break;
            }
        }
    
        if (!$credencialesValidas) {
            foreach ($aprendices as $aprendiz) {
                if ($request->input('email') == $aprendiz->email && $request->input('password') == $aprendiz->contrasena) {
                    $credencialesValidas = true;
                    $codigo = $aprendiz->idaprendiz;
                    break;
                }
            }
        }
    
        if (!$credencialesValidas) {
            foreach ($administradores as $administrador) {
                if ($request->input('email') == $administrador->email && $request->input('password') == $administrador->contrasena) {
                    $credencialesValidas = true;
                    $codigo = $administrador->idadministrador;
                    break;
                }
            }
        }
        
        if ($credencialesValidas) {
            switch ($request->role) {
                case 'profesor':
                    return redirect()->route('profesores.index',['codigo' => $codigo]);
                    break;
    
                case 'aprendiz':
                    return view('holaapren',['codigo' => $codigo]);
                    break;
    
                case 'administrador':
                    return view('holaadmin',['codigo' => $codigo]);
                    break;
    
                default:
                    // Código a ejecutar si no se selecciona un rol válido
                    break;
            }
        }
        
        // Código a ejecutar si no se cumple ninguna de las condiciones anteriores
        return redirect()->back()->withInput()->withErrors(['message' => 'Credenciales inválidas']);
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
}
