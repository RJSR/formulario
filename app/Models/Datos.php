<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','rif','tlf1','tlf2','correo1','correo2','diredo','dirpais',];
}
