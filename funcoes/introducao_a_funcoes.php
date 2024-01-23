<?php

// FUNÇÕES

/*
Neste Módulo vamos fazer uma introdução aos principais consceitos relacionados com funções em PHP.
(Existem detalhes mais avançados que iremos ver em outros módulos).

As funções são blocos de código reutilizaveis que apenas são executados quando são "chamados" pelo nosso código
O PHP contém um vasto conjunto de funções já disponíveis.
Nós podemos criar as nossa próprias funções.

funtion nome_da_funcao(parâmetros) {
    // codigo
}

Uma função pode ter no seu interior qualquer tipo de codigo de PHP, inclusive outras funções.
*/

//definir uma função
function apresentar() {
    echo 'Estou dentro de uma função PHP.<br>';
}

// chamar a execução de uma função
apresentar();


// FUNÇÕES

/*
Os nomes das funções devem começar por uma letra minúscula ou maisúcula, seguido por letras,
algarismos e underscores.

Os nomes das funções são case insensitive

apresentar() é igual a APRESENTAR()

Não podem existir duas funções com o mesmo nome dentro do mesmo namespace

(Falaremos de nanmespaces em outro módulo)

*/

apresenta();
executa();

function apresenta() {
    echo 'Função apresenta<br>';
}

function executa(){
    echo 'Função executa';
}

//--------------------------------------
echo "<br>";
for($i = 0; $i <= 10; $i++) {
    funcao_teste();
}

function funcao_teste() {
    echo 'Execução da função<br>';
}


// FUNÇÕES - RETURN

/*
A instrução 'return' quando usada no interior de uma função, permite
devolver um resultado da execução do código dessa função.

Por exemplo:
*/

function mensagem() {
    return "Este texto foi criado dentro da função."; //retunr significa devolver
}

// Se a função for apenas chamada, não vai acontecer nada.
mensagem();

//podemos então atribuir o valor de retorno, por exemplo a uma variável
$texto = mensagem();
echo $texto;

echo '<hr>';

//----------------------------------------------
// podemos executar qualquer tipo de operação dentro de uma função
// e devolver resultados.
function construir_resultado() {
    $valor1 = 100;
    $valor2 = 5;
    return $valor1 * $valor2;
}

$resultado = construir_resultado();
echo $resultado;

// neste contexto, o ideal será passar os valores para dentro da função
// e usar esses valores para devolver resultados.
// vamos falar sobre parâmetros de uma função

?>