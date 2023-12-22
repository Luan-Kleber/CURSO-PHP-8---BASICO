<?php

    # CONSTANTES
    # ao contrário das variáveis, as constantes tem valores que não podem ser alterados.

    //definir uma constante
    define('nome', 'valor');

    // por convenção, as constantes são definidas com letras maiuscúlas
    define('TAXA_FIXA', 10);
    define('APRESENTAR_DADOS', false);

    // apresentar o valor de uma constante
    echo TAXA_FIXA; // 10

    //usar o valor de uma constante
    $preco_inicial = 500;
    $preco_final = $preco_inicial + TAXA_FIXA;

    //Não podemos alterar o valor de uma constante
    //TAXA_FIXA = 100;

    // tamebm podemos definir constantes com a expressão const

    const NOME = "João";
    echo NOME;

    /*
    Esta forma de definição de constantes não é muito ultilizada.
    Com define, é possível definir constantes em qualquer parte do código.
    Com const, existem estruturas das quais não podemos criar as constantes. 
    */

    // o PHP tem asa suas próprias constantes.

    echo PHP_VERSION;
    echo '<br>';

    // e tem um tipo de constantes que são definidas de forma dinâmica.
    // são designadas por constantes mágicas.

    echo "Estou executando este código na linha ".__LINE__;
?>