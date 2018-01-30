<?php
class funcionario
{
  public $matricula;
  public $nome;
  public $salario;
  public $bonificacao;
  function calculaBonificacao(){
    $this->bonificacao += ($this->salario/10);
  }
}


 ?>
