<?php
require_once 'funcionario.php';
class telefonista extends funcionario
{
  public $estacao;

    function mostraDados(){
      parent::mostraDados();
      echo "Estacao: $this->estacao" . PHP_EOL;
    }
}
