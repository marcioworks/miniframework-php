<?php
namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action {

    public function index(){

        $conn = Connection::getDb();

        $produto = new Produto($conn);
        $produtos = $produto->getProdutos();
        
        $this->view->dados = $produtos;
        $this->render('index','layout1');
    }

    public function sobreNos(){

        $conn = Connection::getDb();

        $info = new Info($conn);
        $informacoes = $info->getinfo();
        
        $this->view->dados = $informacoes;
        
        $this->render('sobreNos','layout1');
    }
  
}
?>