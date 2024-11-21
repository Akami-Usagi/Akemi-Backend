<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuModelo extends Model
{
    use HasFactory;

    protected $table = 'tu_tabla';

    protected $fillable = ['campo1', 'campo2']; // Define los campos que se pueden llenar
}
