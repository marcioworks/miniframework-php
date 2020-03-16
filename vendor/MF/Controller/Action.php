<?php
namespace MF\Controller;

abstract class Action {
    protected $view;

    public function __constructor(){
        $this->view = new \stdClass();
    }

    protected function render($view){
        $classeAtual = \get_class($this);
        $classeAtual = \str_replace('App\\Controllers\\','',$classeAtual);
        $classeAtual = strtolower(\str_replace('Controller','',$classeAtual));
       

        require_once "../app/Views/".$classeAtual."/".$view.".phtml";
    }
}

?>