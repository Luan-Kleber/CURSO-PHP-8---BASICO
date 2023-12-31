<?php

// EXPRESSÃO MATCH

/*
    É uma nova estrutra condicional que apareceu no PHP 8.
    retorna um determinado valor de acordo com a análise efetuada
*/

$estado_encomenda = 'em processamento';

// ---------------------------------------------------
switch($estado_encomenda) {
    case 'em processamento':
        // codigo
        break;
    case 'anulada':
    case 'cancelada':
        // codigo
        break;
    case 'enviada':
        //codigo
        break;
    default:
        //codigo
        break;
}

// ----------------------------------------------------

$resultado = match($estado_encomenda) {
    'em processamento' => 'A encomenda está a ser tratada.',
    'anulada', 'cancelada' => 'A encomenda foi anulada ou cancelada.',
    'enviada' => 'A encoemnda foi enviada.',
    default => 'Estado da encomenda é desconhecido.'
};

echo $resultado;


// -----------------------------------------------------
// podemos também analisar múltiplas condições de comparação

$valor = 100;

$resultado = match(false) { // true ou false para trazer a expressão verdadeira, ex: true -> 'Valor igual a 100'
    $valor > 100 => 'Valor maior que 100.',
    $valor == 100 => 'Valor igual a 100.',
    $valor < 100 => 'Valor menor que 100.'
};
// lembrando que se não tiver a condição para a expressão true ou false ira dar erro

echo $resultado;


// -------------------------------------------------------
// exemplo com funções

$valor = 50;

$resultado = match(true) {
    $valor > 100 => f1(),
    $valor == 100 => f2(),
    $valor < 100 => f3()
};

echo $resultado;

function f1() {
    return 'Valor maior que 100';
}

function f2() {
    return 'Valor maior que 100';
}

function f3() {
    return 'Valor maior que 100';
}
?>