<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<body>
<h1>Saludo</h1>
    <form method="GET" action="{{route('saludar2')}}">
        @csrf
        <label>Nombre</label>
        <input name="campoNombre" type="text">
        <label>Apellido</label>
        <input name="apellido" type="text">
        <input type="submit">
    </form>

    <h1>Saludo multi idiomas</h1>
    <form method="POST" action="{{route('saludar3')}}">
        @csrf
        <label>Nombre</label>
        <input name="campoNombre" type="text">
        <label>Apellido</label>
        <input name="apellido" type="text">
        <input type="submit">
    </form>

</body>

</html>