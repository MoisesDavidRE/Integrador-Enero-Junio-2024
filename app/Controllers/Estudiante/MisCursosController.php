<?php

namespace App\Controllers\Estudiante;

use App\Controllers\BaseController;
use App\Models\SubtemaModel;
use App\Models\ContenidoModel;
use App\Models\CursoUsuarioModel;

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

    public function misCursos(){
        $cursoUsuarioModel = new CursoUsuarioModel();
        $data = [
            'cursos' => $cursoUsuarioModel->where('idUsuario',session()->get('id'))->findAll()
        ];
        return view ('estudiante/misCursos/index',$data);
    }
}
