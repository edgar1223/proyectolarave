<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @if($categoryG)
        <h1>El nombre del juego es: {{$nameV}} y la categoria: {{$categoryG}} </h1>
    @else
    <h1>El nombre del juego es: {{$nameV}} </h1>
    @endif


    
    <h3>{{$fecha}}</h3>
</body>
</html>