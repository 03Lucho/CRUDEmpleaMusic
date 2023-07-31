<br>
<br>
<h1>Comentario</h1>
<br>
<br>
<div style="text-align: center; position-absolute: 50%">
    <form action="{{route('profesores.comentarstore')}}"method='POST'>
        @csrf
        <br>
        <div>
            <label for="descripcion">Digite su comentario</label>
            <input type="text" size="50" name="descripcion" id="descripcion">
            <br><br>
            {{-- <Label>Frcha y hora en la que hace el comentario</Label>
            <input type="datetime-local" name="fechahora" id=""> --}}
            <br><br>
            <label for="tipo">Tipo de comentario (Queja, Reclamo o Sugerencia)</label>
            <input type="text" name="tipo" id="tipo">
        </div>
        <br>
        <button>Enviar</button>
    </form>
</div>