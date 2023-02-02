<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumnos_egresados;

class alumnosEgresadosController extends Controller
{
    public function getAlumnosEgresados(){
        return response()->json(alumnos_egresados::all(),200);
    }

    public function getAlumnoEgresado($id){
        $alumno = alumnos_egresados::find($id);
        if(empty($alumno)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }
        else{
        return response()->json($alumno,200);
        }
    }
}
