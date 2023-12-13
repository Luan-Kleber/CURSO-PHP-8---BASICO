<?php

    # DECLARAÇÕES/INTRUÇÕES CONDICIONAIS

    # São instruções utilizdas para controlar o fluxo da aplicação de acordo
    # com determinadas condições

    # Para verificação das condições destas decarações, recorremos ao uso
    # de operadores de comparação combinados com os operadores lógicos

    # O PHP contém várias estruturas condicionais, como iremos ver


    # DECLARAÇÕES/INTRUÇÕES CONDICIONAIS

    # Desclaração IF - define blocos de código que só são executados
    # se a condição for verdadeira (true)

    $nome = 'joao';
    if($nome == 'joao') {
        echo "Foi identificado o nome do autor do video.";
    }

    # IF ... ELSE

    $idade = 18;
    if($idade <= 18) {
        echo 'Adolescente';
    } else {
        echo 'Adulto';
    }

    # IF ... ELSEIF ... ELSE
    $nota = 5;
    if($nota < 2) {
        echo 'Nota Fraca';
    } else if($nota <= 4) {
        echo 'Not aInsuficiente';
    } else if($nota <= 6) {
        echo 'Nota Positiva';
    } else if($nota <= 8) {
        echo 'Nota muito Positiva';
    } else {
        echo 'Nota Excelente';
    }

    # Podemos deixar de usar as chaves, se só existir uma instrução no bloco
    if($nota < 2)
        echo 'Nota Fraca';
     else if($nota <= 4)
        echo 'Not aInsuficiente';
     else if($nota <= 6)
        echo 'Nota Positiva';
     else if($nota <= 8)
        echo 'Nota muito Positiva';
     else
        echo 'Nota Excelente';


    # mas se existir mais de uma instrução devemos utilizar chaves
    if($nota < 2) {
        echo 'Nota Fraca';
        echo 'Reportar ao Diretor da Escola!';
    }
     else if($nota <= 4)
        echo 'Not aInsuficiente';
     else if($nota <= 6)
        echo 'Nota Positiva';
     else if($nota <= 8)
        echo 'Nota muito Positiva';
     else
        echo 'Nota Excelente';

    

    # Uso de operadores Lógicos

    $numero = 20;
    if($numero > 10 && $numero != 30) {
        // executar código
    } else {
        // executar outro código
    }

    # Condições dentro de condições
    $numero = 10;
    if($numeor > 10) {
        if($numero >= 10) {
            echo 'O número é igual ou maior que 100';
        } else {
            echo 'O número é positivo, mas inferior a 100';
        }
    } else {
        echo 'O número é negativo';
    }

?>