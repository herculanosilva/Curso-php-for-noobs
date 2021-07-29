Um script PHP é executado no servidor e o resultado HTML simples é enviado de volta ao navegador.

- Sintaxe básica do PHP

    Um script PHP pode ser colocado em qualquer lugar do documento.

    Um script PHP começa com "<?" Php e termina com "?>":

<? php // o código PHP vai aqui ?>

As instruções PHP terminam com um ponto e vírgula (;)


<!DOCTYPE html>
<html>
<body>

<h1>Minha primeira página PHP</h1>

<?php
echo "Hello World!";
?>

</body>
</html>

PHP é Case Sensitivity entretanto palavras-chave (por exemplo, if, else, while, echo, etc.), classes, funções e funções definidas pelo usuário não diferenciam maiúsculas de minúsculas.

No exemplo abaixo, todas as três declarações de eco abaixo são iguais e legais:

<!DOCTYPE html>
<html>
<body>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

</body>
</html>

No entanto; todos os nomes de variáveis ​​diferenciam maiúsculas de minúsculas!

Veja o exemplo abaixo; apenas a primeira instrução exibirá o valor da variável $ color! Isso ocorre porque $ color, $ COLOR e $ coLOR são tratados como três variáveis ​​diferentes:

    <!DOCTYPE html>
<html>
<body>

<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

</body>
</html>