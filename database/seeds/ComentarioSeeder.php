<?php

use App\Models\Comentario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //COMENTARIO 1
        $comentario = new Comentario();
        $comentario->titulo = 'Excelente producto.';
        $comentario->contenido = 'Es un producto realmente sorprendente, aunque muy costoso. Aun así he quedado satisfecho con mi experiencia de uso.';
        $comentario->persona_id = 5;
        $comentario->producto_id = 1;
        $comentario->save();

        //COMENTARIO 2
        $comentario2 = new Comentario();
        $comentario2->titulo = 'Excelente producto.';
        $comentario2->contenido = 'Es un producto realmente sorprendente, aunque muy costoso. Aun así he quedado satisfecho con mi experiencia de uso.';
        $comentario2->persona_id = 5;
        $comentario2->producto_id = 2;
        $comentario2->save();

        //COMENTARIO 3
        $comentario3 = new Comentario();
        $comentario3->titulo = 'Excelente producto.';
        $comentario3->contenido = 'Es un producto realmente sorprendente, aunque muy costoso. Aun así he quedado satisfecho con mi experiencia de uso.';
        $comentario3->persona_id = 5;
        $comentario3->producto_id = 3;
        $comentario3->save();

        //COMENTARIO 4
        $comentario4 = new Comentario();
        $comentario4->titulo = 'Excelente producto.';
        $comentario4->contenido = 'Es un producto realmente sorprendente, aunque muy costoso. Aun así he quedado satisfecho con mi experiencia de uso.';
        $comentario4->persona_id = 5;
        $comentario4->producto_id = 4;
        $comentario4->save();

        //COMENTARIO 5
        $comentario5 = new Comentario();
        $comentario5->titulo = 'Excelente producto.';
        $comentario5->contenido = 'Es un producto realmente sorprendente, aunque muy costoso. Aun así he quedado satisfecho con mi experiencia de uso.';
        $comentario5->persona_id = 5;
        $comentario5->producto_id = 5;
        $comentario5->save();
    }
}
