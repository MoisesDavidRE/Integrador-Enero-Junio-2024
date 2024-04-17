<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;

class CursosController extends BaseController
{
    public function index()
    {
        return view('admin/cursos/index');
    }
}
