Tipos de dados PHP

Variáveis ​​podem armazenar dados de diferentes tipos, e diferentes tipos de dados podem fazer coisas diferentes.

PHP suporta os seguintes tipos de dados:

String
    Uma string é uma sequência de caracteres, como "Olá, mundo!".

    <?php
        $x = "Hello world!";
        $y = 'Hello world!';

        echo $x;
        echo "<br>";
        echo $y;
    ?>

Integer
    Um tipo de dados inteiro é um número não decimal entre -2.147.483.648 e 2.147.483.647.
    <?php
        $x = 5985;
        var_dump($x);
    ?>

Float (floating point numbers - also called double)
    É um número com uma vírgula decimal ou um número em forma exponencial.

    <?php
        $x = 10.365;
        var_dump($x);
    ?>
Boolean
    Um booleano representa dois estados possíveis: TRUE ou FALSE.

    <?php
        $x = true;
        $y = false;
    ?>

Array
    Uma matriz armazena vários valores em uma única variável.
    
    <?php
        $cars = array("Volvo","BMW","Toyota");
        var_dump($cars);
    ?>

Object
    Classes e objetos são os dois aspectos principais da programação orientada a objetos.
    Uma classe é um modelo para objetos e um objeto é uma instância de uma classe.

    Exemplo:
    Vamos supor que temos uma classe chamada Car. Um carro pode ter propriedades como modelo, cor, etc. Podemos definir variáveis ​​como $ modelo, $ cor e assim por diante, para conter os valores dessas propriedades.
    
    Quando os objetos individuais (Volvo, BMW, Toyota, etc.) são criados, eles herdam todas as propriedades e comportamentos da classe, mas cada objeto terá valores diferentes para as propriedades.

    Se você criar uma função __construct (), o PHP irá automaticamente chamar esta função quando você criar um objeto de uma classe.


    <?php
        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
                $this->color = $color;
                $this->model = $model;
            }
            
            public function message() {
                return "My car is a " . $this->color . " " . $this->model . "!";
            }
        }

        $myCar = new Car("black", "Volvo");
        echo $myCar -> message();

        echo "<br>";

        $myCar = new Car("red", "Toyota");
        echo $myCar -> message();
    ?>




NULL
    Nulo é um tipo de dado especial que pode ter apenas um valor: NULL.
    Uma variável do tipo de dados NULL é uma variável que não possui nenhum valor atribuído a ela.
    
    <?php
        $x = "Hello world!";
        $x = null;
        var_dump($x);
    ?>
Resource
    O tipo de recurso especial não é um tipo de dados real. É o armazenamento de uma referência a funções e recursos externos ao PHP.
    Um exemplo comum de uso do tipo de dados de recurso é uma chamada de banco de dados.

