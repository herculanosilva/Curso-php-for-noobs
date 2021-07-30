<?php
    // Aula sobre função de saída

    echo 123;
    
    //concatenando e usando a constante PHP_EOL
    echo 456 . "testo" . PHP_EOL;
    /*
    PHP_EOL Serve para inserir uma quebra de linha, independente do sistema operacional utilizado, 
    ajudando na identação do seu código. Tendo a mesma função que um \n, no linux, e um \r\n, no windows.
    */

    "<br>";

    //A função var_dump () despeja informações sobre uma ou mais variáveis. 
    //A informação contém o tipo e o valor das variáveis.

    #string
    var_dump(value: "herculano");

    #bool
    var_dump(value: true);

    #float
    var_dump(value: 9.6);

    #array
    var_dump(value: [1,2,3,4,5,6]);



?>