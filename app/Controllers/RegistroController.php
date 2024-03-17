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
            'email'             => $this->request->getVar('email'),
            'password'          => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'status'            => 1,
        ];

        $rules = [
            'identificador' => 'required|is_unique[usuarios.identificador]',
            'password'      => 'required|min_length[8]|max_length[30]',
            'email'         => 'required|valid_email|is_unique[usuarios.email]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('registro')->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->usuarioModel->insert($data);

        return redirect()->to('/login');
    }

}
