<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;

class CursosController extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('isLoggedIn') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        return view('admin/cursos/index');
    }
}
