<?php

namespace App\Controllers\Estudiante;

use App\Controllers\BaseController;

class PerfilController extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '2') {
            $session->destroy();
            return redirect('/');
        }

        $userInfo = [
            'nombre' => $session->get('nombre'),
            'email' => $session->get('email'),
            'identificador' => $session->get('identificador'),
            'sede' => $session->get('sede')
        ];

        $data = [
            'userInfo' => $userInfo
        ];

        return view ('estudiante/perfil/index',$data);
    }
}
