<?php
require_once 'funcionario.php';

//extends = é um, ou seja o gerente é um funcionario
class gerente extends funcionario
{
  public $senha;
  function calculaBonificacao(){
    $this->bonificacao += ($this->salario * 0.6 + 100);
  }


  function mostraDados(){
    parent::mostraDados();
    echo "Senha: $this->senha" . PHP_EOL;
  }
}
