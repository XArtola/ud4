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
        <input name="campoNombre" type="text" value="{{old('campoNombre')}}">@if ($errors->has('campoNombre'))
        <span>{{ $errors->first('campoNombre')}}</span>
        @endif<br>
        <label>Apellido</label>
        <input name="apellido" type="text" value="{{old('apellido')}}">@if ($errors->has('apellido'))
        <span>{{ $errors->first('apellido')}}</span>
        @endif<br>
        <label>Email</label>
        <input name="email" type="email" value="{{old('email')}}">@if ($errors->has('email'))
        <span>{{ $errors->first('email')}}</span>
        @endif<br>
        <label>Teléfono</label>
        <input name="telefono" type="tel" value="{{old('telefono')}}">@if ($errors->has('telefono'))
        <span>{{ $errors->first('telefono')}}</span>
        @endif<br>
        <label>Dni</label>
        <input name="dni" type="text" value="{{old('dni')}}">@if ($errors->has('dni'))
        <span>{{ $errors->first('dni')}}</span>
        @endif<br>
        <input type="submit">
    </form>
    <!--
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
-->
</body>

</html>