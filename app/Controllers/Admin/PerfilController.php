<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PerfilController extends BaseController
{
    public function index()
    {
        return view('admin/perfil/index');
    }
}
