<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

use App\Models\Produto;
use App\Models\Info;

class indexController extends Action
{
  public function index()
  {
    //$this->view->dados = ['Sofá', 'Cadeira', 'Cama'];
    //instancia da conexao
    //Instanciar modelo
    $produto = Container::getModel('Produto');
    $produtos = $produto->getProdutos();

    $this->view->dados = $produtos;

    $this->render('index', 'layout1');
  }

  public function sobreNos()
  {
    $info = Container::getModel('Info');
    $infos = $info->getInfo();
    $this->view->dados = $infos;
    $this->render('sobreNos', 'layout1');
  }
}
