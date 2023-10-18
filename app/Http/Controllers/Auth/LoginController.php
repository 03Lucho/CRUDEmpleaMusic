<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profesor;
use App\Models\Aprendiz;


class LoginController extends Controller
{
    use AuthenticatesUsers;


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        // Validar los datos del formulario de inicio de sesión
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:aprendiz,profesor,admin', // Asegúrate de que los roles sean válidos
        ]);
    
        // Intentar iniciar sesión
        $credentials = $request->only('email', 'password');
    
        // Personaliza la lógica de autenticación aquí si es necesario, por ejemplo, puedes usar Auth::attempt()
    
        if (Auth::attempt($credentials)) {
            if (Auth::user()->hasRole('aprendiz')) {
                $id = Auth::user()->id;
                $aprendiz = Aprendiz::select('idaprendiz')
                ->where('user_id', '=', $id)
                ->first();
                $codigoA=$aprendiz->idaprendiz;
                
                return redirect()->route('aprendices.profileA', ['codigoA' => $codigoA]);
               
            } elseif (Auth::user()->hasRole('profesor')) {
                $id = Auth::user()->id;
                $profesor = Profesor::select('idprofesor')
                    ->where('user_id', '=', $id)
                    ->first();
                $codigo = $profesor->idprofesor;
                return redirect()->route('profesores.index', ['codigo' => $codigo]);
            } elseif (Auth::user()->hasRole('admin')) {
                return redirect()->route('admins.index');
            }
        }
    
        // Si la autenticación falla, redirige de nuevo al formulario de inicio de sesión con un mensaje de error
        return back()->withErrors(['email' => 'Credenciales incorrectas'])->withInput();
    }
    
}


