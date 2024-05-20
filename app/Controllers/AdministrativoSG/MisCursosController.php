<?php

namespace App\Controllers\AdministrativoSG;

use App\Controllers\BaseController;
use App\Models\CursoUsuarioModel;

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
    public function misCursos(){
        $cursoUsuarioModel = new CursoUsuarioModel();
        $data = [
            'cursos' => $cursoUsuarioModel->where('idUsuario',session()->get('id'))->findAll()
        ];
        return view ('administrativoSG/misCursos/index',$data);
    }
}
