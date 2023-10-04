<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clase;
use App\Models\Profesor;
use DB;
use App\Models\Categoria;
use App\Models\Agenda;
use App\Models\Comentario;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;

=======
>>>>>>> origin/esteban

class ProfesorController extends Controller
{
    /**
     * Mostrar las clases creadas por el profesor
     */
<<<<<<< HEAD
    public function index($codigo)
    {
        $clase = DB::table('clases')
            ->join('profesores', 'profesores.idprofesor', '=', 'clases.idprofesor')
            ->join('categorias', 'categorias.idcategoria', '=', 'clases.idcategoria')
            ->select('clases.idprofesor', 'clases.idclase', 'clases.nombre as nombre', 'clases.idcategoria', 'categorias.nombre as nomins', 'clases.descripcion as descripcion', 'clases.fecha as fecha', 'clases.horainicio as horainicio', 'clases.horafin as horafin','clases.cupos', 'clases.costo as costo')
            ->where('clases.idprofesor', '=', $codigo)
            ->where('clases.fecha', '>',now())
            ->orderby('clases.nombre', 'ASC')
            ->get();
    
        return view('profesores/index', ['clase' => $clase, 'codigo' => $codigo]);
    }
    

    //mostrar el perfil del profesor
    public function perfill($codigoprofe)
    {
        // Realiza la consulta y obtén una colección de resultados
        $profesor = DB::table('profesores')
            ->select('idprofesor', 'nombre', 'apellido', 'Imagen', 'telefono', 'descripcion', 'documento', 'aniosexperiencia', 'especialidad')
            ->where('idprofesor', '=', $codigoprofe)
            ->get();
    
        return view('profesores/perfil', ['profesor' => $profesor]);
    }
    

    //Crear el perfil del profesor
    public function perfilcreate($idusuario)
    {
        return view('profesores/createperfil',['idusuario' => $idusuario]);
=======
    public function index()
    {

        //
        $clase = DB::table('clases')
                    ->join('profesores','profesores.idprofesor','=','clases.idprofesor')
                    ->join('categorias','categorias.idcategoria','=','clases.idcategoria')
                    ->select('clases.idclase','clases.nombre as nombre','clases.idcategoria','categorias.nombre as nomins','clases.descripcion as descripcion','clases.fecha as fecha','clases.horainicio as horainicio','clases.horafin as horafin','clases.costo as costo')
                    ->where('clases.idprofesor','=','85')
                    ->orderby('clases.nombre','ASC')
                    ->get();

    return view ('profesores/index',['clase'=>$clase]);
    }

    //mostrar el perfil del profesor
    public function perfill()
    {

        //
        $profesor = DB::table('profesores')
                                ->select('idprofesor','nombre','apellido','Imagen','email','telefono','descripcion','aniosexperiencia','especialidad')
                                ->where('idprofesor','=','85')
                                ->get();
        return view ('profesores/perfil',['profesor'=>$profesor]);
    }

    //Crear el perfil del profesor
    public function perfilcreate()
    {
        return view('profesores/createperfil');
>>>>>>> origin/esteban
    }

    /**
     *Guardar el perfil del profesor
     */
    public function perfilstore(Request $request)
    {
        $profesor = new Profesor(); // Crear una instancia de Profesor
    
<<<<<<< HEAD
        $profesor->user_id = $request->user_id;
        $profesor->nombre = $request->input('nombre');
        $profesor->apellido = $request->input('apellido');
        $profesor->telefono = $request->input('telefono');
        $profesor->descripcion = $request->input('descripcion');
        $profesor->documento = $request->input('documento');
=======
        $profesor->nombre = $request->input('nombre');
        $profesor->apellido = $request->input('apellido');
        $profesor->email = $request->input('email');
        $profesor->contrasena = $request->input('contrasena');
        $profesor->telefono = $request->input('telefono');
        $profesor->descripcion = $request->input('descripcion');
>>>>>>> origin/esteban
        $profesor->aniosexperiencia = $request->input('aniosexperiencia');
        $profesor->especialidad = $request->input('especialidad');
    
        // Procesar la imagen y almacenarla en el servidor
        if ($request->hasFile('Imagen')) {
            $fileName = $request->file('Imagen')->store('public/perfil_profesores');
            $profesor->Imagen = basename($fileName); // Asignar el nombre de la imagen
        }
    
        $profesor->save(); // Guardar el objeto en la base de datos
<<<<<<< HEAD

        $codigo = $profesor -> idprofesor;


    
        return redirect()->route('profesores.index',['codigo'=>$codigo]);
=======
    
        return redirect()->route('profesores.index');
>>>>>>> origin/esteban
    }
    
    

    //editar el perfil del profesor mediante la vista
    public function perfiledit(string $id)
    {
        //
        $profesor=Profesor::findOrFail($id);             
        return view('profesores/editperfil',['profesor'=>$profesor]);
    }

    
    /**
     * actualiza los datos del edit perfil del profesor
     */
    public function perfilupdate(Request $request, string $id)
    {
<<<<<<< HEAD
        $codigoprofe = $id;
=======
>>>>>>> origin/esteban
        $profesor = Profesor::findOrFail($id);
    
        $profesor->nombre = $request->input('nombre');
        $profesor->apellido = $request->input('apellido');
<<<<<<< HEAD
        $profesor->telefono = $request->input('telefono');
        $profesor->descripcion = $request->input('descripcion');
        $profesor->documento = $request->input('documento');
=======
        $profesor->email = $request->input('email');
        $profesor->telefono = $request->input('telefono');
        $profesor->descripcion = $request->input('descripcion');
>>>>>>> origin/esteban
        $profesor->aniosexperiencia = $request->input('aniosexperiencia');
        $profesor->especialidad = $request->input('especialidad');
    
        if ($request->hasFile('Imagen')) {
            $file = $request->file('Imagen');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/perfil_profesores', $fileName);
    
<<<<<<< HEAD
            // Eliminar la imagen anterior solo si existe y no es la predeterminada
            if ($profesor->Imagen && $profesor->Imagen !== 'imagen_predeterminada.jpg') {
                Storage::delete('public/perfil_profesores/' . $profesor->Imagen);
            }
=======
>>>>>>> origin/esteban
    
            $profesor->Imagen = $fileName;
        }
    
        $profesor->save();
    
<<<<<<< HEAD
        return redirect()->route('profesores.perfill', ['codigoprofe' => $codigoprofe]);
    }
    
    
=======
        return redirect()->route('profesores.perfill')->with('success', 'Perfil actualizado exitosamente');
    }
    
>>>>>>> origin/esteban

    

