<?php declare(strict_types=1);

namespace App\Controllers;

use Lalaz\Http\Controller;

class QuemController extends Controller
{
    public function index($req, $res)
    {
        $res->render('quem-sou-eu/index', [
            'title' => 'Lalaz | Easy Development, Simple Deployment'
        ]);
    }
}
