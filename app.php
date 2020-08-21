<?php

require 'Operacao.php';
require 'Calculadora.php';

$opEscolhida = readline ('Digite a operacao escolhida ');
$n1 = readline ('Digite o Primeiro numero ');
$n2 = readline ('Digite o Segundo numero ');

$op = new Operacao($opEscolhida, $n1, $n2);
$calculadora = new Calculadora($op);


$calculadora->acao();