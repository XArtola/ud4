<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<body>

    <h1 @isset($color) style="color:#{{$color}}" @endisset >Kaixo  @isset($nombre) {{$nombre}} @endisset</h1>
</body>

</html>