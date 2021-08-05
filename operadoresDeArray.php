Operadores PHP

Operadores são usados ​​para realizar operações em variáveis ​​e valores.

Operadores de array
<br>
<br>
Os operadores de array são usados ​​para comparar arrays.
<!-- 
+   |   União           |   $x + $y     |   União de $ x e $ y
==  |   Igualdade       |   $x == $y    |   Retorna verdadeiro se $ x e $ y tiverem os mesmos pares de chave / valor
=== |   Identidade      |   $x === $y   |   Retorna verdadeiro se $ x e $ y tiverem os mesmos pares de chave / valor na mesma ordem e dos mesmos tipos
!=  |   Desigualdade    |   $x != $y    |   Retorna verdadeiro se $ x não for igual a $ y
<>  |   Desigualdade    |   $x <> $y    |   Retorna verdadeiro se $ x não for igual a $ y
!== |   Não-Identidade  |   $x !== $y   |   Retorna verdadeiro se $ x não for idêntico a $ y -->



<?php
$user = [
    'name' => 'herculano',
    'age' => 00
];

$workplace = [
    'companyName' => 'Compare Distribuidora',
    'role' => 'Developer'
];

$all = $user + $workplace;

print_r($all);
?>
<br>
<br>