<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    use HasFactory;

    protected $table = "usuarios";
    protected $primaryKey = "id";
    protected $fillable = ['nombre_apellido', 'nickname', 'contrasena'];
    protected $hidden = ['id'];
}
