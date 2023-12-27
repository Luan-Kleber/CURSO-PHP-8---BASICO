<?php 

    # OPERADOR DE CONTROLE DE ERRO

    // Existem várias formas de contonar erros no PHP
    // Este operador, quando aplicado a uma expressão que vai gerar um erro,
    // permite que esse erro seja ignorado

    $ficheiro = file('teste.txt');

    // este código vai gerar um aviso.
    // se adicionarmos o operador de controle de erro,
    // a mensagem do aviso vai desaparecer, sendo a instrução ignorada.

    $ficheiro = @file('teste.txt'); // com o @ ele ignora se o arquivo não existir

    echo 'fim';

    // Não é aconselhável usar este operador, exceto em situações
    // muito especificas, uma vez que a supressão da mensagem de erro
    // pode impedir que encontremos um erro no nosso código.

?>