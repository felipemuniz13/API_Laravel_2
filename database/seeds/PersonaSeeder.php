<?php

use App\Models\Persona;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PERSONA 1
        $persona = new Persona();
        $persona->nombre = 'Néstor';
        $persona->apellido_paterno = 'Puentes';
        $persona->apellido_materno = 'Inchaurregui';
        $persona->save();

        //PERSONA 2
        $persona2 = new Persona();
        $persona2->nombre = 'Estefania';
        $persona2->apellido_paterno = 'Amador';
        $persona2->apellido_materno = 'Fraire';
        $persona2->save();

        //PERSONA 3
        $persona3 = new Persona();
        $persona3->nombre = 'Raul';
        $persona3->apellido_paterno = 'De los santos';
        $persona3->apellido_materno = 'Anguiano';
        $persona3->save();

        //PERSONA 4
        $persona4 = new Persona();
        $persona4->nombre = 'Amaury';
        $persona4->apellido_paterno = 'Rodriguez';
        $persona4->apellido_materno = 'Ruiz';
        $persona4->save();

        //PERSONA 5
        $persona5 = new Persona();
        $persona5->nombre = 'Felipe';
        $persona5->apellido_paterno = 'Muñiz';
        $persona5->apellido_materno = 'Fonseca';
        $persona5->save();
    }
}
