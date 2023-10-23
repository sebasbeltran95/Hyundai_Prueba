<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;
    protected $table = 'produccion';

    public function getKeyName(){
        return "id";
    }

    public $fillable = [
        'nombre',
        'apellido',
        'pais',
        'foto',
        'created_at',
        'updated_at'
    ];
}
