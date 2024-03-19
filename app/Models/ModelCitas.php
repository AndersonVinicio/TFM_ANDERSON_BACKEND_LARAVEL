<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ModelCitas extends Model
{
    use HasFactory;
    protected $table = 'table_citas';
    protected $fillable = ['nombre_cliente', 'telefono', 'fecha', 'hora', 'trabajo'];

    /**
     * retorna todas las citas de las columnas seleccionadas no de todas las columnas de la tabla
     */
    public static function getCitas()
    {
        return ModelCitas::select('id', 'nombre_cliente', 'telefono', 'fecha', 'hora', 'trabajo')->get();
    }

    /**
     * AGREGA LA CITA A LA BD
     */
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

    /**
     * ELIMINA LA CITA SELECCIONADA MEDIANTE ID
     */

    public static function deleteCita(int $id)
    {

        try {
            //code...
            $cita = ModelCitas::find($id);
            $cita->delete();
            return 'dato eliminado';
        } catch (QueryException $errorDb) {
            return $errorDb;
        }
    }
}
