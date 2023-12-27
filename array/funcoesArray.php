<?php

    // FUNÇÕES ASSOCIADAS A ARRAYAS
    // Existem dezenas de funções para arrays
    // Array é um tipo de dado muito importante para o PHP

    // Vamos conhecer algumas funções de maior destaque

    $nomes = ["joao", "ana", "carlos", "luan"];

    // queremos saber se uma variavel é um array?
    $resultado = is_array($nomes); // true

    // queremos saber quantos elementos tem um array?
    $resultado = count($nomes); // 4

    // adicionar valores no final do array
    array_push($nomes, "fernando", "manuela", "Duda"); // adiciona os 3 nomes

    // adicionar um valor no inicio do array
    array_unshift($nomes, "marcos");

    // retirar um valor do final do array
    $resultado = array_pop($nomes); // $resultado = "Duda"

    // retirar um valor do inicio do array
    $resultado = array_shift($nomes); // $resultado = "marcos"

    // eliminar um determinado elemento pelo indice
    unset($nomes[0]); // remove primeiro elemento do array


    // FUNÇÕES ASSOCIATIVAS A ARRAYS

    $cliente = [
        'nome' => "luan",
        'apelido' => "ribeiro",
        'idade' => 48,
        'email' => 'luan@gmail.com'
    ];

    // apresentar um valor de um array associativo
    echo $cliente['apelido'];

    // verificar se existe uma determinada key no array
    var_dump(key_exists('telefone', $cliente)); // bool(false)

    // array para string
    $resultado = implode(",", $cliente); // importante dizer que ele junta os valores mas apaga as chaves
    var_dump($resultado); // "luan,ribeiro,48,luan@gamil.com"

    // criar um novo array a partir de uma porção de outro array
    $nomes = ["joao", "ana", "carlos", "luan", "maria"];
    $nomes_parte = array_slice($nomes, 2); // ["carlos", "luan", "maria"]

    // funções para arrays em php:
    // https://www.php.net/manual/en/ref.array.php
?>