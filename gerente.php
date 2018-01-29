<?php
require_once 'funcionario.php';

//extends = é um, ou seja o gerente é um funcionario
class gerente extends funcionario
{
  public $senha;
}
