
<br>
<br>
<div style="text-align: center; position:absolute:50%">
<br>
<br>
<h2>Agendas</h2>
<div style=" text-align: center">
    <table style="margin:2%;text-align: center; border:2px solid black">
        <tr>
            <td style="border:2px solid black; padding:5px">Nombre Aprendiz</td>
            <td style="border:2px solid black; padding:5px">Nombre Clase</td>
            <td style="border:2px solid black; padding:5px">Fecha Agendada</td>
            <td style="border:2px solid black; padding:5px">Agenda Realizada El:</td>
            <td style="border:2px solid black; padding:5px">Descripcion</td>
        </tr>
        @forelse ($agenda as $agend)
            <tr>
            <td style="border-right:2px solid black; padding:10px"><a href="{{route('profesores.perfaprendagend',$agend->idaprendiz)}}">{{$agend->nomapren}}</a></td>
            <td style="border-right:2px solid black; padding:10px">{{$agend->nomclas}}</td>
            <td style="border-right:2px solid black; padding:10px">{{$agend->fechaagendada}}</td>
            <td style="border-right:2px solid black; padding:10px">{{$agend->fechahora}}</td>
            <td style="border-right:2px solid black; padding:10px">{{$agend->descripcion}}</td>
            
            </tr>
         @empty
        @endforelse
    </table>
</div>

