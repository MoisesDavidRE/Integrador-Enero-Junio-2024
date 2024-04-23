<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use App\Models\InfoUsuarioModel;

class UserController extends BaseController
{

    public function login()
    {

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
                $usuario = new UsuarioModel();
                $infoUsuario = new InfoUsuarioModel();

                $user = $usuario->where('identificador', $this->request->getVar('identificador'))->first();
                $infoUser = $infoUsuario->where('id_usuario', $user['id'])->first();
                $this->setUserSession($user, $infoUser);

                if(($user['perfil'] == 1) && ($user['status'] == 1)) {
                    return redirect()->to(base_url('admin/cursos'));
                }
                if(($user['perfil'] == 2) && ($user['status'] == 1)) {
                    return redirect()->to(base_url('admin/cursos'));
                }
                if(($user['perfil'] == 3) && ($user['status'] == 1)) {
                    return redirect()->to(base_url('admin/cursos'));
                }
                if(($user['perfil'] == 4) && ($user['status'] == 1)) {
                    return redirect()->to(base_url('admin/cursos'));
                }
            }
        }
        return view('login');
    }


    private function setUserSession($user, $infoUser)
    {
        $data = [
            'id'            => $user['id'],
            'identificador' => $user['identificador'],
            'nombre'        => $infoUser['nombre'],
            'apaterno'      => $infoUser['apellidoPaterno'],
            'amaterno'      => $infoUser['apellidoMaterno'],
            // 'username'      => $user['username'],
            'email'         => $user['email'],
            'isLoggedIn'    => true,
            'perfil'           => $user['perfil'],
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

