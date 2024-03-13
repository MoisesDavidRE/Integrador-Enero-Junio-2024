<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UsuarioModel;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $usuarios = new UsuarioModel();

        $usuarios->insertBatch([
            [
                'perfil'            => 1,
                'identificador'     => '5000',
                'nombre'            => 'Agustín',
                'apaterno'          => 'Ronzón',
                'amaterno'          => 'Jiménez',
                'email'             => 'div.inf@teziutlan.tecnm.mx',
                'password'          => password_hash('12345678', PASSWORD_DEFAULT),
                'sexo'              => 'm',
                'fecha_nacimiento'   => '1980/01/01',
                'created_at'        => '2023-12-27 12:00:00'
            ]            
        ]);
    }
}
