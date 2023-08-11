
<br>
<br>
<div style="text-align: center; position:absolute:50%">
<a href={{route ('instru.create')}}><button >Crear Instrumento</button></a> <br><br>
<br>
<br>
<h2>Comentarios</h2>
<div style=" text-align: center">
    <table style="margin:2%;text-align: center; border:2px solid black">
        <tr>
            <td style="border:2px solid black; padding:5px">Descripcion</td>
            <td style="border:2px solid black; padding:5px">Fecha Y Hora</td>
            <td style="border:2px solid black; padding:5px">Tipo</td>
<<<<<<< HEAD
=======
            <td style="text-align: center; border:2px solid black;padding:5px ">Acciones</td>
>>>>>>> bbe2b4ea4e9bba218dc38fbb9c842dba85b5648b
        </tr>
        @forelse ($comentario as $coment)
            <tr>
            <td style="border-right:2px solid black; padding:10px">{{$coment->descripcion}}</td>
            <td style="border-right:2px solid black; padding:10px">{{$coment->fechahora}}</td>
            <td style="border-right:2px solid black; padding:10px">{{$coment->tipo}}</td>
<<<<<<< HEAD
=======

            <td>
                <a href="{{route('admins.destroycoment',$coment->idcomentario)}}" onclick="return confirm('¿Estas seguro de eliminar la clase?')"><button>Eliminar</button></a>
            </td>
>>>>>>> bbe2b4ea4e9bba218dc38fbb9c842dba85b5648b
            </tr>
         @empty
        @endforelse
    </table>
</div>