    /**
     *retorna a la vista para crear una clase
     */
<<<<<<< HEAD
    public function create($idprofesor)
    {
        $codigo = $idprofesor;
        $categoria = Categoria::orderBy('nombre', 'ASC')->get();
        return view('profesores.clasecreate', ['categoria' => $categoria, 'codigo' => $codigo]);
    }
    

=======
    public function create()
    {
        //
        $categoria =Categoria::orderby('nombre','ASC')->get();
        return view ('profesores/clasecreate',['categorias'=>$categoria]);
    }
>>>>>>> origin/esteban

    /**
     * alamacena la clase en la base de datos
     */
    public function store(Request $request)
    {
        //
        Clase::create([
<<<<<<< HEAD
            'idprofesor'=>$request['idprofesor'],
            'idcategoria'=>$request['instrument'],
            'nombre'=>$request['nombre'],
            'descripcion'=>$request['descripcion'],
            'cupos'=>$request['cupos'],
            'costo'=>$request['costo'],
            'fecha'=>$request['fecha'],
            'horainicio'=>$request['horainicio'],
            'horafin'=>$request['horafin'],
        ]);
        $codigo = $request['idprofesor'];
        return redirect()->route('profesores.index',['codigo' => $codigo]);
=======
            'idprofesor'=>'85',
            'idcategoria'=>$request['instrument'],
            'nombre'=>$request['nombre'],
            'descripcion'=>$request['descripcion'],
            'costo'=>$request['costo'],
            'horainicio'=>$request['horainicio'],
            'horafin'=>$request['horafin'],
            'fecha'=>$request['fecha']
        ]);
        return redirect()->route('profesores.index');
>>>>>>> origin/esteban
    }

    

       /**
     * editar la clase
     */
<<<<<<< HEAD
    public function editclass(string $id, $codigo)
=======
    public function editclass(string $id)
>>>>>>> origin/esteban
    {
        //
        $clase = Clase::findOrFail($id);
        $categoria =Categoria::orderby('nombre','ASC')->get();
<<<<<<< HEAD
        return view('profesores/editarclase')->with('clase',$clase)->with('categoria',$categoria)->with('codigo',$codigo);
    }
    //actualizar los datos de la edicion de una clase

    public function updateclass(Request $request, string $id, $codigo)
=======
        return view('profesores/editarclase')->with('clase',$clase)->with('categorias',$categoria);
    }
    //actualizar los datos de la edicion de una clase

    public function updateclass(Request $request, string $id)
