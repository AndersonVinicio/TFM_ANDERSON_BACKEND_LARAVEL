<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCitas extends Model
{
    use HasFactory;
    protected $table = 'table_citas';
    protected $fillable = ['nombre_cliente', 'telefono', 'fecha', 'hora'];
}
