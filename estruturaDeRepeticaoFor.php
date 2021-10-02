<h2>Estrutura de repetição - For</h2>
<p>O for faz um loop em um bloco de código um determinado número de vezes.</p>

<p>O forloop é usado quando você sabe com antecedência quantas vezes o script deve ser executado.</p>

<h3>Sintaxe</h3>
for (contador de inicialização; contador de teste; contador de incremento) {
    código a ser executado para cada iteração;
}

<h3>Parâmetros:</h3>

<p>contador de inicialização: inicializa o valor do contador de loop</p>
<p>contador de teste : avaliado para cada iteração do loop. Se for TRUE, o loop continua. Se for FALSO, o loop termina.</p>
<p>contador de incremento : aumenta o valor do contador de loop</p>
</p>

<h3>Exemplos</h3>
<p>O exemplo abaixo exibe os números de 0 a 10:</p>


<?php
for ($x = 0; $x <= 10; $x++) {
  echo "O número é : $x <br>";
}
?>