<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Aprendiz;

use App\Models\User;

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
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->rol === 'administrador') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->rol === 'profesor') {
                return redirect()->route('profesor.dashboard');
            } else {
                return redirect()->route('aprendiz.dashboard');
            }
        } else {
            return back()->withErrors(['email' => 'Credenciales incorrectas']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

