
<br>
<br>
<div style="text-align: center; position:absolute:50%">
<a href={{route ('profesores.create')}}><button >Crear clase</button></a> <br><br>
<a href={{route ('profesores.solicitudes')}}><button >Solicitudes</button></a> <br><br>
<a href={{route ('profesores.perfill')}}><button >Perfil</button></a> <br>
<br>
<br>
<h2>Mis clases creadas</h2>
<div style=" text-align: center">
    <table style="margin:2%;text-align: center; border:2px solid black">
        <tr>
            <td style="border:2px solid black; padding:5px">Nombre</td>
            <td style="border:2px solid black; padding:5px">Instrumento</td>
            <td style="border:2px solid black; padding:5px">Descripcion</td>
            <td style="border:2px solid black; padding:5px">Disponibilidad</td>
            <td style="border:2px solid black; padding:5px">Costo</td>
            <td style="text-align: center; border:2px solid black;padding:5px " colspan="3">Acciones</td>
        </tr>
        @forelse ($clase as $class)
            <tr>
            <td style="border-right:2px solid black; padding:10px">{{$class->nombre}}</td>
            <td style="border-right:2px solid black; padding:10px">{{$class->nomins}}</td>
            <td style="border-right:2px solid black; padding:10px">{{$class->descripcion}}</td>
            <td style="border-right:2px solid black; padding:10px">{{$class->disponibilidad}}</td>
            <td style="border-right:2px solid black; padding:10px">{{$class->costo}}</td>

            <td>
            <a href="{{route('profesores.editarclases',$class->idclase)}}" ><button>Editar</button></a>
            </td>
            <td>
                <a href="{{route('profesores.destroyclass',$class->idclase)}}"onclick="return confirm('¿Estas seguro de eliminar la clase?')"><button>Eliminar</button></a>
            </td>
            <td>
                <a href="{{route('profesores.showagen',$class->idclase)}}"><button>Ver agendas</button></a>
            </td>
            </tr>
         @empty
        @endforelse
    </table>
</div>
 <div style="text-align: center; margin-top:2%">
    <a href={{route ('profesores.createcomentario')}}><button >Realizar comentario</button></a>
</div>
