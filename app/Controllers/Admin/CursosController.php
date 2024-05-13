<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;

class CursosController extends BaseController
{
    public function cursosInicio()
    {
        $model = model('CursosInicioModel');
        $data['cursos']=$model->findAll();
        return view('admin/cursos/cursosInicio',$data);
    }

    public function agregar()
    {
        $usersModel = model('UsersModel');
        $infoModel = model('InfoModel');
        $categoriasModel = model('CategoriaModel');
        $instructores = $usersModel->where('perfil',3)->orWhere('perfil',4)->findAll();
        $infoUsuario = $infoModel->findAll();

        $data=[
            'categorias' => $categoriasModel->findAll(),
            'instructores' => $instructores,
            'infoUsuario' => $infoUsuario
        ];
        $validation =  \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            return view('admin/cursos/agregar',$data);
        }

        $rules = [
            'instructor' => 'required',
            'nombre' => 'required',
            'duracion' => 'required',
            'estatus' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('template/main')
                .  view('content')
                .  view('admin/cursos/agregar',['validation' => $validation]);
        } else {
            if ($this->insert()) {
                return redirect('admin/cursos/cursosInicio');
            }
        }
    }

    public function insert()
    {
        $cursosInicioModel = model('CursosInicioModel');

        $data = [
            "instructor" => $_POST['instructor'],
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST['descripcion'],
            "fechaInicio" => $_POST['fechaInicio'],
            "fechaFin" => $_POST['fechaFin'],
            "objetivo" => $_POST['objetivo'],
            "duracion" => $_POST['duracion'],
            "estatus" => $_POST['estatus'],
            "ilustracion" => $_POST['ilustracion'],
            "idCategoria" => 3
        ];

        $cursosInicioModel->insert($data, true);
        return true;
    }

    public function delete($idCurso)
    {
        $cursosInicioModel = model('CursosInicioModel');
        $cursosInicioModel->delete($idCurso);
        return redirect('admin/cursos/cursosInicio');
    }

    public function editar($idCurso)
    {
        $cursosInicioModel = model('CursosInicioModel');
        $data['cursoInicio'] = $cursosInicioModel->find($idCurso);
        return view('template/main')
            .  view('content')
            .  view('admin/cursos/editar', $data);
    }

    public function update (){

        $cursosInicioModel = model('CursosInicioModel');

        $data = [
            "instructor" => $_POST['instructor'],
            "nombre" => $_POST['nombre'],
            "duracion" => $_POST['duracion'],
            "estatus" => $_POST['estatus']
        ];

        $cursosInicioModel->update($_POST['idCurso'],$data);
        return redirect('admin/cursos/cursosInicio');
    }
}