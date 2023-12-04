<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{

    public function registrar(Request $request){
        $productos = new Producto();
        $productos->nombre = $request->nombre;
        $productos->fecha_vencimiento = $request->fecha_vencimiento;
        $productos->precio = $request->precio;
        $productos->cantidad = $request->cantidad;
        $productos->categoria_id = $request->categoria_id;
        $productos->save();
        return back();
    }
    public function index(){
        $productos = DB::table('productos')
            ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
            ->select('productos.id', 'productos.nombre', 'productos.fecha_vencimiento','productos.precio','productos.cantidad','categorias.descripcion as descripcion')
            ->where('productos.estado',true)
            ->get();
        return view("productos.inicio",compact('productos'));
    }
    
    public function eliminar($id){

        $productos = Producto::find($id);
        if($productos){
            $productos->estado=false;
            $productos->save();
            return back();
        }
    }

    public function showAutor($id){

        $producto =Producto::find($id);
        return view('listaproductos',compact('libro'));
    }


}
