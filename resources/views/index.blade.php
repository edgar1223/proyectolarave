<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('css/tabla.css')}}" rel="stylesheet">

</head>
<body>
    <h1>CRUD Laravel</h1>
    <p><a href="{{route('gamesCreate')}}">Nuevo videojuego</a></p>

    <h2>Listado de juegos</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CATEGORIA ID</th>
                <th>CREADO</th>
                <th>ESTADO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @forelse($games as $game)
                <tr>
                    <td>{{$game->id}}</td>
                    <td><a href="{{route('viewGame',$game->id)}}">{{$game->name}}</a></td>
                    <td>{{$game->category_id}}</td>
                    <td>{{$game->created_at}}</td>
                    <td class="@if($game->active) active @else inactive @endif center-img">
                        @if($game->active)
                        <img src="{{ asset('https://upload.wikimedia.org/wikipedia/commons/d/d6/Crystal_Clear_action_apply.png') }}" alt="Activo" width="20">
                        @else
                        <img src="{{ asset('https://icones.pro/wp-content/uploads/2022/05/icone-fermer-et-x-rouge.png') }}" alt="Inactivo" width="20">
                                                @endif
                    </td>
                    <td>
                    <a href="{{route('deleteGame',$game->id)}}" class="delete-link">
                            Eliminar
                            <img src="{{ asset('https://cdn-icons-png.flaticon.com/256/3221/3221803.png') }}" alt="Eliminar" width="20" class="delete-icon">
                        </a>
                                        </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Sin videojuegos</td>
                </tr>
            @endforelse

        </tbody>
    </table>
</body>
</html>
