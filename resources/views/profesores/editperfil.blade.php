<div style="text-align: center; position-absolute: 50%">
    <form action="{{route('profesores.perfilupdate',$profesor->idprofesor)}}"method='put'>
        @csrf
        <div>
        </div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="" value="{{$profesor->nombre}}">
        <label for="">Apellido</label>
        <input type="text" name="apellido" id="" value="{{$profesor->apellido}}">
        <label for="">Imagen de perfil</label>
        <input type="file" name="imagen" id="">
        <label for="">Email</label>
        <input type="text" name="email" id="" value="{{$profesor->email}}">
        <label for="">Telefono</label>
        <input type="number" name="telefono" id="" value="{{$profesor->telefono}}">
        <label for="">Descripcion</label>
        <input type="text" name="descripcion" id="" value="{{$profesor->descripcion}}">
        <label for="">Años de experiencia</label>
        <input type="number" name="aniosexperiencia" id="" value="{{$profesor->aniosexperiencia}}">
        <label for="">Especialidad</label>
        <input type="text" name="especialidad" id="" value="{{$profesor->especialidad}}">
        <br><br>
        <button>Actualizar</button>
        </div>
        
    </form>
</div>