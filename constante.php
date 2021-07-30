PHP Constants

As constantes são como variáveis, exceto que, uma vez definidas, não podem ser alteradas ou indefinidas.

Uma constante é um identificador (nome) para um valor simples. O valor não pode ser alterado durante o script.

Um nome de constante válido começa com uma letra ou sublinhado (sem o sinal $ antes do nome da constante).

Nota: Ao contrário das variáveis, as constantes são automaticamente globais em todo o script.

Crie uma constante de PHP

Para criar uma constante, use a função define ().

Sintaxe

    define(name, value, case-insensitive)

Parâmetros:

nome: especifica o nome da constante 
valor: especifica o valor da constante
case-insensitive: especifica se o nome da constante deve ser indiferente a maiúsculas e minúsculas.

Exemplo:
<?php
// case-sensitive constant name
    define("SAUDACOES", "Bem vindo!");
    echo SAUDACOES;
?>

<?php
// case-insensitive constant name
    define("SAUDACOES", "Welcome to W3Schools.com!", true);
    echo saudacoes;
?> 
