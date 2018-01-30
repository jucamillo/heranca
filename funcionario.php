<?php
class funcionario
{
  public $matricula;
  public $nome;
  public $salario;
  //public $bonificacao;
  static public $percentualDoBonus = 0.01;
  function calculaBonificacao(){
    return $this->salario * 0.01 + 500;
  }
  function mostraDados(){
    echo "Nome: $this->nome" . PHP_EOL;
    echo "Matricula: $this->matricula" . PHP_EOL;
    echo "Salário: $this->salario" . PHP_EOL;

    echo "BONIFICACAO:" .  $this->calculaBonificacao() . PHP_EOL;
  }
}


 ?>
