<?php

    # STRINGS são variáveis muito especiais dentro do PHP.
    # Exstem dezenas de funções para tratamento de strings
    # (veremos mais à frente o que são funções e como criar funções)

    # Por Exemplo, podemos apresentar um determinado caracter de uma string
    # da seguinte forma

    $frase = 'Esta frase tem 29 caracteres.';
    $n = "\n";

    //apresenta o primeiro caracter da frase
    echo $frase[0];
    echo $n;

    //apresenta o sexto carcter da frase
    echo $frase[5];


    # Podemos comparar strings da seguinte forma

    $a = 'Joao';
    $b = 'Carlos';

    $c = ($a == $b);    // false
    $d = ($a != $b);    // true

    # Existem muitas funções nativas no PHP para operar com strings

    # Exemplos:

    $frase = 'Esta frase tem 29 caracteres.';

    #retorna a quantidade de caracteres da string
    $numero_caracteres_total = strlen($frase);

    #retorna as letras a partir da posição 0 ate a posição 4
    $primeira_palavra = substr($frase, 0, 4);

    #converte toda a string em letras maiúsculas
    $todas_maisculas = strtoupper($frase);

    #converte toda a string em letras minúsculas
    $todas_maisculas = strtolower($frase);

    #substitui uma letra por outra
    $nova_frase = str_replace('a', 'x', $frase); # Estx frxse tem 29 cxrxcteres.

    #verifica quando aparece a primeira posição de um caracter dentro da string.
    $posicao = strpos($frase, 'a'); #3


    # No PHP 8 foram introduzidas mais algumas funções para usar com strings

    #str_contains() verifica se os caracteres contem na string
    $nome = "Ana Maria Silva Cardoso";
    $x = str_contains($nome, 'Silva'); #true;

    #str_starts_with() se a string inicia com o caracteres
    $x = str_starts_with($nome, 'Ana'); #true;
    $x = str_starts_with($nome, 'ana'); #false;

    #str_ends_with() se a string inicia com o caracteres
    $x = str_ends_with($nome, 'oso'); #true;
    $x = str_ends_with($nome, ' oso'); #false;

?>