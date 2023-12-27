<?php

    // PRECEDEÊNCIA DE OPERADORES

    // Frequentemente os operadores são combinados para formar expressões complexas.
    // Quando isso acontece, eles são tratados de acordo com a sua precedência
    // no PHP ela funciona maioritariamente da mesma forma como funcionam as precendências na matemática.

    $resultado = 10 + 20 * 4; // 90
    // na matemática a multiĺicação acontece primeiro (20 * 4 = 80)
    // depois acontece a adição (10 + 80 = 90)

    // Podemos forçar precedência usando parêntesis

    $resultado = (10 + 20) * 4;
    // neste caso a adição acontece primeiro e só depois a multipĺicação
    // 30 * 4 = 120

    $valor1 = 4;
    $valor2 = 2;
    $valor3 = 10;

    $resultado = $valor1 / $valor2 * $valor3;
    echo $resultado;

    // No decorrer do estudo da linguagem iremos aprofundar essas precedências sempre que necessário.

?>