>>>>>>> origin/esteban
    {
        //
        $clase = Clase::findOrFail($id);
        $clase->update($request->all());
<<<<<<< HEAD
        return redirect()->route('profesores.index',['codigo' => $codigo]);
       
    }

  
=======
        return redirect()->route('profesores.index');
       
    }

    //aceptar o rechazar solicitudes
    public function solicitud()
    {

        //
        $solicitudagenda = DB::table('solicitudagendas')
                    ->join('aprendizes','aprendizes.idaprendiz','=','solicitudagendas.idaprendiz')
                    ->join('clases','clases.idclase','=','solicitudagendas.idclase')
                    ->select('solicitudagendas.idsolicitudagenda','aprendizes.idaprendiz','aprendizes.nombre as nomapren','clases.idclase','clases.idprofesor','clases.nombre as nomclas','solicitudagendas.fechaagendada','solicitudagendas.fechahora','solicitudagendas.descripcion')
                    ->where('clases.idprofesor','=','85')
                    ->orderby('nomclas','ASC')
                    ->get();

    return view ('profesores/solicitudes',['solicitudagenda'=>$solicitudagenda]);
    }
    //eliminar la solicitud
    public function destroysoli(string $id)
    {
        //
        DB::table('solicitudagendas')->where('idsolicitudagenda', $id)->delete();
        return redirect()->route('profesores.solicitudes');
    }
>>>>>>> origin/esteban

    //mostrar agendas
    public function showagends(string $id)
    {
        //
        $agenda = DB::table('agendas')
                    ->join('aprendizes','aprendizes.idaprendiz','=','agendas.idaprendiz')
                    ->join('clases','clases.idclase','=','agendas.idclase')
                    ->select('agendas.idagenda','aprendizes.idaprendiz','aprendizes.nombre as nomapren','clases.idclase','clases.idprofesor','clases.nombre as nomclas','agendas.fechaagendada','agendas.fechahora','agendas.descripcion')
                    ->where('agendas.idclase','=',$id)
                    ->orderby('nomclas','ASC')
                    ->get();

    return view ('profesores/veragendas',['agenda'=>$agenda]);
       
    }

    //mostrar perfiles de aprendices
    public function showperfapren(string $id)
    {
        //
        $aprendizes = DB::table('aprendizes')
<<<<<<< HEAD
        ->select('idaprendiz','nombre','apellido','Imagen','telefono','documento','descripcion')
=======
        ->select('idaprendiz','nombre','apellido','imagen','email','telefono','descripcion')
>>>>>>> origin/esteban
        ->where('idaprendiz',$id)
        ->get();

        return view ('profesores/perfilesagendados',['aprendizes'=>$aprendizes]);
    }

<<<<<<< HEAD
    //almacenar agenda confirmada agendar clase
=======
    //almacenar agenda confirmada
>>>>>>> origin/esteban
    public function agendconfirmstore(string $id1, string $id2, string $id3, string $id4, string $id5, string $id6)
    {   
    Agenda::create([
        'idaprendiz' => $id1,
        'idclase' => $id2,
        'fechaagendada' => $id3,
        'fechahora' => $id4,
        'descripcion' => $id5
    ]);
<<<<<<< HEAD

    $clase = Clase::find($id2);
    if ($clase) {
        $clase->cupos = $clase->cupos - 1;
        $clase->save();
    }
    $codigo = Clase:: select('idprofesor')
                    ->where('idclase','=',$id2)
                    ->first();

    return redirect()->route('profesores.index',['codigo'=>$codigo]);
=======
   
    DB::table('solicitudagendas')->where('idsolicitudagenda', $id6)->delete();

    return redirect()->route('profesores.solicitudes');
>>>>>>> origin/esteban
    }

    //comentarios
    //crear comentario
    public function comentcreate()
    {
        //
        return view ('profesores/comentario');
    }
    //almacenar comentario creado
    public function comentstore(Request $request)
    {
<<<<<<< HEAD
        $validatedData = $request->validate([
            'descripcion' => 'required',
            'tipo' => 'required|in:Queja,Reclamo,Sugerencia',
        ]);

        Comentario::create([
            'descripcion' => $validatedData['descripcion'],
            'fechahora' => now(),
            'tipo' => $validatedData['tipo'],
        ]);

    return redirect()->route('plantillainicio');
=======
        //
        Comentario::create([
            'idprofesor'=>'85',
            'descripcion'=>$request['descripcion'],
            'fechahora'=>now(),
            'tipo'=>$request['tipo']
        ]);
        return redirect()->route('profesores.index');
>>>>>>> origin/esteban
    }



    


<<<<<<< HEAD
}
=======
}
>>>>>>> origin/esteban
