<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clase;
use App\Models\Profesor;
use DB;
use App\Models\Instrumento;
use App\Models\Agenda;
use App\Models\Comentario;

class ProfesorController extends Controller
{
    /**
     * Mostrar las clases creadas por el profesor
     */
    public function index()
    {

        //
        $clase = DB::table('clases')
                    ->join('profesores','profesores.idprofesor','=','clases.idprofesor')
                    ->join('instrumentos','instrumentos.idinstrumento','=','clases.idinstrumento')
                    ->select('clases.idclase','clases.nombre as nombre','clases.idinstrumento','instrumentos.nombre as nomins','clases.descripcion as descripcion','clases.fecha as fecha','clases.horainicio as horainicio','clases.horafin as horafin','clases.costo as costo')
                    ->where('clases.idprofesor','=','2')
                    ->where('estado','1')
                    ->orderby('clases.nombre','ASC')
                    ->get();

    return view ('profesores/index',['clase'=>$clase]);
    }

    //mostrar el perfil del profesor
    public function perfill()
    {

        //
        $profesor = DB::table('profesores')
                                ->select('idprofesor','nombre','apellido','imagen','email','telefono','descripcion','aniosexperiencia','especialidad')
                                ->where('idprofesor','=','2')
                                ->get();
        return view ('profesores/perfil',['profesor'=>$profesor]);
    }

    //Crear el perfil del profesor
    public function perfilcreate()
    {
        return view('profesores/createperfil');
    }

    /**
     *Guardar el perfil del profesor
     */
    public function perfilstore(Request $request)
    {
        $profesor = new Profesor(); // Crear una instancia de Profesor
    
        $profesor->nombre = $request->input('nombre');
        $profesor->apellido = $request->input('apellido');
        $profesor->email = $request->input('email');
        $profesor->contrasena = $request->input('contrasena');
        $profesor->telefono = $request->input('telefono');
        $profesor->descripcion = $request->input('descripcion');
        $profesor->aniosexperiencia = $request->input('aniosexperiencia');
        $profesor->especialidad = $request->input('especialidad');
    
        // Procesar la imagen y almacenarla en el servidor
        if ($request->hasFile('imagen')) {
            $fileName = $request->file('imagen')->store('public/perfil_profesores');
            $profesor->imagen = basename($fileName); // Asignar el nombre de la imagen
        }
    
        $profesor->save(); // Guardar el objeto en la base de datos
    
        return redirect()->route('profesores.index');
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
        $profesor = Profesor::findOrFail($id);
    
        $profesor->nombre = $request->input('nombre');
        $profesor->apellido = $request->input('apellido');
        $profesor->email = $request->input('email');
        $profesor->telefono = $request->input('telefono');
        $profesor->descripcion = $request->input('descripcion');
        $profesor->aniosexperiencia = $request->input('aniosexperiencia');
        $profesor->especialidad = $request->input('especialidad');
    
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/perfil_profesores', $fileName);
    
            // Eliminar la imagen anterior solo si existe y no es la predeterminada
            if ($profesor->imagen && $profesor->imagen !== 'imagen_predeterminada.jpg') {
                Storage::delete('public/perfil_profesores/' . $profesor->imagen);
            }
    
            $profesor->imagen = $fileName;
        }
    
        $profesor->save();
    
        return redirect()->route('profesores.perfill')->with('success', 'Perfil actualizado exitosamente');
    }
    

    

    /**
     *retorna a la vista para crear una clase
     */
    public function create()
    {
        //
        $instrumento =Instrumento::orderby('nombre','ASC')->get();
        return view ('profesores/clasecreate',['instrumento'=>$instrumento]);
    }

    /**
     * alamacena la clase en la base de datos
     */
    public function store(Request $request)
    {
        //
        Clase::create([
            'idprofesor'=>'2',
            'idinstrumento'=>$request['instrument'],
            'nombre'=>$request['nombre'],
            'descripcion'=>$request['descripcion'],
            'costo'=>$request['costo'],
            'disponibilidad'=>$request['disponibilidad']
        ]);
        return redirect()->route('profesores.index');
    }

    

       /**
     * editar la clase
     */
    public function editclass(string $id)
    {
        //
        $clase = Clase::findOrFail($id);
        $instrumento =Instrumento::orderby('nombre','ASC')->get();
        return view('profesores/editarclase')->with('clase',$clase)->with('instrumento',$instrumento);
    }
    //actualizar los datos de la edicion de una clase

    public function updateclass(Request $request, string $id)
    {
        //
        $clase = Clase::findOrFail($id);
        $clase->update($request->all());
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
                    ->where('clases.idprofesor','=','2')
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
        ->select('idaprendiz','nombre','apellido','imagen','email','telefono','descripcion')
        ->where('idaprendiz',$id)
        ->get();

        return view ('profesores/perfilesagendados',['aprendizes'=>$aprendizes]);
    }

    //almacenar agenda confirmada
    public function agendconfirmstore(string $id1, string $id2, string $id3, string $id4, string $id5, string $id6)
    {   
    Agenda::create([
        'idaprendiz' => $id1,
        'idclase' => $id2,
        'fechaagendada' => $id3,
        'fechahora' => $id4,
        'descripcion' => $id5
    ]);
   
    DB::table('solicitudagendas')->where('idsolicitudagenda', $id6)->delete();

    return redirect()->route('profesores.solicitudes');
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
        //
        Comentario::create([
            'idprofesor'=>'2',
            'descripcion'=>$request['descripcion'],
            'fechahora'=>now(),
            'tipo'=>$request['tipo']
        ]);
        return redirect()->route('profesores.index');
    }



    


}
