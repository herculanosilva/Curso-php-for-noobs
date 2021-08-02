<!-- Operadores PHP

Operadores são usados ​​para realizar operações em variáveis ​​e valores.

Operadores de atribuição

Operadores de comparação
Operadores de matriz
Operadores lógicos
Operadores de execução -->

<!--
x = y	|   x = y      |    O operando esquerdo é definido com o valor da expressão à direita
x += y	|   x = x + y  |    Adição
x -= y	|   x = x - y  |    Subtração
x *= y	|   x = x * y  |    Multiplicação
x /= y	|   x = x / y  |    Divisão
x %= y	|   x = x % y  |    Módulo
-->

<?php
//Adição
$itemA = 50;
$itemA += 25;

echo $itemA . PHP_EOL;
//Subtração
$itemA -= 25;
echo $itemA . PHP_EOL;

//Divisão
$itemA /= 2;
echo $itemA . PHP_EOL;

//Multiplicação
$itemA *= 3;
echo $itemA . PHP_EOL;


?>