<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class UserController extends BaseController
{

    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'identificador' => 'required|min_length[1]|max_length[20]',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[identificador,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Nombre de usuario o contraseña incorrecta",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('login', [
                    "validation" => $this->validator,
                ]);

            } else {
                $model = new UsuarioModel();

                $user = $model->where('identificador', $this->request->getVar('identificador'))->first();

                $this->setUserSession($user);

                if(($user['perfil'] == 1) && ($user['status'] == 1)) {
                    return redirect()->to(base_url('admin'));
                }
            }
        }
        return view('login');
    }


    private function setUserSession($user)
    {
        $data = [
            'id'            => $user['id'],
            'identificador' => $user['identificador'],
            'nombre'        => $user['nombre'],
            'apaterno'      => $user['apaterno'],
            'amaterno'      => $user['amaterno'],
            // 'username'      => $user['username'],
            'email'         => $user['email'],
            'isLoggedIn'    => true,
            'perfil'           => $user['perfil'],
            'sexo'          => $user['sexo'],
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}


