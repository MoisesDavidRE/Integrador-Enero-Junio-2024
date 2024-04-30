<?php

namespace App\Controllers\AdministrativoSG;

use App\Controllers\BaseController;

class MisCursosController extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '4') {
            $session->destroy();
            return redirect('/');
        }
        return view ('administrativoSG/misCursos/index');
    }
}
