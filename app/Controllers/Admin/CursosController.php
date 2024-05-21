<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ContenidoModel;
use App\Models\CursosInicioModel;
use App\Models\SubtemaModel;
use App\Models\TemaModel;
use CodeIgniter\RESTful\ResourceController;

class CursosController extends BaseController
{
    public function cursosInicio()
    {
        $model = model('CursosInicioModel');
        if (isset($_POST['search'])) {
            $search = $_POST['search'];
            $data['cursos'] = $model->like('nombre','%'.$search.'%')->findAll();
            
        } else {
            $data['cursos'] = $model->findAll();
        }
        return view('admin/cursos/cursosInicio', $data);
    }

    public function agregar()
    {
        $usersModel = model('UsersModel');
        $infoModel = model('InfoModel');
        $categoriasModel = model('CategoriaModel');
        $instructores = $usersModel->where('perfil', 3)->orWhere('perfil', 4)->findAll();
        $infoUsuario = $infoModel->findAll();

        $data = [
            'categorias' => $categoriasModel->findAll(),
            'instructores' => $instructores,
            'infoUsuario' => $infoUsuario
        ];

        $validation = \Config\Services::validation();

        if (strtolower($this->request->getMethod()) === 'get') {
            return view('admin/cursos/agregar', $data);
        }

        $rules = [
            'instructor' => [
                'rules' => 'required|is_not_unique[users.id]',
                'errors' => [
                    'required' => 'El campo instructor es obligatorio.',
                    'is_not_unique' => 'El instructor seleccionado no es válido.'
                ]
            ],
            'nombre' => [
                'rules' => 'required|min_length[3]|max_length[100]',
                'errors' => [
                    'required' => 'El nombre del curso es obligatorio.',
                    'min_length' => 'El nombre del curso debe tener al menos 3 caracteres.',
                    'max_length' => 'El nombre del curso no puede exceder los 100 caracteres.'
                ]
            ],
            'duracion' => [
                'rules' => 'required|in_list[1w,2w,3w,4w,5w,6w,7w,8w,9w,10w,11w,12w,13w,14w,15w,16w,17w]',
                'errors' => [
                    'required' => 'La duración del curso es obligatoria.',
                    'in_list' => 'La duración seleccionada no es válida.'
                ]
            ],
            'estatus' => [
                'rules' => 'required|in_list[Activo,Inactivo]',
                'errors' => [
                    'required' => 'El estatus del curso es obligatorio.',
                    'in_list' => 'El estatus seleccionado no es válido.'
                ]
            ],
            'fechaInicio' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => 'La fecha de inicio es obligatoria.',
                    'valid_date' => 'La fecha de inicio no es válida.'
                ]
            ],
            'fechaFin' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => 'La fecha de finalización es obligatoria.',
                    'valid_date' => 'La fecha de finalización no es válida.',

                ]
            ],
            'objetivo' => [
                'rules' => 'required|min_length[5]|max_length[255]',
                'errors' => [
                    'required' => 'El objetivo del curso es obligatorio.',
                    'min_length' => 'El objetivo del curso debe tener al menos 5 caracteres.',
                    'max_length' => 'El objetivo del curso no puede exceder los 255 caracteres.'
                ]
            ],
            'ilustracion' => [
                'rules' => 'required|valid_url',
                'errors' => [
                    'required' => 'La URL de la ilustración es obligatoria.',
                    'valid_url' => 'La URL de la ilustración no es válida.'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            $data['validation'] = $validation;
            return view('template/main')
                . view('content')
                . view('admin/cursos/agregar', $data);
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
            "idCategoria" => $_POST['idCategoria'],
            "visibilidad" => $_POST['visibilidad']
        ];

        $cursosInicioModel->insert($data, true);
        return redirect('admin/cursos');
    }

    public function delete($idCurso)
    {
        $cursosInicioModel = model('CursosInicioModel');
        $cursosInicioModel->delete($idCurso);
        return redirect('admin/cursos');
    }


    public function editar($idCurso)
    {
        $usersModel = model('UsersModel');
        $infoModel = model('InfoModel');
        $categoriasModel = model('CategoriaModel');
        $temaModel = new TemaModel();
        $temas = $temaModel->where('idCurso', $idCurso)->findAll();
        $instructores = $usersModel->where('perfil', 3)->orWhere('perfil', 4)->findAll();
        $infoUsuario = $infoModel->findAll();
        $cursosInicioModel = model('CursosInicioModel');

        $data = [
            'categorias' => $categoriasModel->findAll(),
            'instructores' => $instructores,
            'infoUsuario' => $infoUsuario,
            'temas' => $temas,
            'curso' => $cursosInicioModel->find($idCurso)
        ];

        $validation = \Config\Services::validation();

        if (strtolower($this->request->getMethod()) === 'get') {
            return view('admin/cursos/editar', $data);
        } elseif (strtolower($this->request->getMethod()) === 'post') {
            $rules = [
                'nombre' => 'required|min_length[3]|max_length[50]',
                'descripcion' => 'required',
                'fechaInicio' => 'required|valid_date',
                'fechaFin' => 'required|valid_date',
                'duracion' => 'required|in_list[1w,2w,3w,4w,5w,6w,7w,8w,9w,10w,11w,12w,13w,14w,15w,16w,17w]',
                'ilustracion' => 'required|valid_url',
            ];

            $validation->setRules($rules);

            if (!$validation->withRequest($this->request)->run()) {

                $data['validation'] = $validation;
                return view('admin/cursos/editar', $data);
            } else {
            }
        }
    }

    public function update()
    {

        $cursosInicioModel = model('CursosInicioModel');


        $data = [
            "instructor" => $this->request->getPost('instructor'),
            "nombre" => $this->request->getPost('nombre'),
            "duracion" => $this->request->getPost('duracion'),
            "descripcion" => $this->request->getPost('descripcion'),
            "estatus" => $this->request->getPost('estatus'),
            "fechaInicio" => $this->request->getPost('fechaInicio'),
            "fechaFin" => $this->request->getPost('fechaFin'),
            "objetivo" => $this->request->getPost('objetivo'),
            "ilustracion" => $this->request->getPost('ilustracion'),
            "idCategoria" => $this->request->getPost('idCategoria'),
            "visibilidad" => $this->request->getPost('visibilidad')
        ];


        $rules = [
            'nombre' => 'required|min_length[3]|max_length[50]',
            'descripcion' => 'required',
            'fechaInicio' => 'required|valid_date',
            'fechaFin' => 'required|valid_date',
            'duracion' => 'required|in_list[1w,2w,3w,4w,5w,6w,7w,8w,9w,10w,11w,12w,13w,14w,15w,16w,17w]',
            'ilustracion' => 'required|valid_url',
        ];

        $validation = \Config\Services::validation();
        $validation->setRules($rules);

        if (!$validation->withRequest($this->request)->run()) {

            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $cursosInicioModel->update($this->request->getPost('idCurso'), $data);
        return redirect('admin/cursos');
    }



    public function nuevoTema($idCurso)
    {
        $data = [
            'curso' => $idCurso
        ];
        return view('admin/cursos/agregarTema', $data);
    }

    public function insertarTema()
    {
        $temaModel = new TemaModel();
        $data = [
            "nombre" => $_POST['nombre'],
            "idCurso" => $_POST['idCurso'],
            "descripcion" => $_POST['descripcion'],
            "ilustracion" => $_POST['ilustracion']
        ];
        $temaModel->insert($data, true);
        $usersModel = model('UsersModel');
        $infoModel = model('InfoModel');
        $categoriasModel = model('CategoriaModel');
        $temaModel = new TemaModel();
        $temas = $temaModel->where('idCurso', $_POST['idCurso'])->findAll();
        $instructores = $usersModel->where('perfil', 3)->orWhere('perfil', 4)->findAll();
        $infoUsuario = $infoModel->findAll();
        $cursosInicioModel = model('CursosInicioModel');

        $dataC = [
            'categorias' => $categoriasModel->findAll(),
            'instructores' => $instructores,
            'infoUsuario' => $infoUsuario,
            'temas' => $temas,
            'curso' => $cursosInicioModel->find($_POST['idCurso'])
        ];
        return view('admin/cursos/editar', $dataC);
    }

    public function mostrarTema($idTema)
    {
        $temasModel = new TemaModel();
        $subtemaModel = new SubtemaModel();
        $tema = $temasModel->find($idTema);

        $data = [
            'tema' => $tema,
            'subtemas' => $subtemaModel->where('idTema', $idTema)->findAll()
        ];
        return view('admin/cursos/mostrarTema', $data);
    }

    public function nuevoSubtema($idTema)
    {
        $data = [
            'tema' => $idTema
        ];
        return view('admin/cursos/agregarSubtema', $data);
    }

    public function insertarSubtema()
    {
        $subtemaModel = new SubtemaModel();
        $temaModel = new TemaModel();
        $data = [
            "nombre" => $_POST['nombre'],
            "idTema" => $_POST['idTema'],
            "descripcion" => $_POST['descripcion']
        ];
        $subtemaModel->insert($data, true);

        $dataS = [
            'tema' => $temaModel->find($_POST['idTema']),
            'subtemas' => $subtemaModel->where('idTema', $_POST['idTema'])->findAll()
        ];
        return view('admin/cursos/mostrarTema', $dataS);
    }

    public function mostrarSubtema($idSubtema)
    {
        $subtemasModel = new SubtemaModel();
        $subtema = $subtemasModel->find($idSubtema);
        $data = [
            'subtema' => $subtema,
        ];
        return view('admin/cursos/mostrarSubtema', $data);
    }

    public function mostrarContenido($idSubtema)
    {
        $subtemasModel = new SubtemaModel();
        $subtema = $subtemasModel->where('idSubtema', $idSubtema);

        $data = [
            'subtema' => $subtema
        ];
        return view('admin/cursos/mostrarContenido', $data);
    }
}
