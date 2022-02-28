<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" href="{{asset('/logonegro.png')}}">

    <title>@yield('title')</title>
    
    {{-- asset() -> ruta de la carpeta public --}}
    {{-- <link rel="stylesheet" href="http://localhost/DAWS/LARAVEL/Gimnasio/resources/css/plantilla_styles.css"> --}}


    <link rel="stylesheet" href="{{ asset('../resources/css/plantilla_styles.css') }}"> 

    @yield('css')
    

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    

</head>
<body>

    <header>

        <img src="{{asset('../resources/img/logo.png')}}" alt="">

        <nav>
            <a href="{{route('index.index')}}">INICIO</a>
            <a href="{{route('horarios.horarios')}}">ENTRENAMIENTOS</a>
            <a href="{{route('blog.blog')}}">BLOG</a>
            <a href="{{route('calculadora.calculadora')}}">CALCULADORA</a>
            <a href="{{route('alta.alta')}}">ALTA</a>
        </nav>

    </header>


    @yield('main')

    
    
</body>
</html>