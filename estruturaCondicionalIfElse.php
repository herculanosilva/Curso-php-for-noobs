<h2>Estrutura Condicional - If/Else</h2>
<p>A instrução <b>IF</b> executa algum código se uma condição for verdadeira.</p>

<h3>Sintaxe</h3>

if (condicao) {
    código a ser executado;
}

<p>A instrução If...Else executa algum código se uma condição for verdadeira e outro código se essa condição for falsa.
</p>

    if (condicao) {
    código a ser executado;
} else {
    código a ser executado;
}
<br/>

<p>Saída "Olá mundo!" se o texto for igual a ola:</p>
<?php

$texto = "ola";

if ($texto == "ola") {
  echo "Olá mundo!";
}



?>
<p>Saída "Tenha um bom dia!" se a hora atual for inferior a 18, e "Tenha uma boa noite!" de outra forma:
</p>

<br>

<?php
$t = date("H");

if ($t > 18) {
  echo "Tenha um bom dia!";
} else {
  echo "Tenha uma boa noite!";
}
?>

<p>Saída "Tenha um bom dia!" se a hora atual for inferior a 12 e "Tenha um boa tarde!" se a hora atual for superior a 12. Caso contrário, será exibido "Tenha uma boa noite!":<p>

<?php

$t = date('H');

if ($t < 12) {
  echo "Tenha um bom dia!";
} elseif ($t >= 12 && $t <18) {
  echo "Tenha um boa tarde!";
} else {
  echo "Tenha uma boa noite!";
}
?>