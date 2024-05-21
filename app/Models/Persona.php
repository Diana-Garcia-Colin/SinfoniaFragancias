<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombres',
        'apellido_p',
        'apellido_m',
        'fecha_nac',
        'cargos',
    ];
}
