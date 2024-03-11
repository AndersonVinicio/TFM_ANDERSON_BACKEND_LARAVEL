<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCitas extends Model
{
    use HasFactory;
    protected $table = 'table_citas';
    protected $fillable = ['nombre_cliente', 'telefono', 'fecha', 'hora'];

    public static function getCitas()
    {
        return ModelCitas::select('nombre_cliente', 'telefono', 'fecha', 'hora', 'trabajo')->get();
    }
}
