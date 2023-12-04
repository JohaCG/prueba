<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function principal(){
        return view('inicio');
    }

    public function registrar(Request $request){
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->fecha_vencimiento = $request->fecha_vencimiento;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->categoria_id = $request->categoria_id;
        $producto->save();
        return back();
    }
    public function index(){
        $autores=Producto::where('estado',true)->get();
        $productos = DB::table('productos')
            ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
            ->select('productos.id', 'productos.nombre', 'productos.year.fecha_vencimiento','productos.precio','productos.cantidad','categorias.descripcion as descripcion')
            ->where('productos.estado',true)
            ->get();
        return view("inicio",compact('productos','categorias'));
    }
}
