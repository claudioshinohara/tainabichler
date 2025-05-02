<?php declare(strict_types=1);

namespace App\Controllers;

use Lalaz\Http\Controller;

class DuvidasController extends Controller
{
    public function index($req, $res)
    {
        $res->render('duvidas/index', [
            'title' => 'Lalaz | Easy Development, Simple Deployment'
        ]);
    }
}
