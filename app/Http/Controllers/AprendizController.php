<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aprendiz;

use App\Models\Clase;

use App\Models\Agenda;

use App\Models\Profesor;

use App\Models\Comentario;

use DB;

class AprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->user()->id; // Obtén el user_id del usuario autenticado
        session(['user_id' => $user_id]); // Establece 'user_id' en la sesión
    
        if ($user_id) {
            // Si tienes 'user_id' en la sesión, obtén los datos del aprendiz
            $aprendiz = Aprendiz::where('user_id', $user_id)->first();
    
            if ($aprendiz) {
                // Si se encontró el aprendiz, puedes mostrar su información en la vista
                return view('aprendices.index', ['aprendiz' => $aprendiz]);
            }
        }
    
        // Si no se encontró 'user_id' o el aprendiz, redirige a la página de creación o muestra un mensaje de error.
        return redirect()->route('aprendices.create')->with('error', 'Aprendiz no creado.');
    }
    
    
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $idusuario = auth()->user()->id;
        return view('aprendiz/create',compact('idusuario'));;
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $data = $request->validate([
             'nombre' => 'required|max:50',
             'apellido' => 'required|max:50',
             'documento' => 'required|max:50',
             'telefono' => 'required|max:25',
             'descripcion' => 'required|max:700',
             'Imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:328048',
             'user_id' => 'required|max:100',
         ]);
     
         // Procesar la imagen y almacenarla en el servidor
         if ($request->hasFile('Imagen')) {
             $photoName = $request->file('Imagen')->store('public/fotos_aprendiz');
             $data['Imagen'] = basename($photoName);
         }
     
         // Crear el perfil del aprendiz y obtener su ID
         $aprendiz = Aprendiz::create($data);
         $codigoA = $aprendiz->idaprendiz;
     
         return redirect()->route('aprendices.profileA', ['codigoA' => $codigoA])->with('success', 'Aprendiz creado exitosamente.');
     }
     
     


    /**
     * Display the specified resource.
     */
     //Mostrar Perfil
     public function profileA($codigoA)
     {
         // Realiza la consulta y obtén una colección de resultados
         $aprendiz = DB::table('aprendizes')
             ->select('idaprendiz', 'nombre', 'apellido', 'Imagen', 'telefono', 'descripcion', 'documento', 'user_id')
             ->where('idaprendiz', '=', $codigoA)
             ->get();
     
         return view('aprendiz/perfil', ['aprendiz' => $aprendiz]);
     }
     

    public function show(Aprendiz $aprendiz) 
    {   
        session(['idAprendiz' => $aprendiz->idaprendiz]);
        $clase = Clase::join('profesores','profesores.idprofesor','=','clases.idprofesor')
        ->join('categorias','categorias.idcategoria','=','clases.idcategoria')
        ->select('clases.idclase', 'clases.nombre', 'clases.idcategoria', 'categorias.nombre as nomins', 'clases.descripcion', 'clases.fecha', 'clases.horainicio', 'clases.horafin', 'clases.costo','clases.cupos','profesores.nombre as nameprofe')
        ->where('fecha', '>' ,now())
        ->orderby('clases.nombre', 'ASC')
        ->get();
        return view('aprendiz.show', ['clase' => $clase]);
    
    }
    
    public function edit($idaprendiz)
    {
        $aprendiz = Aprendiz::findOrFail($idaprendiz);
        return view('aprendiz.edit', ['aprendiz' => $aprendiz, 'codigoA' => $idaprendiz]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codigoA)
{
    $aprendiz = Aprendiz::find($codigoA);

    $data = $request->validate([
        'nombre' => 'max:50',
        'apellido' => 'max:50',
        'documento' => 'max:50',
        'email' => 'email',
        'telefono' => 'max:25',
        'descripcion' => 'max:700',
        'Imagen' => 'image|mimes:jpeg,png,jpg,gif|max:328048',
    ]);

    // Actualizar los campos del aprendiz
    $aprendiz->update($data);

    // Procesar la imagen y almacenarla en el servidor
    if ($request->hasFile('Imagen')) {
        $photoName = $request->file('Imagen')->store('public/fotos_aprendiz');
        $aprendiz->Imagen = basename($photoName);
        $aprendiz->save();
    }

    return redirect()->route('aprendices.profileA', ['codigoA' => $codigoA])->with('success', 'Perfil de aprendiz actualizado exitosamente.');
}

    
    
    
    public function destroy(Aprendiz $aprendiz)
    {
///
    }

    
    public function AgendarClase($idclase)
    {
        $idaprendiz = session('idAprendiz');
        $clase = Clase::find($idclase);
    
        if (!$clase) {
            return redirect()->route('aprendices.index')->with('error', 'La clase seleccionada no existe.');
        }
        $profesor = Profesor::find($clase->idprofesor);

    return view('aprendiz.agendar', compact('idclase', 'clase', 'profesor', 'idaprendiz'));

    }   
    
    
    public function storeAgenda(Request $request, $idclase)
    {
        $data = $request->validate([
            'fechahora' => 'required',
            'descripcion' => 'required|max:500',
            'fechaagendada' => 'required',
            'documento' => 'required|max:100',
        ]);
        
        $data['fechaagendada'] = now();
    
        $clase = Clase::findOrFail($idclase);
    
        $agenda = new Agenda([
            'fechahora' => $data['fechahora'],
            'descripcion' => $data['descripcion'],
            'fechaagendada' => $data['fechaagendada'],
            'documento' => $data['documento'],
        ]);
    
        $clase->agendas()->save($agenda);
    
        return redirect()->route('aprendices.index')->with('success', 'Agenda enviada exitosamente, espere por la confirmación por favor.');
    }
     
    public function comenaprendiz()
    {
        
        return view('aprendiz/crearcomentario');
    }

    public function aprendizcomenstore(Request $request)
    {
        // Accede al valor de idAprendiz directamente desde la sesión
        Comentario::create([
            'descripcion' => $request->input('descripcion'),
            'fechahora' => now(),
            'tipo' => $request->input('tipo')
        ]);
    
        return redirect()->route('aprendices.index')->with('success', 'Comentario realizado con exito, gracias!!');;
    }
    

}