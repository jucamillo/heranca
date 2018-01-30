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
  function mostraDados(){
    echo "Nome: $this->nome" . PHP_EOL;
    echo "Matricula: $this->matricula" . PHP_EOL;
    echo "Salário: $this->salario" . PHP_EOL;
    $this->calculaBonificacao();
    echo "BONIFICACAO: $this->bonificacao" . PHP_EOL;
  }
}


 ?>
