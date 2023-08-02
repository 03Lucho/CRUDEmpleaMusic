<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aprendiz;

class AprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aprendices =Aprendiz::orderBy('nombre','DESC')->get();
        return view('aprendiz/index',['aprendices'=>$aprendices]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aprendiz.create');
    }

    /**
     * Store a newly created resource in storage.
     */

public function store(Request $request)
{
    $data = $request->validate([
        'nombre' => 'required|max:50',
        'apellido' => 'required|max:50',
        'email' => 'required|email|unique:aprendices',
        'contrasena' => 'required|min:6|max:15',
        'telefono' => 'required|max:25',
        'descripcion' => 'required|max:700',
        'Imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Agregar validación para la foto de perfil
    ]);

    // Procesar la imagen y almacenarla en el servidor
    if ($request->hasFile('Imagen')) {
        $photoName = $request->file('Imagen')->store('public/fotos_vecinos');
        $data['Imagen'] = basename($photoName);
    }

    Aprendiz::create($data);

    return redirect()->route('aprendiz.index')->with('success', 'Aprendiz creado exitosamente.');
}


    /**
     * Display the specified resource.
     */
    public function show(Aprendiz $aprendiz)
    {
        return view('aprendiz.show', compact('aprendiz'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aprendiz $aprendiz)
    {
        return view('aprendiz.edit', compact('aprendiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aprendiz $aprendiz)
    {
        $data = $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'email' => 'required|email|unique:aprendices,email,' . $aprendiz->idaprendiz,
            'contrasena' => 'nullable|min:6|max:15',
            'telefono' => 'required|max:25',
            'descripcion' => 'required|max:700',
        ]);

        if ($request->has('contrasena')) {
            $data['contrasena'] = bcrypt($request->contrasena);
        }

        $aprendiz->update($data);

        return redirect()->route('aprendiz.index')->with('success', 'Aprendiz actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aprendiz $aprendiz)
    {
        $aprendiz->delete();

        return redirect()->route('aprendiz.index')->with('success', 'Aprendiz eliminado exitosamente.');
    }
}
