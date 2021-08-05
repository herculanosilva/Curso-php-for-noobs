<h2>Operadores PHP</h2>

<p>Operadores são usados ​​para realizar operações em variáveis ​​e valores.</p>

<p>Os operadores lógicos do PHP são usados ​​para combinar declarações condicionais.</p>

<!-- 
and |   E   |   $x and $y
or  |   OU  |   $x or $y
xor |   Ou* |   $x xor $y
&&  |   E   |   $x && $y
||  |   Ou  |   $x || $y
^   |   Não |   !$x 

* Ou Exclusivo 
-->
<br>
<?php
$x = true;
$y = false;

var_dump(value: $x and $y);
var_dump(value: $x && $y);
var_dump(value: $x or $y);
var_dump(value: $x || $y);
var_dump(value: $x xor $y);
var_dump(value: $x ^ $y);

?>