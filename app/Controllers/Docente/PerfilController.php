<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PerfilController extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('logged_in') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        return view('admin/perfil/index');
    }
}
