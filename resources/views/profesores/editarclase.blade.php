<br>
<br>
<br>
<br>
<div style="text-align: center; position-absolute: 50%">
    <form action="{{route('profesores.updateclass',$clase->idclase)}}"method='put'>
        @csrf
        <div>
            <label for="">Seleccione el instrumento que va a esneñar</label>
            <select name="idinstrumento" id="">
                @forelse ($instrumento as $instrum)
                @if ($clase->idinstrumento==$instrum->idinstrumento)
                <option value="{{$instrum->idinstrumento}}" selected>{{$instrum->nombre}}</option>
                @else 
                <option value="{{$instrum->idinstrumento}}">{{$instrum->nombre}}</option>
                @endif
                @empty
                @endforelse
            </select>
        </div>
        <br>
        <div>
            <label for="nombre">Nombre</label>
<<<<<<< HEAD
            <input type="text" name="nombre" id="mombre" value="{{$clase->nombre}}"><br><br>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" value="{{$clase->descripcion}}"><br><br>
            <label for="costo">Costo</label>
            <input type="text" name="costo" id="costo" value="{{$clase->costo}}"><br><br>
            <label for="">Disponibilidad</label >
            <input type="time" name="horainicio" id="horainicio" value="{{$clase->horainicio}}">
            <input type="time" name="horafin" id="horafin" value="{{$clase->horafin}}"><br><br>
            <label for="fecha">Fecha</label >
            <input type="date" name="fecha" id="fecha" value="{{$clase->fecha}}">
=======
            <input type="text" name="nombre" id="mombre" value="{{$clase->nombre}}">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" value="{{$clase->descripcion}}">
            <label for="costo">Costo</label>
            <input type="text" name="costo" id="costo" value="{{$clase->costo}}">
            <label for="disponibilidad">Disponibilidad</label >
            <input type="text" name="disponibilidad" id="disponibilidad" value="{{$clase->disponibilidad}}">
>>>>>>> bbe2b4ea4e9bba218dc38fbb9c842dba85b5648b
        </div>
        <br>
        <button>Actualizar</button>
    </form>
</div>