<?php 

namespace Griff;

use Symfony\Component\HttpFoundation\Request;

class Core_Controller
{
    protected $model;

    public function __construct() {
        $this->set_model();
    }

    private function set_model() {
        $model = str_replace('Controller', 'Model', get_class($this));
        $this->model = new $model;
    }
}
