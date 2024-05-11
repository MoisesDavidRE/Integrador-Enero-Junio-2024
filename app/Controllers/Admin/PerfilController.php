<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PerfilController extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $usuariosModel = model('UsuarioModel');
        $infoUsuarioModel = model('InfoModel');

        $usuario = $usuariosModel->find($session->get('id'));
        $infoUsuario = $infoUsuarioModel->where('id_Usuario', $session->get('id'))->first();
        $userInfo = [
            'idInfo' => $infoUsuario->id,
            'nombre' => $infoUsuario->nombre,
            'apellidoPaterno' => $infoUsuario->apellidoPaterno,
            'apellidoMaterno' => $infoUsuario->apellidoMaterno,
            'email' => $usuario->email,
            'identificador' => $usuario->identificador,
            'sede' => $infoUsuario->sede
        ];

        $data = [
            'userInfo' => $userInfo
        ];

        return view('admin/perfil/index', $data);
    }

    public function editar($id)
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }

        $usuariosModel = model('UsuarioModel');
        $infoUsuarioModel = model('InfoModel');

        $usuario = $usuariosModel->find($id);
        $infoUsuario = $infoUsuarioModel->where('id_Usuario', $id)->first();

        $data = [
            'usuario' => $usuario,
            'infoUsuario' => $infoUsuario            
        ];

        return view('admin/perfil/editar', $data);
    }

    public function actualizar()
    {
        // $session = session();
        // if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
        //     $session->destroy();
        //     return redirect('/');
        // }

        $usersModel = model('UsersModel');
        $infoModel = model('InfoModel');
        $session = session();
        $infoUsuario = $infoModel->where('id_Usuario', $session->get('id'))->first();

        $userData = [
            'identificador' => $_POST['identificador'],
            'email' => $_POST['email']
        ];

        $infoData = [
            'nombre' => $_POST['nombre'],
            'apellidoPaterno' => $_POST['apellidoPaterno'],
            'apellidoMaterno' => $_POST['apellidoMaterno'],
            'telefono' => $_POST['telefono'],
            'sede' => $_POST['sede']
        ];

        $usersModel->update(['id_Usuario' => session('id')], $userData);
        $infoModel->update($infoUsuario->id, $infoData);

        return redirect()->to(base_url('admin/perfil'));
    }
}
