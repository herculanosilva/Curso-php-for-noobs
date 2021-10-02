<h2>Estrutura de repetição - while</h2>

<p>O do...whileloop - faz um loop em um bloco de código uma vez e, em seguida, repete o loop enquanto a condição especificada for verdadeira.</p>

<!-- O do...whileloop sempre executará o bloco de código uma vez, verificará a condição e repetirá o loop enquanto a condição especificada for verdadeira. -->

<h3>Sintaxe</h3>

<p>
do {
    código a ser executado;
} while (condição é verdadeira);
</p>

<h3>Exemplo</h3>

<p>O exemplo abaixo primeiro define uma variável $ x para 1 ($ x = 1). Então, o loop do while escreverá alguma saída e, em seguida, incrementará a variável $ x com 1. Então a condição é verificada ($ x é menor ou igual a 5?), E o loop continuará a funcionar enquanto $ x é menor ou igual a 5:</p>

<?php
$x = 1;

do {
  echo "O número é: $x <br>";
  $x++;
} while ($x <= 5);
?>

<!-- Nota: Em um do...whileloop, a condição é testada APÓS a execução das instruções dentro do loop. Isso significa que o do...whileloop executará suas instruções pelo menos uma vez, mesmo se a condição for falsa. Veja o exemplo abaixo. -->

<p>Este exemplo define a variável $ x como 6, executa o loop e a condição é verificada :
</p>

<?php
$x = 6;

do {
  echo "O número é: $x <br>";
  $x++;
} while ($x <= 5);
?>