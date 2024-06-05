<?php
namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
          $productos = [
            ['name' => 'Zanahoria', 'category' => 'Raíz', 'details' => 'Fresca y crujiente, ideal para ensaladas.', 'image' => 'images/zanahoria.jpg'],
            ['name' => 'Lechuga', 'category' => 'Hoja', 'details' => 'Rica en vitaminas y minerales, perfecta para una dieta saludable.', 'image' => 'images/lechuga.jpg'],
            ['name' => 'Tomate', 'category' => 'Fruto', 'details' => 'De sabor suave y versátil, adecuada para muchas recetas.', 'image' => 'images/tomate.jpeg'],
            ['name' => 'Pepino', 'category' => 'Fruto', 'details' => 'Textura firme y sabor refrescante, excelente para ensaladas.', 'image' => 'images/pepino.webp'],
            ['name' => 'Calabacín', 'category' => 'Fruto', 'details' => 'Versátil y fácil de cocinar, ideal para salteados y asados.', 'image' => 'images/calabacin.jpg'],
            ['name' => 'Brócoli', 'category' => 'Inflorescencia', 'details' => 'Rico en fibra y nutrientes, excelente al vapor o hervido.', 'image' => 'images/brocoli.jpg'],
            ['name' => 'Espinaca', 'category' => 'Hoja', 'details' => 'Llena de hierro y vitaminas, perfecta para ensaladas y guisos.', 'image' => 'images/espinaca.jpg'],
            ['name' => 'Acelga', 'category' => 'Hoja', 'details' => 'Ideal para cocinar, con un sabor suave y lleno de nutrientes.', 'image' => 'images/acelga.jpeg'],
            ['name' => 'Pimiento', 'category' => 'Fruto', 'details' => 'Colorido y sabroso, ideal para asar o usar en salsas.', 'image' => 'images/pimiento.jpg'],
            ['name' => 'Berenjena', 'category' => 'Fruto', 'details' => 'Versátil y con un sabor único, perfecta para guisos y asados.', 'image' => 'images/berenjena.jpeg'],
            ['name' => 'Manzana', 'category' => 'Fruto', 'details' => 'Dulce y crujiente, ideal para postres o como snack saludable.', 'image' => 'images/manzana.jpeg'],
            ['name' => 'Plátano', 'category' => 'Fruto', 'details' => 'Rico en potasio, ideal para un snack rápido y saludable.', 'image' => 'images/platano.jpg'],
            ['name' => 'Naranja', 'category' => 'Fruto', 'details' => 'Llena de vitamina C, perfecta para jugos y meriendas.', 'image' => 'images/naranja.jpeg'],
            ['name' => 'Uva', 'category' => 'Fruto', 'details' => 'Pequeña y dulce, ideal para comer sola o en ensaladas de frutas.', 'image' => 'images/uva.jpg'],
            ['name' => 'Fresa', 'category' => 'Fruto', 'details' => 'Dulce y jugosa, excelente para postres y batidos.', 'image' => 'images/fresa.jpg'],
            ['name' => 'Pera', 'category' => 'Fruto', 'details' => 'Dulce y suave, ideal para comer fresca o en conservas.', 'image' => 'images/pera.jpg'],
            ['name' => 'Melocotón', 'category' => 'Fruto', 'details' => 'Jugoso y dulce, perfecto para postres y mermeladas.', 'image' => 'images/melocoton.jpeg'],
            ['name' => 'Sandía', 'category' => 'Fruto', 'details' => 'Refrescante y jugosa, ideal para el verano.', 'image' => 'images/sandia.jpg'],
            ['name' => 'Melón', 'category' => 'Fruto', 'details' => 'Dulce y jugoso, excelente para comer fresco en verano.', 'image' => 'images/melon.jpg'],
            ['name' => 'Piña', 'category' => 'Fruto', 'details' => 'Tropical y jugosa, ideal para postres y batidos.', 'image' => 'images/piña.jpg'],
            ['name' => 'Mango', 'category' => 'Fruto', 'details' => 'Dulce y exótico, perfecto para comer fresco o en batidos.', 'image' => 'images/mango.jpg'],
            ['name' => 'Papaya', 'category' => 'Fruto', 'details' => 'Dulce y nutritiva, excelente para comer fresca o en batidos.', 'image' => 'images/papaya.jpeg'],
            ['name' => 'Cereza', 'category' => 'Fruto', 'details' => 'Pequeña y dulce, ideal para postres y ensaladas de frutas.', 'image' => 'images/cereza.jpg'],
            ['name' => 'Ciruela', 'category' => 'Fruto', 'details' => 'Dulce y jugosa, excelente para comer fresca o en conservas.', 'image' => 'images/ciruela.jpeg'],
            ['name' => 'Kiwi', 'category' => 'Fruto', 'details' => 'Exótico y nutritivo, perfecto para ensaladas de frutas y batidos.', 'image' => 'images/kiwi.jpg'],
            ['name' => 'Limón', 'category' => 'Fruto', 'details' => 'Ácido y refrescante, ideal para jugos y aderezos.', 'image' => 'images/limon.png'],
            ['name' => 'Pomelo', 'category' => 'Fruto', 'details' => 'Ácido y jugoso, excelente para desayunos y jugos.', 'image' => 'images/pomelo.webp'],
            ['name' => 'Mandarina', 'category' => 'Fruto', 'details' => 'Dulce y fácil de pelar, ideal para meriendas y ensaladas de frutas.', 'image' => 'images/mandarina.jpg'],
            ['name' => 'Coco', 'category' => 'Fruto', 'details' => 'Exótico y versátil, perfecto para postres y batidos.', 'image' => 'images/coco.jpeg'],
            ['name' => 'Higo', 'category' => 'Fruto', 'details' => 'Dulce y con una textura única, ideal para postres y ensaladas.', 'image' => 'images/higo.jpeg'],
            ['name' => 'Granada', 'category' => 'Fruto', 'details' => 'Llena de antioxidantes, excelente para ensaladas y jugos.', 'image' => 'images/granada.jpg'],
            ['name' => 'Frambuesa', 'category' => 'Fruto', 'details' => 'Dulce y jugosa, perfecta para postres y batidos.', 'image' => 'images/frambuesa.jpeg'],
            ['name' => 'Mora', 'category' => 'Fruto', 'details' => 'Pequeña y jugosa, ideal para postres y batidos.', 'image' => 'images/mora.jpg'],
            ['name' => 'Arándano', 'category' => 'Fruto', 'details' => 'Pequeño y lleno de antioxidantes, perfecto para postres y batidos.', 'image' => 'images/arandano.jpeg'],
            ['name' => 'Albaricoque', 'category' => 'Fruto', 'details' => 'Dulce y jugoso, excelente para comer fresco o en conservas.', 'image' => 'images/albaricoque.jpeg'],
            ['name' => 'Chirimoya', 'category' => 'Fruto', 'details' => 'Exótica y dulce, perfecta para postres y ensaladas de frutas.', 'image' => 'images/chirimoya.jpeg'],
            ['name' => 'Guayaba', 'category' => 'Fruto', 'details' => 'Dulce y tropical, ideal para jugos y postres.', 'image' => 'images/guayaba.jpeg'],
            ['name' => 'Maracuyá', 'category' => 'Fruto', 'details' => 'Exótica y refrescante, perfecta para jugos y postres.', 'image' => 'images/maracuya.jpg'],
            ['name' => 'Lima', 'category' => 'Fruto', 'details' => 'Ácida y refrescante, ideal para jugos y aderezos.', 'image' => 'images/lima.jpg'],
            ['name' => 'Aguacate', 'category' => 'Fruto', 'details' => 'Cremoso y nutritivo, perfecto para ensaladas y guacamole.', 'image' => 'images/aguacate.jpeg'],
            ['name' => 'Aceituna', 'category' => 'Fruto', 'details' => 'Pequeña y sabrosa, ideal para aperitivos y ensaladas.', 'image' => 'images/aceituna.jpeg'],
            ['name' => 'Pepino dulce', 'category' => 'Fruto', 'details' => 'Dulce y refrescante, excelente para comer fresco.', 'image' => 'images/pepinoDulce.jpeg'],
            ['name' => 'Tamarindo', 'category' => 'Fruto', 'details' => 'Agridulce y tropical, ideal para jugos y postres.', 'image' => 'images/tamarindo.jpg'],
            ['name' => 'Castaña', 'category' => 'Fruto', 'details' => 'Dulce y con una textura única, perfecta para postres y ensaladas.', 'image' => 'images/castaña.jpg'],
            ['name' => 'Durazno', 'category' => 'Fruto', 'details' => 'Dulce y jugoso, perfecto para postres y mermeladas.', 'image' => 'images/durazno.jpg'],
            ['name' => 'Litchi', 'category' => 'Fruto', 'details' => 'Exótico y dulce, ideal para postres y ensaladas de frutas.', 'image' => 'images/litchi.jpg'],
            ['name' => 'Caimito', 'category' => 'Fruto', 'details' => 'Dulce y tropical, excelente para comer fresco.', 'image' => 'images/caimito.jpg'],
            ['name' => 'Membrillo', 'category' => 'Fruto', 'details' => 'Ácido y aromático, ideal para mermeladas y postres.', 'image' => 'images/membrillo.jpeg'],
            ['name' => 'Guanábana', 'category' => 'Fruto', 'details' => 'Dulce y con una textura cremosa, ideal para jugos y postres.', 'image' => 'images/guanabana.jpg'],
            ['name' => 'Uchuva', 'category' => 'Fruto', 'details' => 'Pequeña y agridulce, perfecta para postres y ensaladas.', 'image' => 'images/uchuva.jpg'],
        ];
    // Selecciona un producto aleatorio del array
    $producto = $this->faker->randomElement($productos);

    return [
        'name' => $producto['name'],
        'category' => $producto['category'],
        'details' => $producto['details'],
        'price' => $this->faker->randomFloat(2, 0.5, 20), // Precio aleatorio
        'image' => $producto['image'],
    ];
}
}