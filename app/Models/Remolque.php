<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remolque extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricula', 
        'marca', 
        'numero_chasis', 
        'matriculacion',
        'ultima_itv', 
        'atp'];
}
