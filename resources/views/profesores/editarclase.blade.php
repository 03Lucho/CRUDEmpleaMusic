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
            <input type="text" name="nombre" id="mombre" value="{{$clase->nombre}}">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" value="{{$clase->descripcion}}">
            <label for="costo">Costo</label>
            <input type="text" name="costo" id="costo" value="{{$clase->costo}}">
            <label for="disponibilidad">Disponibilidad</label >
            <input type="text" name="disponibilidad" id="disponibilidad" value="{{$clase->disponibilidad}}">
        </div>
        <br>
        <button>Actualizar</button>
    </form>
</div>