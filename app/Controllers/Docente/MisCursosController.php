<?php

namespace App\Controllers\Docente;

use App\Controllers\BaseController;
use App\Models\CursosInicioModel;
use App\Models\CursoUsuarioModel;
use App\Models\SubtemaModel;
use App\Models\TemaModel;

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
    public function verCurso($idCurso)
    {
        $temaModel = new TemaModel();
        $cursoModel = new CursosInicioModel();

        $curso = $cursoModel->find($idCurso);
        
        $temas = $temaModel->where('idCurso', $idCurso)->findAll();

        return view('docente/misCursos/verCurso', ['curso' => $curso, 'temas' => $temas]);
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

        return view('docente/misCursos/verTema', ['tema' => $tema, 'subtemas' => $subtemas]);
    }
    public function verSubtema($idSubtema)
    {
        $subtemaModel = new SubtemaModel();

        $subtema = $subtemaModel->find($idSubtema);

        if (!$subtema) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("No se encontró el subtema con ID: " . $idSubtema);
        }

        return view('docente/misCursos/verSubtema', ['subtema' => $subtema]);
    }
}

