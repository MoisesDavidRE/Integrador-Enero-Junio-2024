<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class AdminController extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $usuarioModel = model ('UsuarioModel');
        $usuarios = $usuarioModel->orderBy('id', 'DESC')->findAll();

        $data = [
            'usuarios'  => $usuarios
        ];

        return view('admin/dashboard', $data);
    }
}
