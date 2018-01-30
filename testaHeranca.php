<?php
require 'gerente.php';
require 'secretaria.php';
require 'telefonista.php';



$gerente = new gerente();
$gerente->nome = "Lorem";
$gerente->matricula = 1;
$gerente->salario = 5000;
$gerente->senha = 5677;
echo "---------------Gerente" . PHP_EOL;
$gerente->mostraDados();




$secretaria = new secretaria();
$secretaria->nome = "Jonas";
$secretaria->matricula = 2;
$secretaria->salario = 1500;
$secretaria->ramal = 56;
echo "---------------Secretario" . PHP_EOL;
$secretaria->mostraDados();



$telefonista = new telefonista();
$telefonista->nome = "Lorem";
$telefonista->matricula = 88;
$telefonista->salario = 100;
$telefonista->estacao = 3;
echo "---------------Telefonista" . PHP_EOL;
$telefonista->mostraDados();









 ?>
