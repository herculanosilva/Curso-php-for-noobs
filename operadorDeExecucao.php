<h2>Operadores PHP</h2>

<p>Operadores são usados ​​para realizar operações em variáveis ​​e valores.</p>

<p>O PHP suporta um operador de execução: acentos graves (``).</p>

<!-- 
Note que não são aspas simples! O PHP tentará executar o 
conteúdo dentro dos acentos graves como um comando do shell;
a saída será retornada (isto é, ela não será simplesmente 
mostrada na tela; ela pode ser atribuída a uma variável). 
A utilização do operador acento grave é idêntica a da função shell_exec(). ,
-->


<?php
$output = `dir`;
echo "<pre>$output</pre>";
?>

<!-- O operador de execução fica desabilitado quando safe mode está ativo ou shell_exec() está desabilitado. -->

