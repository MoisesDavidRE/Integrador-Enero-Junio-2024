<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use App\Models\InfoModel;

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
                $usuario = model('UsuarioModel');
                $infoUsuario = model('InfoModel');
    
                $user = $usuario->where('identificador', $this->request->getVar('identificador'))->first();
    
                if (!$user) {
                    return redirect()->to('login')->with('error', 'Usuario no encontrado');
                }
    
                    $infoUser = $infoUsuario->where('id_usuario', $user->id)->first();            
                if (!$infoUser) {
                    return redirect()->to('user/completarInfo')->with('id', $user->id);
                }                
    
                $this->setUserSession($user, $infoUser);
    
                if (($user->perfil == 1) && ($user->status == 1)) {
                    return redirect()->to(base_url('admin/cursos'));
                }
                if (($user->perfil == 2) && ($user->status == 1)) {
                    return redirect()->to(base_url('estudiante/cursos'));
                }
                if (($user->perfil == 3) && ($user->status == 1)) {
                    return redirect()->to(base_url('docente/cursos'));
                }
                if (($user->perfil == 4) && ($user->status == 1)) {
                    return redirect()->to(base_url('administrativo/cursos'));
                }
            }
        }
        return view('login');
    }
    public function completarInfo()
    {
        $userId = session('id');
    
        $infoUsuario = model('InfoModel');
        $infoUser = $infoUsuario->where('id_usuario', $userId)->first();
    
        if ($infoUser) {
            return redirect()->to('admin/cursos');
        }
    
        $usuario = model('UsuarioModel');
        $basicUserInfo = $usuario->where('id', $userId)->first();
    
        return view('admin/usuarios/completarInfo', [
            'id' => $userId,
            'basicUserInfo' => $basicUserInfo,
        ]);
    }

    public function guardarInfo()
{

    $validationRules = [
        'nombre' => 'required|min_length[2]|max_length[50]',
        'apellidoPaterno' => 'required|min_length[2]|max_length[50]',
        'apellidoMaterno' => 'required|min_length[2]|max_length[50]',
        'telefono' => 'required|min_length[7]|max_length[15]',
        'sede' => 'required',
    ];

    if (!$this->validate($validationRules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $infoUsuario = model('InfoModel');
    $data = [
        'id_Usuario' => $this->request->getPost('id_Usuario'),
        'nombre' => $this->request->getPost('nombre'),
        'apellidoPaterno' => $this->request->getPost('apellidoPaterno'),
        'apellidoMaterno' => $this->request->getPost('apellidoMaterno'),
        'telefono' => $this->request->getPost('telefono'),
        'sede' => $this->request->getPost('sede')
    ];
    $infoUsuario->insert($data);
    return redirect()->to('login');
}

public function prueba(){
    $infoUsuario = model('InfoModel');
    $data = [
        'id_Usuario' => 3,
        'nombre' => 'moiii',
        'apellidoPaterno' => 'ramon',
        'apellidoMaterno' => 'estebann',
        'telefono' => '231232372',
        'sede' => 'Teziutlán',
    ];
    $infoUsuario->insert($data);
    return redirect()->to('login');
}
    
    private function setUserSession($user, $infoUser)
    {
        $data = [
            'id'            => $user->id,
            'identificador' => $user->identificador,
            'nombre'        => $infoUser->nombre,
            'apaterno'      => $infoUser->apellidoPaterno,
            'amaterno'      => $infoUser->apellidoMaterno,
            'telefono'      => $infoUser->telefono,
            'email'         => $user->email,
            'sede'          => $infoUser->sede,
            'isLoggedIn'    => true,
            'perfil'        => $user->perfil,
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

