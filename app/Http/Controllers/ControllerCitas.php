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
        $allCitas = ModelCitas::all();
        return response()->json($allCitas);
    }
}
