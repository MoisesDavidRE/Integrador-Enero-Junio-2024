<?php

namespace App\Controllers\Admin;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UsuarioModel;

class UsuarioController extends ResourceController
{
    private $usuario;
    private $perfil;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        $this->usuario = model('UsuarioModel');
    }


    public function index()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $usersModel = model('UsersModel');
        $usuarios = $usersModel->where('perfil', 2)->findAll();

        $InfoModel = model('InfoModel');
        $informacion = [];

        foreach ($usuarios as $usuario) {
            // Modificar la fecha para obtener solo el año
            $usuario->created_at = date('Y', strtotime($usuario->created_at));
            $usuario->status = ($usuario->status == 1) ? 'Activo' : 'Inactivo';
            $infoUsuario = $InfoModel->where('id_Usuario', $usuario->id)->findAll();
            $informacion[$usuario->id] = $infoUsuario;
        }

        $data = [
            'usuarios' => $usuarios,
            'informacion' => $informacion,
        ];

        return view('admin/usuarios/alumnos', $data);
    }


    public function personal()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $usersModel = model('UsersModel');
        $usuarios = $usersModel->whereIn('perfil', [1, 3, 4])->findAll();

        $InfoModel = model('InfoModel');
        $informacion = [];

        foreach ($usuarios as $usuario) {
            // Obtener la información de infousuario para cada usuario

            $usuario->created_at = date('Y', strtotime($usuario->created_at));
            $usuario->status = ($usuario->status == 1) ? 'Activo' : 'Inactivo';


            $infoUsuario = $InfoModel->where('id_Usuario', $usuario->id)->findAll();

            // Agregar la información obtenida al array de informacion
            $informacion[$usuario->id] = $infoUsuario;
        }

        $data = [
            'usuarios' => $usuarios,
            'informacion' => $informacion,
        ];


        return view('admin/usuarios/personal', $data);
    }

    public function editar($id)
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $usersModel = model('UsersModel');
        $infoModel = model('InfoModel');

        $usuario = $usersModel->find($id);
        $infoUsuario = $infoModel->where('id_Usuario', $id)->first();

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuario no encontrado.');
        }

        $data = [
            'usuario' => $usuario,
            'infoUsuario' => $infoUsuario
        ];

        return view('admin/usuarios/editar', $data);
    }

    public function actualizar($id)
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $usersModel = model('UsersModel');
        $infoModel = model('InfoModel');

        $userData = [
            'perfil' => $this->request->getPost('perfil'),
            'identificador' => $this->request->getPost('identificador'),
            'email' => $this->request->getPost('email'),
            'status' => $this->request->getPost('status')
        ];

        $infoData = [
            'nombre' => $this->request->getPost('nombre'),
            'apellidoPaterno' => $this->request->getPost('apellidoP'),
            'apellidoMaterno' => $this->request->getPost('apellidoM'),
            'telefono' => $this->request->getPost('telefono'),
            'sede' => $this->request->getPost('sede')
        ];

        $usersModel->update($id, $userData);
        $infoModel->update(['id_Usuario' => $id], $infoData);

        return redirect()->to(base_url('admin/usuarios/alumnos/' . $id))->with('success', 'Información actualizada correctamente.');
    }

    public function mostrar($id)
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $usersModel = model('UsersModel');
        $usuario = $usersModel->find($id);

        if ($usuario) {
            $infoModel = model('InfoModel');
            $infoUsuario = $infoModel->where('id_Usuario', $usuario->id)->first();

            if ($infoUsuario) {
                $data = [
                    'usuario' => $usuario,
                    'infoUsuario' => $infoUsuario,
                ];

                return view('admin/usuarios/mostrar', $data);
            } else {
                return redirect()->back()->with('error', 'No se encontró información personal del usuario.');
            }
        } else {
            return redirect()->back()->with('error', 'Usuario no encontrado.');
        }
    }
    public function eliminar($id)
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $db = db_connect();

        $db->query('SET FOREIGN_KEY_CHECKS=0');

        $db->table('infousuario')->where('id_Usuario', $id)->delete();

        $db->table('usuarios')->where('id', $id)->delete();

        $db->query('SET FOREIGN_KEY_CHECKS=1');

        return redirect()->to(base_url('admin/usuarios/alumnos'));
    }

    public function agregar()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('admin/usuarios/agregar');
        }

        $rules = [
            'identificador' => 'required',
            'perfil' => 'required',
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'telefono' => 'required',
            'sede' => 'required',
            'email' => 'required|valid_email',
            'password' => 'required|valid_password',
            'status' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('admin/usuarios/agregar', ['validation' => $validation]);
        }

        $this->insert();
    }

    public function insert()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $identificador = $this->request->getPost('identificador');
        $perfil = $this->request->getPost('perfil');
        $nombre = $this->request->getPost('nombre');
        $apellidoPaterno = $this->request->getPost('apellidoPaterno');
        $apellidoMaterno = $this->request->getPost('apellidoMaterno');
        $telefono = $this->request->getPost('telefono');
        $sede = $this->request->getPost('sede');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $status = $this->request->getPost('status');

        $usersModel = model('UsersModel');
        $infoModel = model('infoModel');

        $userData = [
            'identificador' => $identificador,
            'perfil' => $perfil,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'status' => $status
        ];
        $userId = $usersModel->insert($userData);

        if ($userId) {
            $infoData = [
                'id_Usuario' => $userId,
                'nombre' => $nombre,
                'apellidoPaterno' => $apellidoPaterno,
                'apellidoMaterno' => $apellidoMaterno,
                'telefono' => $telefono,
                'sede' => $sede
            ];
            $infoModel->insert($infoData);

            return redirect()->to(base_url('admin/usuarios/alumnos'))->with('success', 'Usuario agregado correctamente.');
        } else {
            return redirect()->to(base_url('admin/usuarios/personal'));
        }
    }


    // En tu controlador


    public function buscar()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }

        $usersModel = model('UsersModel');
        $infoModel = model('InfoModel');

        //Se verifica si se mandaron datos en el formulario de búsqueda
        if (isset($_GET['Campo']) && isset($_GET['Valor'])) {
            $campo = $_GET['Campo'];
            $valor = $_GET['Valor'];


            if ($campo == 'Nombre') {
                $data['nombres'] = $infoModel->like('nombre', $valor)
                    ->findAll();
                if (isset($data['nombres'][0])) {
                    $data['apellidoPaterno'] = $infoModel->where('apellidoPaterno', ($data['apellidoPaterno'][0]->apellidoPaterno))->findAll();
                    $data['apellidoMaterno'] = $infoModel->where('apellidoMaterno', ($data['apellidoMaterno'][0]->apellidoMaterno))->findAll();
                    $data['sede'] = $infoModel->where('sede', ($data['sede'][0]->sede))->findAll();
                } else {
                    $campo = 'Todo';
                }
            }

            if ($campo == 'Identificador') {
                $data['nombre'] = $infoModel->where('nombre', $valor)->findAll();
                $data['apellidoPaterno'] = $infoModel->find();
                $data['apellidoMaterno'] = $infoModel->findAll();

            }

            if ($campo == 'Todo') {
                $data['perfil'] = $usersModel->findAll();
                $data['identificador'] = $usersModel->find();
                $data['nombre'] = $infoModel->findAll();
                $data['apellidoPaterno'] = $infoModel->findAll();
                $data['apellidoMaterno'] = $infoModel->findAll();
            }

        } else {
            $campo =
                $valor =

                $data['perfil'] = $usersModel->findAll();
            $data['identificador'] = $usersModel->find();
            $data['nombre'] = $infoModel->findAll();
            $data['apellidoPaterno'] = $infoModel->findAll();
            $data['apellidoMaterno'] = $infoModel->findAll();
        }
        return
            view('admin/usuarios/alumnos', $data);
    }





    public function editarPersonal($id)
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $usersModel = model('UsersModel');
        $infoModel = model('InfoModel');

        $usuario = $usersModel->find($id);
        $infoUsuario = $infoModel->where('id_Usuario', $id)->first();

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuario no encontrado.');
        }

        $data = [
            'usuario' => $usuario,
            'infoUsuario' => $infoUsuario
        ];

        return view('admin/usuarios/editar', $data);
    }


    public function actualizarPersonal($id)
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $usersModel = model('UsersModel');
        $infoModel = model('InfoModel');

        $userData = [
            'identificador' => $this->request->getPost('identificador'),
            'email' => $this->request->getPost('email'),
            'status' => $this->request->getPost('status')
        ];

        $infoData = [
            'nombre' => $this->request->getPost('nombre'),
            'apellidoPaterno' => $this->request->getPost('apellidoP'),
            'apellidoMaterno' => $this->request->getPost('apellidoM'),
            'telefono' => $this->request->getPost('telefono'),
            'sede' => $this->request->getPost('sede')
        ];

        $usersModel->update($id, $userData);
        $infoModel->update(['id_Usuario' => $id], $infoData);

        return redirect()->to(base_url('admin/usuarios/personal/' . $id))->with('success', 'Información actualizada correctamente.');
    }



    public function mostrarPersonal($id)
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $usersModel = model('UsersModel');
        $usuario = $usersModel->find($id);

        if ($usuario) {
            $infoModel = model('InfoModel');
            $infoUsuario = $infoModel->where('id_Usuario', $usuario->id)->first();

            if ($infoUsuario) {
                $data = [
                    'usuario' => $usuario,
                    'infoUsuario' => $infoUsuario,
                ];

                return view('admin/usuarios/mostrarPersonal', $data);
            } else {
                return redirect()->back()->with('error', 'No se encontró información personal del usuario.');
            }
        } else {
            return redirect()->back()->with('error', 'Usuario no encontrado.');
        }
    }

    public function agregarPersonal()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('admin/usuarios/agregarPersonal');
        }

        $rules = [
            'identificador' => 'required',
            'perfil' => 'required',
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'telefono' => 'required',
            'sede' => 'required',
            'email' => 'required|valid_email',
            'password' => 'required|valid_password',
            'status' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('admin/usuarios/agregarPersonal', ['validation' => $validation]);
        }

        $this->insert();
    }

    public function insertPersonal()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $identificador = $this->request->getPost('identificador');
        $perfil = $this->request->getPost('perfil');
        $nombre = $this->request->getPost('nombre');
        $apellidoPaterno = $this->request->getPost('apellidoPaterno');
        $apellidoMaterno = $this->request->getPost('apellidoMaterno');
        $telefono = $this->request->getPost('telefono');
        $sede = $this->request->getPost('sede');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $status = $this->request->getPost('status');

        $usersModel = model('UsersModel');
        $infoModel = model('infoModel');

        $userData = [
            'identificador' => $identificador,
            'perfil' => $perfil,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'status' => $status
        ];
        $userId = $usersModel->insert($userData);

        if ($userId) {
            $infoData = [
                'id_Usuario' => $userId,
                'nombre' => $nombre,
                'apellidoPaterno' => $apellidoPaterno,
                'apellidoMaterno' => $apellidoMaterno,
                'telefono' => $telefono,
                'sede' => $sede
            ];
            $infoModel->insert($infoData);

            return redirect()->to(base_url('admin/usuarios/personal'))->with('success', 'Usuario agregado correctamente.');
        } else {
            return redirect()->to(base_url('admin/usuarios/alumnos'));
        }
    }

    public function eliminarPersonal($id)
    {
        $db = db_connect();

        $db->query('SET FOREIGN_KEY_CHECKS=0');

        $db->table('infousuario')->where('id_Usuario', $id)->delete();

        $db->table('usuarios')->where('id', $id)->delete();

        $db->query('SET FOREIGN_KEY_CHECKS=1');

        return redirect()->to(base_url('admin/usuarios/personal'));
    }

}
