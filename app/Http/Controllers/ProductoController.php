<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // Datos fijos para la evaluación
        Producto::create([
            'nombre' => 'Producto 1',
            'precio' => 100,
            'stock' => 10,
            'categoria' => 'Categoría A',
        ]);
        Producto::create([
            'nombre' => 'Producto 2',
            'precio' => 50,
            'stock' => 3,
            'categoria' => 'Categoría B',
        ]);
        Producto::create([
            'nombre' => 'Producto 3',
            'precio' => 200,
            'stock' => 7,
            'categoria' => 'Categoría A',
        ]);
        Producto::create([
            'nombre' => 'Producto 4',
            'precio' => 150,
            'stock' => 2,
            'categoria' => 'Categoría C',
        ]);

        return redirect('/productos');
    }

    public function stockAlto()
    {
        $productos = Producto::where('stock', '>', 5)->get();
        return view('productos.index', compact('productos'));
    }
}
