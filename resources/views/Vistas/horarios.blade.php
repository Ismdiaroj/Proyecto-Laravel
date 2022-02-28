@extends('layouts.plantilla')

@section('title','MiGimnasio')

@section('css')

    <link rel="stylesheet" href="{{ asset('../resources/css/horario_styles.css') }}">

@endsection

@section('main')
    
<div class="horarios">
    <div class="gradiente">

        
        <div class="container">
            
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <span class="stars"></span>
                        <h2 class="java">Piernas</h2><br>                            
                        @foreach ($piernas as $item)
                        <p class="java">{{$item->nombre}}</p>
                        @endforeach                                           
                    </div>
                </div>

                <div class="face face2">
                    <h2>Día 1</h2>
                </div>

            </div>
            
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <span class="stars"></span>
                        <h2 class="python">Espalda</h2><br>
                        @foreach ($espalda as $item)
                        <p class="java">{{$item->nombre}}</p>
                        @endforeach                    
                    </div>
                </div>
                <div class="face face2">
                    <h2>Día 2</h2>
                </div>
            </div>
    
    <div class="card">
        <div class="face face1">
            <div class="content">
                <span class="stars"></span>
                <h2 class="cSharp">Pecho</h2><br>
                @foreach ($pecho as $item)
                <p class="java">{{$item->nombre}}</p>
                @endforeach            </div>
        </div>
        <div class="face face2">
            <h2>Día 3</h2>
        </div>
    </div>


    <div class="card">
        <div class="face face1">
            <div class="content">
                <span class="stars"></span>
                <h2 class="cSharp">Brazos</h2><br>
                @foreach ($brazos as $item)
                <p class="java">{{$item->nombre}}</p>
                @endforeach            </div>
        </div>
        <div class="face face2">
            <h2>Día 4</h2>
        </div>
    </div>

    <div class="card">
        <div class="face face1">
            <div class="content">
                <span class="stars"></span>
                <h2 class="cSharp">Hombros</h2><br>
                @foreach ($hombros as $item)
                <p class="java">{{$item->nombre}}</p>
                @endforeach            </div>
        </div>
        <div class="face face2">
            <h2>Día 5</h2>
        </div>
    </div>

</div>
</div>
</div>
@endsection