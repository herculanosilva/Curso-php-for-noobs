<h2>Estrutura de repetição - foreach</h2>

<p>O foreach - faz um loop em um bloco de código para cada elemento em uma matriz.</p>

<h3>Sintaxe</h3>

<p>
foreach ($array as $value) {
  código a ser executado;
}
</p>

<!-- Para cada iteração de loop, o valor do elemento atual do array é atribuído a $ value e o ponteiro do array é movido por um, até atingir o último elemento do array. -->

<h3>Exemplo</h3>

<p>O exemplo a seguir produzirá os valores da matriz fornecida ($ colors):</p>


<?php
$colors = array("red","green","blue","yellow");

foreach($colors as $value){
  echo "$value <br>";
}
?>