<?php

namespace App\Controllers\Docente;

use App\Controllers\BaseController;
use App\Models\CursoUsuarioModel;

class MisCursosController extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '3') {
            $session->destroy();
            return redirect('/');
        }
        return view ('docente/misCursos/index');
    }

    public function misCursos(){
        $cursoUsuarioModel = new CursoUsuarioModel();
        $data = [
            'cursos' => $cursoUsuarioModel->where('idUsuario',session()->get('id'))->findAll()
        ];
        return view ('docente/misCursos/index',$data);
    }
}
