<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<body>
    <h1>Formulario de usuario</h1>
    <form method="POST" action="{{route('validar')}}">
        @csrf
        <label>Nombre</label>
        <input name="campoNombre" type="text"><br>
        <label>Apellido</label>
        <input name="apellido" type="text"><br>
        <label>Email</label>
        <input name="email" type="email"><br>
        <label>Teléfono</label>
        <input name="telefono" type="tel"><br>
        <input type="submit">
    </form>

</body>

</html>