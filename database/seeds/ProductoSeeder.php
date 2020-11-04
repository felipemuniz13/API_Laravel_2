<?php

use App\Models\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PRODUCTO 1
        $producto = new Producto();
        $producto->producto = 'Audífonos'; 
        $producto->precio = '4500.00';
        $producto->save();

        //PRODUCTO 2
        $producto2 = new Producto();
        $producto2->producto = 'Smartwatch'; 
        $producto2->precio = '2000.00';
        $producto2->save();

        //PRODUCTO 3
        $producto3 = new Producto();
        $producto3->producto = 'Teatro en Casa'; 
        $producto3->precio = '5000.00';
        $producto3->save();

        //PRODUCTO 4
        $producto4 = new Producto();
        $producto4->producto = 'Smart TV'; 
        $producto4->precio = '1200.00';
        $producto4->save();

        //PRODUCTO 5
        $producto5 = new Producto();
        $producto5->producto = 'Smartphone'; 
        $producto5->precio = '7500.00';
        $producto5->save();
    }
}
