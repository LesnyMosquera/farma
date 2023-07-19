<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Proveedor::create(
        [ 'nit'=>'45212135',
        'nombre'=>'Geronimo',
        'genero'=>'Masculino',
        'direccionp'=>'Mz I Casa 13',
        'telefono'=>'3556232',
        'email'=>'lesjsjsjs@gmail.com',
        'departamento'=>'Risaralda',
        'ciudad'=>'Pereira',]
    );
        Proveedor::create(
            [ 'nit'=>'25888796',
            'nombre'=>'claudia',
            'genero'=>'Femenino',
            'direccionp'=>'Avenida cuba',
            'telefono'=>'38544521',
            'email'=>'melinanina@gmail.com',
            'departamento'=>'Risaralda',
            'ciudad'=>'la virginia',]
        );
        Proveedor::create(
            [ 'nit'=>'89653254',
            'nombre'=>'Mariana ',
            'genero'=>'Femenino',
            'direccionp'=>'Avenida Circunvalar',
            'telefono'=>'3195554874',
            'email'=>'marianita@gmail.com',
            'departamento'=>'Antioquia',
            'ciudad'=>'La ceja',]
        );
        Proveedor::create(
            [ 'nit'=>'85785412',
            'nombre'=>'Carmen Patricia ',
            'genero'=>'Femenino',
            'direccionp'=>'Cra 12 N 23-15',
            'telefono'=>'312545212',
            'email'=>'carmencita@gmail.com',
            'departamento'=>'Cundinamarca',
            'ciudad'=>'Bogotá',]
        );

        Proveedor::create(
            [ 'nit'=>'16523345',
            'nombre'=>'Ana del carmen ',
            'genero'=>'Femenino',
            'direccionp'=>'Cra 15 N 123-19',
            'telefono'=>'3187523652',
            'email'=>'anita@gmail.com',
            'departamento'=>'Valle',
            'ciudad'=>'Cali',]
        );




    }
}
