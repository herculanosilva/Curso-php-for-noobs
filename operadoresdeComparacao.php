<!-- Operadores PHP

Operadores são usados ​​para realizar operações em variáveis ​​e valores.

Operadores de comparação

Operadores de matriz
Operadores lógicos
Operadores de execução -->

Os operadores de comparação PHP são usados ​​para comparar dois valores (número ou string):

<!-- 

==  |   Igual       |   $x == $y    |   Retorna verdadeiro se $ x for igual a $ y
=== |   Idêntico    |   $x === $y   |   Retorna verdadeiro se $ x for igual a $ y e eles forem do mesmo tipo
!=  |   Não igual   |   $x != $y    |   Retorna verdadeiro se $ x não for igual a $ y
<>  |   Não igual   |   $x <> $y	|   Retorna verdadeiro se $ x não for igual a $ y
!== |   Não idêntico|   $x !== $y   |   Retorna verdadeiro se $ x não for igual a $ y ou se eles não forem do mesmo tipo
>   |   Maior que   |   $x > $y     |   Retorna verdadeiro se $ x for maior que $ y
<   |   Menor que   |   $x < $y     |   Retorna verdadeiro se $ x for menor que $ y
>=  |   Maior que ou igual a    |   $x >= $y    |   Retorna verdadeiro se $ x for maior ou igual a $ y
<=  |   Menor que ou igual a    |   $x >= $y    |   Retorna verdadeiro se $ x for menor ou igual a $ y
<=> |   Spaceship   |   $x <=> $y   |   Retorna um número inteiro menor, igual ou maior que zero, dependendo se $ x for menor, igual ou maior que $ y. 

-->
<br>
<br>
<?php
//Operador de Igual ==
var_dump(value: 1 == 1);

//Operador de Idêntico ===
var_dump(value: 1 === '1');

//Operador de Não igual !=
var_dump(value: 1 != 1);

//Operador de Não igual <>
var_dump(value: 1 <> 1);

//Operador de Não idêntico !==
var_dump(value: '1' !== 1);

//Operador de Maior que >
var_dump(value: 2 > 1);

//Operador de Menor que <
var_dump(value: 1 > 2);

//Operador de Maior que ou igual a >=
var_dump(value: 0 >= 0);


//Operador de Menor que ou igual a <=
var_dump(value: 5 <= 10);

//Operador de Spaceship <=>
var_dump(value: 10 <=> 2);

?>

