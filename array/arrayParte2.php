<?php

    # ARRAY MISTOS (MIXED ARRAY)

    # É possível criar um array que combina vários indices numéricos e strings.
    # Embora não seja de necessidade muito frequente, é possível da seguinte forma:

    $dados = [
        0 => 10,
        'nome' => 'Kleber',
        'sobrenome' => 'Silva',
        10 => 1000,
        11 => 'Rua de Londrina',
        12 => 'Brasil'
    ];

    # uma estrutura deste tipo 'emais complexa de gerir
    # devido é mistura de indíces e tipos de dados.
    
    # Para apresentar dados de array, procedemos sempre da mesma forma:

    echo $dados[0]; # 10
    echo $dados['sobrenome']; # Silva


    //////////////////////////////////////////////

    # ARRAY MULTIDIMENCIONAIS

    # São arrays numéricos ou associativos, cujos valores são outros arrays.
    # exemplo:

    $dados = [
        [10, 20, 30, 40],
        [100, 200, 300, 400],
        [1000, 2000, 3000, 4000]
    ];

    #neste caso, para apresentar-mos valores deste array:

    echo $dados[1][2]; # 300
    echo $dados[0][3]; # 40

    # podemos ter array multidimencionais associativos:

    $cidade = [
        'Brasil' => ['Brasília', 'São Paulo', 'Santos'],
        'Portugal' => ['Lisboa', 'Porto', 'Barcelos'],
        'Espeanha' => ['Madrid', 'Barcelona',  'Sevilha']
    ];

    echo $cidade['Brasil'][1]; # São Paulo
    echo $cidade['Portugal'][0]; # Lisboa
    echo $cidade['Espanha'][2]; # Sevilha
?>