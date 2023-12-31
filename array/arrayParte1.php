<?php

    # ARRAYS

    # Um array (traduzido para PT é uma matriz) é na realidade uma coleção de valores.
    # Funciona como um avaroável, mas que pode conter muitos valores "arrumados" cada um o seu espaço.
    # Esse "espaço" é designado por índice do array.

    # Resumindo, um array é uma solução constituída por chaves/índices e valores.
    # sa chaves/índices podem ser numéricos (array numéricos) ou strings (array associativo)
    # e porém até coexistir os dois típos de índices no array.
    # Os valores podem ser de qualquer tipo, inclusive serem outros arrays.

    # Exemplos

    $valores = array(1,2,3,10,20,30);
    $nomes = array('luan', 'ana', 'carlos');

    # A partir do PHP 5.4, passou a ser possível escrever os arrays de forma mais simplificada
    $valores = [1,2,3,10,20,30];
    $nomes = ['luan', 'ana', 'carlos'];

    # Este arrays são índice numérico
    # Para apresentar um dos seus valores, procedemos da seguinte forma:
    echo $valores[0];
    echo $nomes[1];

    #NUNCA ESQUECER QUE OS ARRYAS TEM ÍNDICE DE BASE 0

    # não tem obrigatoriedade de ter chaves sequênciais, ou seja, podemos iniciar nosso array com
    # outros tipos de valores, exemplo:

    $dados = [
        10 => 1000,
        20 => 2000,
        30 => 3000
    ];

    #se adicionarmos um novo elemnto no final da coleção, ele vai assumir o último índice + 1
    $dados[] = 4000; #dados[31];



    ////////////////////////////////////////

    # Sempre que queremos apresentar um valor de um array, usamos o seu índice.
    # da mesma forma, podemos alterar o valor de um array usando seu índice.

    $valores = [10,20,30];

    $valores[1] = 2000; # $valores = [10,2000,30];

    #podemos tambem ignorar o índice para adicionar um novo elemento ao array
    $valores[] = 3000; # $valores = [10,2000,30, 3000];

    #ou de outra forma
    array_push($valores, 5000); # $valores = [10,2000,30, 3000, 5000];

    #para apresentar valores de um array numa string, podemos fazer da seguinte forma:
    echo "Os valores são $valores[0] e $valores[1]";


    ///////////////////////////////////////

    # ARRAY ASSOCIATIVOS

    # ao contrário dos arrays numéricos, as chaves são do tipo string

    $dados = [
        'A' => 20,
        'B' => 30,
        'C' => 40,
        'D' => 50,
        'E' => 60
    ];

    # ou 

    $dados = [
        'nome' => 'luan',
        'email' => 'luan@gamil.com',
        'nacionalidade' => 'Brasil',
        'telefone' => '9999999999'
    ];

    # Da mesma forma que nos array numéricos não devem existor duas chaves iguais,
    # nos associativos também não,
    # na apresentação não é gerado nenhum erro. Se tiver duas chaves o valor a ser considerado pelo array
    # sera sempre o ultimo que foi escrito, exemplo:

    $dados = [
        'nome' => 'joao',
        'nome' => 'luan'
    ];

    # $dados['nome'] = 'luan';

?>