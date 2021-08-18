<h2>Switch</h2>

<p>A instrução switch permite selecionar um dos muitos blocos de código a serem executados .
</p>

<h3>Sintaxe</h3>

<?php
$favcolor = "verde";

switch ($favcolor) {
  case "vermelha":
    echo "Sua cor favorita é vermelha!";
    break;
  case "azul":
    echo "Sua cor favorita é azul!";
    break;
  case "verde":
    echo "Sua cor favorita é verde!";
    break;
  default:
    echo "Sua cor favorita não é vermelho, azul ou verde!";
}
?>