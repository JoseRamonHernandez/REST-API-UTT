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
        
        return response()->json($alumno::find($id),200);
    
    }

    public function insertEgresado(Request $request){
        $alumno = alumnos_egresados::create($request->all());
        return response($alumno, 200);
    }

    public function updateAlumno(Request $request, $id){
        $alumno = alumnos_egresados::find($id);
        if(empty($alumno)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }
        $alumno->update($request->all());
        return response($alumno,201);
    }

    public function deleteAlumno($id){
        $alumno = alumnos_egresados::find($id);
        if(empty($alumno)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }
        $alumno->delete();
        return response()->json("Alumno eliminado",200);
    }
}
