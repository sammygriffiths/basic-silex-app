<?php 

namespace Griff;

use Symfony\Component\HttpFoundation\Request;

class Dashboard_Controller extends Core_Controller
{

    public function index(Request $request, Application $app) {
        return $app['twig']->render('dashboard.html.twig');
    }

}
