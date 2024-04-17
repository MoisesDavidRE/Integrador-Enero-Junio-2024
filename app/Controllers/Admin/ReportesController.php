<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ReportesController extends BaseController
{
    public function index()
    {
        return view ('admin/reportes/Alumnos');
    }

    public function docentes()
    {
        return view ('admin/reportes/Docentes');
    }
}
