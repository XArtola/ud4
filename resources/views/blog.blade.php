<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<body>
    <h1>Este es el artículo numero {{$id}}</h1>
    @isset($nombre)
    <h1>de nombre {{$nombre}}</h1>
    @endisset

</body>

</html>