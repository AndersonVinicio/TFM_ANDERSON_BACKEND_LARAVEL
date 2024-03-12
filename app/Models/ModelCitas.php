<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ModelCitas extends Model
{
    use HasFactory;
    protected $table = 'table_citas';
    protected $fillable = ['nombre_cliente', 'telefono', 'fecha', 'hora', 'trabajo'];

    public static function getCitas()
    {
        return ModelCitas::select('id', 'nombre_cliente', 'telefono', 'fecha', 'hora', 'trabajo')->get();
    }

    public static function addCita(Request $request)
    {
        $cita = new ModelCitas();
        $cita->nombre_cliente = $request->nombre_cliente;
        $cita->telefono = $request->telefono;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->trabajo = $request->trabajo;
        $cita->save();

        return $cita;
    }
}
