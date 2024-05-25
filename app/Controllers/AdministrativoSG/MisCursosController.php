<?php

namespace App\Controllers\AdministrativoSG;

use App\Controllers\BaseController;
use App\Models\SubtemaModel;
use App\Models\ContenidoModel;
use App\Models\CursoUsuarioModel;
use App\Models\TemaModel;
use App\Models\CursosInicioModel;


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
    public function verCurso($idCurso)
    {
        $temaModel = new TemaModel();
        $cursoModel = new CursosInicioModel();

        $curso = $cursoModel->find($idCurso);
        
        $temas = $temaModel->where('idCurso', $idCurso)->findAll();

        return view('administrativoSG/misCursos/verCurso', ['curso' => $curso, 'temas' => $temas]);
    }
    public function verTema($idTema)
    {
        $temaModel = new TemaModel();
        $subtemaModel = new SubtemaModel();

        $tema = $temaModel->find($idTema);

        if (!$tema) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("No se encontró el tema con ID: " . $idTema);
        }

        $subtemas = $subtemaModel->where('idTema', $idTema)->findAll();

        return view('administrativoSG/misCursos/verTema', ['tema' => $tema, 'subtemas' => $subtemas]);
    }
    public function verSubtema($idSubtema)
    {
        $subtemaModel = new SubtemaModel();

        $subtema = $subtemaModel->find($idSubtema);

        if (!$subtema) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("No se encontró el subtema con ID: " . $idSubtema);
        }

        return view('administrativoSG/misCursos/verSubtema', ['subtema' => $subtema]);
    }
}

