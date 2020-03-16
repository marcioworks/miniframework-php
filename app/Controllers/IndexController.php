<?php
namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action {

    public function index(){
        $this->view->dados = array('sofá','cama','mesa');
        $this->render('index','layout3');
    }

    public function sobreNos(){
        $this->view->dados = array('notebook','celular','tablet');
        $this->render('sobreNos','layout2');
    }
  
}
?>