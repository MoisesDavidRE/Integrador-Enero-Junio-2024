<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use App\Models\InfoModel;
use App\Models\ResetPassModel;

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
                    return redirect()->to('user/completarInfo/'.$user->id)->with('id', $user->id);
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
    public function completarInfo($id)
    {
    
        $infoUsuario = model('InfoModel');
        $infoUser = $infoUsuario->where('id_usuario', $id)->first();
    
        if ($infoUser) {
            return redirect()->to('admin/cursos');
        }
    
        $usuario = model('UsuarioModel');
        $basicUserInfo = $usuario->where('id', $id)->first();
    
        return view('pages/completarInfo', [
            'id' => $id,
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


    $dataR = [
        'pregunta' => $this->request->getVar('pregunta'),
        'respuesta' => password_hash($this->request->getVar('respuesta'), PASSWORD_DEFAULT),
        'idUsuario' => $this->request->getVar('id_Usuario'),
        'identificador' => $this->request->getVar('identificador')
    ];
    $resetPass = new ResetPassModel();
    $resetPass->insert($dataR, true);

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

    public function resetPass(){
        return view('pages/resetPass');
    }
    public function pregunta(){
        $resetPassModel = new ResetPassModel();
        $usr = $resetPassModel->where('identificador',$_POST['identificador'])->findAll();
        $data = [
            'reset' => $usr
        ];
        return view('pages/question',$data);
    }
    public function respuesta (){
        $model = new ResetPassModel();
        $resetPass = $model->where('identificador', $_POST['identificador'])->first();
        if (!$resetPass) {
            return false;
        }
        if(password_verify($_POST['respuesta'], $resetPass->respuesta)){
            $usrModel = new UsuarioModel();
            $data = [
                'usuario' => $usrModel->where('identificador',$_POST['identificador'])->findAll()
            ];
            return view('pages/renovarPass',$data);
        }
    }

    public function updatePass (){
        $usrModel =  new UsuarioModel();
        $data = [
            'password' => password_hash($this->request->getVar('nuevaContra'), PASSWORD_DEFAULT)
        ];
        $usrModel->update($_POST['idUsuario'],$data);
        return redirect('/');
    }
}

