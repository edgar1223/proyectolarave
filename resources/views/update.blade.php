<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="{{asset('css/upd.css')}}" rel="stylesheet">

</head>
<body>
<div class="container">
        <h1>Formulario de actualización de juegos</h1>
        <p><a href="{{route('games')}}">Listado de videojuegos</a></p>

        <form action="{{route('updateVideogame')}}" method="POST" id="updateForm">
            @csrf
            <input type="hidden" name="game_id" value="{{$game->id}}">
            <input type="text" placeholder="Nombre del juego" name="name_game" value="{{$game->name}}">
            @error('name_game')
            <div>{{$message}}</div>
            @enderror
            <select name="categoria_id" id="">
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}" @if($categoria->id == $game->category_id) selected @endif>{{$categoria->name}}</option>
                @endforeach
            </select>
            <input type="submit" value="Enviar" onclick="return confirmUpdate()">
        </form>
    </div>
    <script type="text/javascript" src="{{ asset('js/confir.js') }}"></script>

</body>
</html>