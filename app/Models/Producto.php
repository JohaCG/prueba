<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table ='productos';
    public $timestamps=false;
    protected $fillable = ['nombre', 'fecha_vencimiento', 'precio','cantidad','categoria_id' ];
}
