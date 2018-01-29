<?php
require 'gerente.php';
require 'secretaria.php';


$gerente = new gerente();
$gerente->nome = "Maria";
$gerente->matricula = 56;
$gerente->salario = 3000;
$gerente->senha = 1234;

echo "---------------Gerente" . PHP_EOL;
echo "Nome: $gerente->nome" . PHP_EOL;
echo "Matricula: $gerente->matricula" . PHP_EOL;
echo "Salário: $gerente->salario" . PHP_EOL;
echo "Senha: $gerente->senha" . PHP_EOL;




$secretaria = new secretaria();
$secretaria->nome = "Jonas";
$secretaria->matricula = 2;
$secretaria->salario = 1500;
$secretaria->ramal = 56;

echo "---------------Secretario" . PHP_EOL;
echo "Nome: $secretaria->nome" . PHP_EOL;
echo "Matricula: $secretaria->matricula" . PHP_EOL;
echo "Salário: $secretaria->salario" . PHP_EOL;
echo "Ramal: $secretaria->ramal" . PHP_EOL;

 ?>
