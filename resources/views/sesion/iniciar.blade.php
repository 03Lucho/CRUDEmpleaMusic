<form method="POST" action="{{ route('login') }}">
    @csrf
    <label for="email">Correo Electrónico</label>
    <input type="email" name="email" required>

    <label for="password">Contraseña</label>
    <input type="password" name="password" required>

    <label for="role">Rol</label>
    <select name="role">
        <option value="profesor">Profesor</option>
        <option value="aprendiz">Aprendiz</option>
        <option value="administrador">Administrador</option>
    </select>

    <button type="submit">Iniciar Sesión</button>
</form>
