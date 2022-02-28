@extends('layouts.plantilla')

@section('title','MiGimnasio')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


@section('main')
    
    <section class="section-main ">

        <div class="container">

        
       

       

        <table class="table table-dark table-striped">
        
            <tr>
                <td>Alimento</td>
                <td>Kcalorias (100 gramos)</td>
                <td>Proteinas</td>
                <td>Hidratos de Carbono</td>
                <td>Azucares</td>
            </tr>
            @foreach ($alimentos as $alimento)
                <tr>
                    <td>{{$alimento->nombre}}</td>
                    <td>{{$alimento->kcal}}</td>
                    <td>{{$alimento->proteinas}} gramos</td>
                    <td>{{$alimento->hidratos}} gramos</td>
                    <td>{{$alimento->azucares}} gramos</td>
                </tr>
            @endforeach
        </table>

       
        
        <br>
        <br>
        
        <div class=" row justify-content-center">

            
            <form action="{{route('calculadora.store')}}" method="POST" class=" bg-light  col-4 row justify-content-center">
                
                @csrf
                
                <h1>Añade tus alimentos</h1>
                {{-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alimento</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Cantidad en gramos</label>
                    <input type="number" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button> --}}
                
                <label>
                    Alimento:
                    <input class="form-control" type="text" name="nombre">
                </label><br>
                
                <label>
                    kcal:
                    <input class="form-control" type="int" name="kcal">
                </label><br>
                
                <label>
                    Proteinas:
                <input class="form-control" type="int" name="pro">
            </label><br>
            
            <label>
                Hidratos:
                <input class="form-control" type="int" name="hid">
            </label><br>
            
            <label>
                Azucares:
                <input class="form-control" type="int" name="azu">
            </label><br>
            
            
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
</div>
        
    </section>

    

@endsection