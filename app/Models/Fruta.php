<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruta extends Model
{
    //use HasFactory;

    protected $fillable = [
        'fruta',
        'fruta_codigo',
        'fruta_precio',
        'fruta_cantidad',
        'fruta_impuesto',
        'fecha'
    ];
}
