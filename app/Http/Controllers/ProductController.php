<?php
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Método para obtener todos los productos
    public function index()
    {
        $productos = Producto::all()->map(function ($producto) {
            // Ajusta el precio a un dato numérico y agrega la URL de la imagen al objeto de producto
            $producto->price = (float) $producto->price;
            $producto->image = url( $producto->image); 
            return $producto;
        });
        
        return response()->json($productos);
    }

    // Método para obtener un producto específico por su ID
    public function show($id)
    {
        // Obtener el producto por su ID
        $producto = Producto::find($id);

        // Si el producto no existe, retornar un error 404
        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        // Retornar el producto como JSON
        return response()->json($producto);
    }
}
