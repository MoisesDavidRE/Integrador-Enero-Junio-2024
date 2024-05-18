<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class RegistroController extends BaseController
{
    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = model('UsuarioModel');
    }

    // CARGAR FORMULARIO DE REGISTRO
    public function new()
    {
        return view('pages/registro');
    }

    // GUARDAR REGISTRO DE ESTUDIANTE
    public function create()
    {
        $rules = [
            'identificador' => [
                'label' => 'Número de control/Matrícula',
                'rules' => 'required|is_unique[usuarios.identificador]',
                'errors' => [
                    'required' => 'El {field} es obligatorio.',
                    'is_unique' => 'El {field} ya está registrado.'
                ]
            ],
            'email' => [
                'label' => 'Correo',
                'rules' => 'required|valid_email|is_unique[usuarios.email]',
                'errors' => [
                    'required' => 'El {field} es obligatorio.',
                    'valid_email' => 'El {field} debe ser una dirección de correo válida.',
                    'is_unique' => 'El {field} ya está registrado.'
                ]
            ],
            'telefono' => [
                'label' => 'Teléfono',
                'rules' => 'required|numeric|min_length[10]|max_length[15]',
                'errors' => [
                    'required' => 'El {field} es obligatorio.',
                    'numeric' => 'El {field} debe contener solo números.',
                    'min_length' => 'El {field} debe tener al menos {param} dígitos.',
                    'max_length' => 'El {field} no puede tener más de {param} dígitos.'
                ]
            ],
            'password' => [
                'label' => 'Contraseña',
                'rules' => 'required|min_length[8]|max_length[30]',
                'errors' => [
                    'required' => 'La {field} es obligatoria.',
                    'min_length' => 'La {field} debe tener al menos {param} caracteres.',
                    'max_length' => 'La {field} no puede tener más de {param} caracteres.'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('registro')->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'perfil' => 1,
            'identificador' => $this->request->getVar('identificador'),
            'email' => $this->request->getVar('email'),
            'telefono' => $this->request->getVar('telefono'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'status' => 1,
        ];

        $this->usuarioModel->insert($data);

        return redirect()->to('/login');
    }
}