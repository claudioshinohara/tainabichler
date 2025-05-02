<?php declare(strict_types=1);

namespace App\Controllers;

use Lalaz\Http\Controller;

class PoliticaController extends Controller
{
    public function index($req, $res)
    {
        $res->render('politica-atendimento/index', [
            'title' => 'Lalaz | Easy Development, Simple Deployment'
        ]);
    }
}
