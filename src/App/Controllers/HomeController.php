<?php declare(strict_types=1);

namespace App\Controllers;

use Lalaz\Http\Controller;

use App\Models\Entities\Product;

class HomeController extends Controller
{
    public function index($req, $res)
    {
        $res->render('home/index', [
            'title' => 'Lalaz | Easy Development, Simple Deployment'
        ]);

        $product = Product::build($req->body());

        if (!$product->save()) {
            return $res->render('home/index', [
                'title' => 'Lalaz | Easy Development, Simple Deployment',
                'product' => $product
            ]);
        }

        $res->redirect('/sucesso');
    }
}
