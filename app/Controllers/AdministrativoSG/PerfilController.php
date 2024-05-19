<?php

namespace App\Controllers\AdministrativoSG;

use App\Controllers\BaseController;

class PerfilController extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '4') {
            $session->destroy();
            return redirect('/');
        }

        $userInfo = [
            'nombre' => $session->get('nombre'),
            'apellidoPaterno'=>$session->get('apaterno'),
            'apellidoMaterno'=>$session->get('amaterno'),
            'email' => $session->get('email'),
            'identificador' => $session->get('identificador'),
            'sede' => $session->get('sede')
        ];

        $data = [
            'userInfo' => $userInfo
        ];
        return view ('administrativoSG/perfil/index',$data);
    }
}
