<?php

namespace App\Controllers\Docente;

use App\Controllers\BaseController;

class DocenteController extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '3') {
            $session->destroy();
            return redirect('/');
        }
        return view('docente/cursos/index');
    }

    public function cursos(){
        
    }

    public function misCursos(){
        return view('administrativoSG/misCursos/index');
    }
    public function perfil(){
        return view('administrativoSG/perfil/index');
    }
}
