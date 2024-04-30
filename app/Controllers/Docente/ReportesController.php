<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use TCPDF;

require ('TCPDF/tcpdf.php');
class ReportesController extends BaseController
{
    protected $usuario;
    protected $infoModel;

    public function __construct()
    {
        $this->usuario = model('UsersModel');
        $this->infoModel = model('InfoModel');
    }

    public function index()
    {
        $session = session();
        if ($session->get('logged_in') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }

        $usersModel = model('UsersModel');
        $usuarios = $usersModel->where('perfil', 2)->findAll();

        $infoModel = model('InfoModel');
        $informacion = [];

        foreach ($usuarios as $usuario) {
            $infoUsuario = $infoModel->where('id_Usuario', $usuario->id)->findAll();
            $informacion[$usuario->id] = $infoUsuario;

            $usuario->created_at = date('Y', strtotime($usuario->created_at));
            $usuario->status = ($usuario->status == 1) ? 'Activo' : 'Inactivo';
        }


        $data = [
            'usuarios' => $usuarios,
            'informacion' => $informacion,
        ];


        return view('admin/reportes/Alumnos', $data);
    }

    public function generarPDF()
    {
        $session = session();
        if ($session->get('logged_in') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $usuarios = $this->usuario->where('perfil', 2)->findAll();
        $informacion = [];

        foreach ($usuarios as $usuario) {
            $infoUsuario = $this->infoModel->where('id_Usuario', $usuario->id)->findAll();
            $informacion[$usuario->id] = $infoUsuario;

            $usuario->created_at = date('Y', strtotime($usuario->created_at));
            $usuario->status = ($usuario->status == 1) ? 'Activo' : 'Inactivo';
        }
        $data = [
            'usuarios' => $usuarios,
            'informacion' => $informacion,
        ];
        $html = '<br><br><br><br>';

        $html .= view('admin/reportes/alumnos_pdf', $data);

        $pdf = new TCPDF();

        $pdf->SetTitle('Lista de Alumnos');
        $pdf->setPrintHeader(true);
        // $pdf->setPrintFooter(true);
        $pdf->AddPage('P', 'LETTER', '', '', 30, 30);

        $imageFile = FCPATH . 'img\Logo_Upn_Oficial.JPG';
        $pdf->Image($imageFile, 20, 15, 20, 0, 'JPG');

        $pdf->writeHTML($html, true, false, true, false, '');

        $pdf->SetFont('helvetica', '', 9);

        // pie de página
        $pdf->SetY(255);
        $pdf->SetFont('helvetica', 'I', 8);
        $pdf->Cell(0, 0, 'Carretera al Ajusco núm. 24, Col. Héroes de Padierna, C.P. 14200, Delegación Tlalpan, México, D.F., Tel.: (55) 56309700 www.upn.mx', 0, false, 'C');

        $pdf->Output('lista_alumnos.pdf', 'I');
        exit();
    }

    public function docentes()
    {
        $session = session();
        if ($session->get('logged_in') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $usersModel = model('UsersModel');
        $usuarios = $usersModel->whereIn('perfil', [3, 4])->findAll();

        $InfoModel = model('InfoModel');
        $informacion = [];

        foreach ($usuarios as $usuario) {
            $infoUsuario = $InfoModel->where('id_Usuario', $usuario->id)->findAll();

            $informacion[$usuario->id] = $infoUsuario;

            $usuario->created_at = date('Y', strtotime($usuario->created_at));
            $usuario->status = ($usuario->status == 1) ? 'Activo' : 'Inactivo';

        }

        $data = [
            'usuarios' => $usuarios,
            'informacion' => $informacion,
        ];


        return view('admin/reportes/docentes', $data);
    }
    public function generarPDFDocentes()
    {
        $session = session();
        if ($session->get('logged_in') != TRUE || $session->get('perfil') != '1') {
            $session->destroy();
            return redirect('/');
        }
        $usuarios = $this->usuario->whereIn('perfil', [1, 3, 4, 5])->findAll();
        $informacion = [];

        foreach ($usuarios as $usuario) {
            $infoUsuario = $this->infoModel->where('id_Usuario', $usuario->id)->findAll();
            $informacion[$usuario->id] = $infoUsuario;

            $usuario->created_at = date('Y', strtotime($usuario->created_at));
            $usuario->status = ($usuario->status == 1) ? 'Activo' : 'Inactivo';
        }

        $data = [
            'usuarios' => $usuarios,
            'informacion' => $informacion,
        ];

        $html = '<br><br><br><br>';

        $html .= view('admin/reportes/docentes_pdf', $data);


        $pdf = new TCPDF();

        $pdf->SetTitle('Lista de Docentes');
        $pdf->AddPage('P', 'LETTER', '', '', 30, 30);

        $imageFile = FCPATH . 'img/OIP.jpeg';
        $pdf->Image($imageFile, 20, 15, 20, 0, 'JPEG');

        $pdf->writeHTML($html, true, false, true, false, '');

        $pdf->SetFont('helvetica', '', 9);

        // pie de página
        $pdf->SetY(250);
        $pdf->SetFont('helvetica', 'I', 8);
        $pdf->Cell(0, 0, 'Carretera al Ajusco núm. 24, Col. Héroes de Padierna, C.P. 14200, Delegación Tlalpan, México, D.F., Tel.: (55) 56309700 www.upn.mx', 0, false, 'C');

        $pdf->Output('lista_docentes.pdf', 'I');
        exit();
    }
}