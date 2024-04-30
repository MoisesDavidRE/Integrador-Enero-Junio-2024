<?php

namespace App\Controllers\Estudiante;

use App\Controllers\BaseController;

class MisCursosController extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '2') {
            $session->destroy();
            return redirect('/');
        }
        return view ('estudiante/misCursos/index');
    }
}
