<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tractora extends Model
{
    use HasFactory;

    protected $fillable = [
    'matricula', 
    'marca', 
    'modelo', 
    'kilometraje', 
    'consumo_promedio', 
    'matriculacion',
    'ultima_itv'];

    // public function conductores()
    // {
    //     return $this->belongsToMany(Conductor::class);
    // }
}
