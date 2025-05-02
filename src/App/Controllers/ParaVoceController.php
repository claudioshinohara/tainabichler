<?php declare(strict_types=1);

namespace App\Controllers;

use Lalaz\Http\Controller;

class ParaVoceController extends Controller
{
    public function index($req, $res)
    {
        $res->render('para-voce/index', [
            'title' => 'Lalaz | Easy Development, Simple Deployment'
        ]);
    }
}
