<br>
<br>
<br>
<br>
<div style="text-align: center; position-absolute: 50%">
    <form action="{{route('instru.store')}}"method='POST'>
        @csrf
        <br>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="mombre">
            <label for="tipo">Tipo de Instrumento</label>
            <input type="text" name="tipo" id="tipo">
        </div>
        <br>
        <button>Enviar</button>
    </form>
</div>