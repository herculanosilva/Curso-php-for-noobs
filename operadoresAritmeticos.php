<!-- Operadores PHP

Operadores são usados ​​para realizar operações em variáveis ​​e valores.

Operadores aritméticos. -->

<?php

//SOMA
$itemA = 10;
$itemB = 20;
$itemC = ($itemA + $itemB + 10) + 10;

echo $itemC . PHP_EOL;

//SUBTRAÇÃO
$itemA = 20;
$itemB = 10;
$itemC = ($itemA - $itemB);

echo $itemC . PHP_EOL;

//DIVISÃO
$itemA = 4;
$itemB = 2;
$itemC = ($itemA / $itemB);

echo $itemC . PHP_EOL;

//MULTIPLICAÇÃO
$itemA = 10;
$itemB = 10;
$itemC = ($itemA * $itemB);

echo $itemC . PHP_EOL;


//MODO
$itemA = 20;
$itemB = 2;
$itemC = ($itemA % $itemB);

echo $itemC . PHP_EOL;
?>