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
                    ->join('profesors','profesors.idprofesor','=','clases.idprofesor')
                    ->join('instrumentos','instrumentos.idinstrumento','=','clases.idinstrumento')
                    ->select('clases.idclase','clases.nombre as nombre','clases.idinstrumento','instrumentos.nombre as nomins','clases.descripcion as descripcion','clases.disponibilidad as disponibilidad','clases.costo as costo')
                    ->where('clases.idprofesor','=','2')
                    ->orderby('clases.nombre','ASC')
                    ->get();

    return view ('profesores/index',['clase'=>$clase]);
    }

    //mostrar el perfil del profesor
    public function perfill()
    {

        //
        $profesor = DB::table('profesors')
                                ->select('idprofesor','nombre','apellido','imagen','email','telefono','descripcion','aniosexperiencia','especialidad')
                                ->where('idprofesor','=','2')
                                ->get();
        return view ('profesores/perfil',['profesor'=>$profesor]);
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
        //
        $profesor = Profesor::findOrFail($id);
        $profesor->update($request->all());
        if ($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $FileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/perfil_profesores',$FileName);
            $profesor->imagen = $FileName;
        }
        return redirect()->route('profesores.perfill');
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
            'idprofesor'=>'16',
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

    /**
     * eliminar una clase
     */
    public function destroyclass(string $id)
    {
        //
        $clase = Clase::findOrFail($id);
        $clase->delete();
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
            'idprofesor'=>'16',
            'descripcion'=>$request['descripcion'],
            'fechahora'=>now(),
            'tipo'=>$request['tipo']
        ]);
        return redirect()->route('profesores.index');
    }



    


}
