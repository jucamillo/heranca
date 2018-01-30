<?php
require_once 'funcionario.php';
class secretaria extends funcionario
{
  public $ramal;
      function mostraDados(){
        parent::mostraDados();
        echo "Ramal: $this->ramal" . PHP_EOL;
      }
}
