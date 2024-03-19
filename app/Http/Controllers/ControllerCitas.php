<?php

namespace App\Http\Controllers;

use App\Models\ModelCitas;
use Illuminate\Http\Request;
use PhpParser\Modifiers;

class ControllerCitas extends Controller
{
    //OBTENER TODAS LAS CITAS
    public function showAll()
    {
        $allCitas = ModelCitas::getCitas();
        return response()->json($allCitas);
    }

    public function addCita(Request $request)
    {
        $cita = ModelCitas::addCita($request);
        return response()->json([
            'success' => true,
            'message' => 'Cita creada exitosamente',
            'data' => $cita,
        ]);
    }

    public function deleteCita(int $id)
    {
        $respuestaBD = ModelCitas::deleteCita($id);
        return response()->json([
            'delete' => true,
            'message' => $respuestaBD,
        ]);
    }
}
