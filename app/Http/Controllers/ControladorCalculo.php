<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Divisiones;
use DB;

class ControladorCalculo extends Controller
{
//    public function __construct(){
//
//        $this->middleware('calcular');
//
//    }

    public function calculoInput(Request $request){

        $dividiendo=$_POST['dividiendo'];
        $divisor=$_POST['divisor'];

        $datoDividiendo=$dividiendo;
        $datoDivisor=$divisor;

        $resultado=$datoDividiendo/$datoDivisor;

        DB::table('calculos')->insert(array ('dividiendo' => $dividiendo,'divisor' => $divisor,'resultado' =>$resultado));

        return view('correcto')->with('resultado', $resultado);

    }

    public function comprobar(){

        return view('correcto');

    }
}
