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
        return view('aprendiz/create');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $data = $request->validate([
             'nombre' => 'required|max:50',
             'apellido' => 'required|max:50',
             'email' => 'required|email|unique:aprendizes',
             'contrasena' => 'required|min:6|max:15',
             'telefono' => 'required|max:25',
             'descripcion' => 'required|max:700',
             'Imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:328048',
         ]);
     
         // Procesar la imagen y almacenarla en el servidor
         if ($request->hasFile('Imagen')) {
            $photoName = $request->file('Imagen')->store('public/fotos_aprendiz');
            $data['Imagen'] = basename($photoName);
        }
     
         Aprendiz::create($data);
     
         return redirect()->route('aprendices.index')->with('success', 'Aprendiz creado exitosamente.');
     }
     


    /**
     * Display the specified resource.
     */
    public function show(Aprendiz $aprendiz)
    {
        return view('aprendices.show', compact('aprendiz'));
    }
    
    public function edit(Aprendiz $aprendiz)
    {
        return view('aprendiz.edit', compact('aprendiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idaprendiz)
    {
        $aprendiz = Aprendiz::findOrFail($idaprendiz);
    
        $aprendiz->nombre = $request->input('nombre');
        $aprendiz->apellido = $request->input('apellido');
        $aprendiz->email = $request->input('email');
        $aprendiz->telefono = $request->input('telefono');
        $aprendiz->descripcion = $request->input('descripcion');
    
        if ($request->has('contrasena') && !empty($request->contrasena)) {
            $aprendiz->contrasena = bcrypt($request->contrasena);
        }
    
        if ($request->hasFile('Imagen')) {
            $file = $request->file('Imagen');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/fotos_aprendiz', $fileName);
            $aprendiz->Imagen = $fileName;
        }
    
        $aprendiz->save();
    
        return redirect()->route('aprendices.index')->with('success', 'Aprendiz actualizado exitosamente.');
    }
    
    
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aprendiz $aprendiz)
    {
///
    }
}
