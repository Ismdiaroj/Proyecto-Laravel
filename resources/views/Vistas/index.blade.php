@extends('layouts.plantilla')

@section('title','MiGimnasio')

@section('css')

    <link rel="stylesheet" href="{{ asset('../resources/css/index_styles.css') }}">

@endsection

@section('main')
    
    <section class="section-main">
    
        <div class="section-main_titulo">
            <div>
                <h1>MOTIVATE A CAMBIAR TU ESTILO DE VIDA</h1>
                <h4>Empieza a entrenar con unas instalaciones y equipos a tu medida</h4>
            </div>
            <div class="negro">
                <img src="{{asset('../resources/img/logonegro.png')}}" alt="">
            </div>


            
        </div>
        
        <a href="{{route('alta.alta')}}">EMPIEZA AHORA</a>     

    </section>

    

        <div class="grid">

            <div class="galeria-grid c1">
                
            </div>
            <div class="galeria-grid c2">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet delectus doloremque neque adipisci, optio quas modi saepe laborum quia illo, magnam eaque explicabo! Vitae voluptates minima debitis maiores, reprehenderit quos.
            </div>
            <div class="galeria-grid c3">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet delectus doloremque neque adipisci, optio quas modi saepe laborum quia illo, magnam eaque explicabo! Vitae voluptates minima debitis maiores, reprehenderit quos.
            </div>
            <div class="galeria-grid c4">
            </div>
            <div class="galeria-grid c5">
            </div>
            <div class="galeria-grid c6">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet delectus doloremque neque adipisci, optio quas modi saepe laborum quia illo, magnam eaque explicabo! Vitae voluptates minima debitis maiores, reprehenderit quos.
            </div>

        </div>

    

@endsection