<?php 

namespace Griff;

class Dashboard_Controller extends Core_Controller
{

    public function index() {
        return $this->app['twig']->render('dashboard.html.twig');
    }

}
