<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/style.css">
        
    </head>
    <body>
        <h1>Pratica</h1>

        @if ($nome == 'Goku')
            <p>nome e Goku</p>
        @elseif($nome == 'Naruto')
            <p>o nome e {{ $nome }} e sua idade e {{ $idade }}.</p>
        @else
            <p>Um shinobi sem nome</p>
        @endif

        @for($i = 0; $i < count($arr); $i++))
            <p> {{ $arr[$i] }} </p>   
        @endfor

    </body>
</html>
