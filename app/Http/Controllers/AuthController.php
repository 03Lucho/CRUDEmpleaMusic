<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Usuario;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('menu.menu');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'rol' => 'required',
        ]);
    
        $rol = $request->input('rol');
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            
            // Procesar el rol seleccionado
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
