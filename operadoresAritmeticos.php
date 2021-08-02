<!-- Operadores PHP

Operadores são usados ​​para realizar operações em variáveis ​​e valores.

Operadores aritméticos. -->

<!-- 

+	Adição        | $x + $y  | Soma de $x e $y
-	Subtração     | $x - $y	 | Diferença de $x e $y 
*	Multiplicação | $x * $y	 | Produto de $x e $y
/	Divisão	      | $x / $y	 | Quociente de $x e $y
%	Módulo        |	$x % $y	 | Restante de $x dividido por $y
**	Exponenciação | $x ** $y | Resultado de elevar $x ao $y 

-->

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