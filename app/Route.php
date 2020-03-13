<?php

namespace App;
use MF\Init\BootsTrap;

class Route extends BootsTrap {
   
    public function initRoutes(){
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        );
        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos',
            'controller' => 'IndexController',
            'action' => 'sobreNos'
        );

        $this->setRoutes($routes);
    }

   
}
