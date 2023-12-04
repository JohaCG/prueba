<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class DescripcionController extends Controller
{
    public function registrar(Request $request){
        
        $categoria= new Categoria();
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return back();
    }
}
