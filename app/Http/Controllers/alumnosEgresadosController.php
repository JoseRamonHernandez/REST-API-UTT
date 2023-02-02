<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumnos_egresados;

class alumnosEgresadosController extends Controller
{
    public function getAlumnosEgresados(){
        return response()->json(alumnos_egresados::all(),200);
    }
}
