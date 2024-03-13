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
        $this->usuario = new UsuarioModel();
    }


    public function index()
    {
        $usuarios = $this->usuario->findAll();


        $data = [
            'usuarios' => $usuarios,
        ];

        return view('admin/usuarios/index', $data);
    }


    public function show($id = null)
    {
        //
    }







    /*
    public function create()
    {

        $data = [
            'perfil' => $this->request->getPost('perfil'),
            'identificador' => $this->request->getPost('identificador'),
            'nombre' => $this->request->getPost('nombre'),
            'apaterno' => $this->request->getPost('apaterno'),
            'amaterno' => $this->request->getPost('amaterno'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'sexo' => $this->request->getPost('sexo'),
            'status' => $this->request->getPost('status'),
            'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento')
        ];


        $rules = [
            'identificador' => 'required|is_unique[usuarios.identificador]',
            'password'      => 'required|min_length[8]|max_length[30]',
            'email'         => 'required|valid_email|callback_check_domain',
        ];

        $errors = [
            'email' => [
                'revisarDominio' => 'El correo electrónico debe ser del dominio institucional teziutlan.tecnm.mx.',
            ],
        ];

        if (!$this->validate($rules, $errors)) {

            return redirect()->to('/admin/usuarios/new')->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->usuario->insert($data);

        return redirect()->to('/admin/usuarios')->with('success', 'Usuario creado exitosamente.');
    }


    public function check_domain($email)
    {
        $dominioPermitido = 'teziutlan.tecnm.mx';
        $dominio = substr(strrchr($email, "@"), 1);
        return $dominio === $dominioPermitido;
    }
    */





    /*
    public function create()
    {

        $oldData = $this->request->getPost();

        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'identificador' => 'required|is_unique[usuarios.identificador]',
                'password'      => 'required|min_length[8]|max_length[30]'
            ];


            if ($this->validate($validationRules)) {
                $perfil = $this->request->getPost('perfil');
                $identificador = $this->request->getPost('identificador');
                $nombre = $this->request->getPost('nombre');
                $apaterno = $this->request->getPost('apaterno');
                $amaterno = $this->request->getPost('amaterno');
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');
                $sexo = $this->request->getPost('sexo');
                $status = $this->request->getPost('status');
                $fecha_nacimiento = $this->request->getPost('fecha_nacimiento');

                $allowedDomain = 'teziutlan.tecnm.mx';
                if (strpos($email, '@' . $allowedDomain) === false) {
                    return redirect()->to('/admin/usuarios/new')->with('error', 'El correo electrónico debe ser del dominio institucional teziutlan.tecnm.mx');
                }
                
                $emailCorrecto = $email;




                $this->usuario->save([
                    'perfil' => $perfil,
                    'identificador' => $identificador,
                    'nombre' => $nombre,
                    'apaterno' => $apaterno,
                    'amaterno' => $amaterno,
                    'email' => $emailCorrecto,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'sexo' => $sexo,
                    'status'    => $status,
                    'fecha_nacimiento' => $fecha_nacimiento
                ]);

                return redirect()->to('/admin/usuarios')->withInput()->with('success', 'Usuario registrada exitosamente.');
            } 

    */



            /* 
            else {
                
                $data = [
                    'usuarios'  => $this->usuario->findAll(),
                    'perfiles'  => $this->perfil->findAll(),
                    'validation' => isset($this->validator) ? $this->validator : null,
                    'oldData' => isset($oldData) ? $oldData : null,
                    'stayInCreateModal' => true,
                ];
                return view('admin/usuarios/index', $data);
            }
            */


    /*
        }

        $data = [
            'usuarios'  => $this->usuario->findAll(),
            'perfiles'  => $this->perfil->findAll(),
            'validation' => isset($this->validator) ? $this->validator : null,
            'oldData' => isset($oldData) ? $oldData : null,
            'stayInCreateModal' => true,
        ];

        return view('admin/usuarios/index', $data);
        // return redirect()->to('admin/usuarios', $data);
    }

    */



    /*
    public function create()
    {
        if ($this->request->getMethod() === 'post' && $this->validate([
                'identificador' => 'required|is_unique[usuarios.identificador]',
                'password'      => 'required|min_length[8]|max_length[30]'
            ])) {
            $this->usuario->save([
                'perfil' => $this->request->getVar('perfil'),
                'identificador' => $this->request->getVar('identificador'),
                'nombre' => $this->request->getVar('nombre'),
                'apaterno' => $this->request->getVar('apaterno'),
                'amaterno' => $this->request->getVar('amaterno'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'sexo' => $this->request->getVar('sexo'),
                'status'    => $this->request->getVar('status'),
                'fecha_nacimiento' => $this->request->getVar('fecha_nacimiento')
            ]);

            return redirect()->to('/admin/usuarios');
        }

        // return view('admin/usuarios/index');


        $data = [
            'usuarios'  => $this->usuario->findAll(),
            'perfiles'  => $this->perfil->findAll()
        ];

        return redirect()->to('/admin/usuarios', $data);
    }
    */



    public function new()
    {

        return view('admin/usuarios/create');
    }


    public function create()
    {
        $data = [
            'perfil' => $this->request->getVar('perfil'),
            'identificador' => $this->request->getVar('identificador'),
            'nombre' => $this->request->getVar('nombre'),
            'apaterno' => $this->request->getVar('apaterno'),
            'amaterno' => $this->request->getVar('amaterno'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'sexo' => $this->request->getVar('sexo'),
            'status'    => $this->request->getVar('status'),
            'fecha_nacimiento' => $this->request->getVar('fecha_nacimiento')
        ];

        $rules = [
            'identificador' => 'required|is_unique[usuarios.identificador]',
            'password'      => 'required|min_length[8]|max_length[30]',
            'email'    => 'required|valid_email'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/admin/usuarios/new')->withInput()->with('errors', $this->validator->getErrors());
        }

        $allowedDomain = 'teziutlan.tecnm.mx';
        $emailDomain = explode('@', $data['email'])[1];

        if ($emailDomain !== $allowedDomain) {
            return redirect()->to('/admin/usuarios/new')->withInput()->with('error', 'El correo electrónico debe ser del dominio institucional.');
        }

        $this->usuario->insert($data);

        return redirect()->to('/admin/usuarios')->with('success', 'Usuario creado exitosamente.');
    }
    


/*
    public function create()
    {
        $usuario = new UsuarioModel();

        $data = [
            'perfil' => $this->request->getVar('perfil'),
            'identificador' => $this->request->getVar('identificador'),
            'nombre' => $this->request->getVar('nombre'),
            'apaterno' => $this->request->getVar('apaterno'),
            'amaterno' => $this->request->getVar('amaterno'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'sexo' => $this->request->getVar('sexo'),
            'status'    => $this->request->getVar('status'),
            'fecha_nacimiento' => $this->request->getVar('fecha_nacimiento')
        ];

        $rules = [
            'identificador' => 'required|is_unique[usuarios.identificador]',
            'password'      => 'required|min_length[8]|max_length[30]'
        ];

        if ($this->validate($rules)) {
            $usuario->insert($data);
            return redirect()->to(site_url('/admin/usuarios'));
            session()->setFlashdata("success", "Usuario registrado con éxito");
        } else {
            $data['usernameDuplicado'] = lang('El nombre de usuario ya se encuentra registrado.');
            $data['emailDuplicado'] = lang('El e-mail ya se encuentra registrado.');
            $data['usuarios'] = $this->usuario->findAll();
            $data['perfiles'] = $this->perfil->findAll();
            return view('admin/usuarios/index', $data);
        }

    }
    */





    public function edit($id = null)
    {
        $usuario = new UsuarioModel();
        $data['usuario'] = $usuario->find($id);

        return view('admin/usuarios/edit', $data);
    }


    public function update($id = null)
    {
        $usuario = new UsuarioModel();
        $data = [
            'rol' => $this->request->getVar('rol'),
            'nombre' => $this->request->getVar('nombre'),
            'apaterno' => $this->request->getVar('apaterno'),
            'amaterno' => $this->request->getVar('amaterno'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            // 'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'sexo' => $this->request->getVar('sexo'),
            'fechaNacimiento' => $this->request->getVar('fechaNacimiento'),
            'status' => $this->request->getVar('status'),
            'estatusDD' => $this->request->getVar('estatusDD'),
            'condicion' => $this->request->getVar('condicion'),
            'numHoras' => $this->request->getVar('numHoras')
        ];

        $usuario->update($id, $data);

        return redirect()->to('/admin/usuarios');
    }


    public function delete($id = null)
    {
        $usuario = new UsuarioModel();
        $usuario->delete($id);

        return redirect()->to('/admin/usuarios');
    }




    public function editPassword($id)
    {
        $data['usuario'] = $this->usuario->find($id);

        if (!$data['usuario']) {
            return redirect()->to('/admin/usuarios')->with('error', 'Usuario no encontrado.');
        }

        return view('admin/usuarios/editar_password', $data);
    }


    public function updatePassword($id)
    {
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->find($id);

        if (!$usuario) {
            return redirect()->to('/admin/usuarios')->with('error', 'Usuario no encontrado.');
        }

        $newPassword = $this->request->getPost('new_password');
        if (empty($newPassword)) {
            return redirect()->back()->with('error', 'La nueva contraseña no debe estar vacía.');
        }

        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $usuarioModel->update($id, ['password' => $hashedPassword]);

        return redirect()->to('/admin/usuarios')->with('success', 'Contraseña actualizada exitosamente.');
    }




}
