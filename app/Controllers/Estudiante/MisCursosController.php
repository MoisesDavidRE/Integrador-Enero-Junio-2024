<?php

namespace App\Controllers\Estudiante;

use App\Controllers\BaseController;
use App\Models\SubtemaModel;
use App\Models\ContenidoModel;

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

    public function subtema1()
    {
        $subtemaModel = new SubtemaModel();
        $subtemaData = $subtemaModel->where('idSubtema', 1)->first();
        $contenidoModel = new ContenidoModel();
        $contenidoData = $contenidoModel->where('idContenido', $subtemaData->idContenido)->first();
        $data = [
            'subtemaData' => $subtemaData,
            'contenidoData' => $contenidoData
        ];

        return view('estudiante/misCursos/subtema1', $data);
    }
    public function subtema2()
    {
        $subtemaModel = new SubtemaModel();
        $subtemaData = $subtemaModel->where('idSubtema', 2)->first();
        $contenidoModel = new ContenidoModel();
        $contenidoData = $contenidoModel->where('idContenido', $subtemaData->idContenido)->first();
        $data = [
            'subtemaData' => $subtemaData,
            'contenidoData' => $contenidoData
        ];
    
        return view('estudiante/misCursos/subtema2', $data);
    }
    
    public function subtema3()
    {
        return view ('estudiante/misCursos/subtema3');
    }
    public function subtema4()
    {
        return view ('estudiante/misCursos/subtema4');
    }
    public function evaluacion()
    {
        return view ('estudiante/misCursos/evaluacion');
    }
}
