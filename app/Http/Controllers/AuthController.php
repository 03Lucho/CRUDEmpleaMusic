<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Usuario;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'contrasena' => 'required',
            'nombre' => 'required', 
            'rol' => 'required',
        ]);
    
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->contrasena])) {
            $user = Auth::user();
            $rol = $request->input('rol');
            $nombre = $request->input('nombre');
            

            Usuarios::create([
                'nombre' => $request->nombre,
                'rol' => $request->rol,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);


            if ($rol === 'admin') {
                return redirect()->route('admin.index');
            } elseif ($rol === 'profesor') {
                return redirect()->route('profesor.index');
            } elseif ($rol === 'aprendiz') {
                if ($user->tienePerfil()) {
                    return redirect()->route('aprendices.show', $user->id);
                } else {
                    return redirect()->route('aprendices.create');
                }
            }
        } else {
            return back()->withErrors(['email' => 'Credenciales incorrectas']);
        }
    }
}
