<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class RegistroController extends BaseController
{


    private $usuarioModel;


    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }



    // FUNCIONES PARA EL REGISTRO DEL ESTUDIANTE

    // CARGAR FORMULARIO DE REGISTRO
    public function new()
    {
        return view('pages/registro');
    }


    // GUARDAR REGISTRO DE ESTUDIANTE
    public function create()
    {
        $data = [
            'perfil'            => 1,
            'identificador'     => $this->request->getVar('identificador'),
            'nombre'            => $this->request->getVar('nombre'),
            'apaterno'          => $this->request->getVar('apaterno'),
            'amaterno'          => $this->request->getVar('amaterno'),
            'email'             => $this->request->getVar('email'),
            'password'          => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'sexo'              => $this->request->getVar('sexo'),
            'status'            => 1,
            'fecha_nacimiento'  => $this->request->getVar('fecha_nacimiento')
        ];

        $rules = [
            'identificador' => 'required|is_unique[usuarios.identificador]',
            'password'      => 'required|min_length[8]|max_length[30]',
            'email'         => 'required|valid_email|is_unique[usuarios.email]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('registro')->withInput()->with('errors', $this->validator->getErrors());
        }

        $allowedDomain = 'teziutlan.tecnm.mx';
        $emailDomain = explode('@', $data['email'])[1];

        if ($emailDomain !== $allowedDomain) {
            return redirect()->to('registro')->withInput()->with('error', 'El correo electrónico debe ser del dominio institucional teziutlan.tecnm.mx');
        }

        $this->usuarioModel->insert($data);

        return redirect()->to('/login');
    }

}
