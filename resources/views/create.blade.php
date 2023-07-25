<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de creación de juegos</title>
    <link href="{{asset('css/cre.css')}}" rel="stylesheet">

</head>
<body>
<div class="container">
        <h1>Formulario de creación de juegos</h1>
        <p><a href="{{route('games')}}">Listado de videojuegos</a></p>

        <form action="{{route('createVideogame')}}" method="POST" onsubmit="return validateForm()">
            @csrf
            <input type="text" placeholder="Nombre del juego" name="name" id="name">
            @error('name')
            <div>{{$message}}</div>
            @enderror
            <select name="category_id" id="category">
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                @endforeach
            </select>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <script type="text/javascript" src="{{ asset('js/veri.js') }}"></script>

</body>
</html>
