<?php
require_once 'funcionario.php';

//extends = é um, ou seja o gerente é um funcionario
class gerente extends funcionario
{
  public $senha;
  function calculaBonificacao(){
    return parent::calculaBonificacao() + 1000;
  }


  function mostraDados(){
    parent::mostraDados();
    echo "Senha: $this->senha" . PHP_EOL;
  }
}
