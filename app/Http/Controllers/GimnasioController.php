<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alimento;
use App\Models\Ejercicio;

class GimnasioController extends Controller
{
    public function index (){
        return view('Vistas.index');
    }

    public function horario(){

        $piernas = Ejercicio::where('grupo_muscular','Piernas')->get();
        $espalda = Ejercicio::where('grupo_muscular','Espalda')->get();
        $pecho = Ejercicio::where('grupo_muscular','Pecho')->get();
        $brazos = Ejercicio::where('grupo_muscular','Brazos')->get();
        $hombros = Ejercicio::where('grupo_muscular','Hombros')->get();

        return view('Vistas.horarios',compact("piernas","espalda","pecho","brazos","hombros"));
    }

    public function blog(){
        return view('Vistas.blog');
    }

    public function alta(){
        return view('Vistas.alta');
    }

    public function calculadora(){
        $alimentos = Alimento::all();
        return view('Vistas.calculadora',compact("alimentos"));
    }

    public function store(Request $request){
        $alimento = new Alimento();

        $alimento->nombre = $request->nombre;
        $alimento->kcal = $request->kcal;
        $alimento->proteinas = $request->pro;
        $alimento->hidratos = $request->hid;
        $alimento->azucares = $request->azu;
        
        $alimento->save();

        $alimentos = Alimento::all();
        return view('Vistas.calculadora',compact("alimentos"));
    }

    public function update(Request $request){
        
        if ($alimento = Alimento::find($request->id)){

            
            $alimento = new Alimento();
            
            $alimento = Alimento::find($request->id);
            $alimento->nombre = $request->nombre;
            $alimento->kcal = $request->kcal;
            $alimento->proteinas = $request->pro;
            $alimento->hidratos = $request->hid;
            $alimento->azucares = $request->azu;
            $alimento->save();
            
            $alimentos = Alimento::all();
            
            return redirect()->route('calculadora.calculadora',compact("alimentos"));
        }else{
            $alimento = new Alimento();
            $alimentos = Alimento::all();
            return redirect()->route('calculadora.calculadora',compact("alimentos"));
        }
    }

    public function destroy(Request $request){
        $alimentos = Alimento::all();

        $alimento = new Alimento();

        $alimento = Alimento::find($request->id);
        $alimento->delete();
        return redirect()->route('calculadora.calculadora',compact("alimentos"));
    }

}
