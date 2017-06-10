<?php 

namespace Griff;

use Symfony\Component\HttpFoundation\Request;

class Core_Controller
{
    protected $model;
    protected $request;
    protected $app;

    public function __construct(Request $request, Application &$app) {
        $this->set_model();
        $this->request = $request;
        $this->app = $app;
    }

    private function set_model() {
        $model = str_replace('Controller', 'Model', get_class($this));
        $this->model = new $model;
    }
}
