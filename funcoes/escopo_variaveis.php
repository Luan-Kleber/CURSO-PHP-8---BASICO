<?php

// ESCOPO DE VARIÁVEIS

/*
o escopo de uma variável indica a fronteira dentro da qual uma variável pode ser acedida (utilizada ou alterada).
Existem um escopo global e um escopo local.
De um modo geral, as variáveis no PHP têm apenas um escopo: global ou local.
Voltaremos a falar sobre escopo de variáveis no módulo relacionado com OOP.
*/

$nome = 'joao'; // é uma variável de escopo global

/*
Esta variável vai estra disponível para ser usada dentro de instrções condicionais 
e ciclos neste script e em outros scripts que possam ser importados para o
interior deste script. (include e require).
*/

if(true) {
    echo $nome . "<br>";
}

for($i=1; $i<=2; $i++) {
    echo $nome . "<br>";
}

//----------------------------------------------------------------------
echo "<hr>";

// No entanto, a variável não estará acessível dentro de uma função.

$nome = "Luan";

function executar() {
    echo $nome;
}

executar();

/*
Todas as variáveis de uma função têm escopo local.
Apenas existem dentro da função.
Elas são criadas dentro de uma função e destruídas assim que
a função termina a sua execução.
*/

function adicionar() {
    $a = 100;
}

echo $a; // Não vai ser apresentada

//----------------------------------------------------------------------
echo "<hr>";

/*
Neste caso, a variável $nome terá duas versões:
Uma global que existe ao longo do script.
Outro local que é criada e terinada dentro do bloco da função
*/

$nome = "Duda"; //primeira variável

function dados() {
    $nome = "Luan <br>"; //segunda variável
    echo $nome;
}

dados();

echo $nome;

//----------------------------------------------------------------------
echo "<hr>";

/*
É possível aceder dentro de uma função a uma variável global.
Fazemos da seguinte forma:
*/
$nome = "Isabela";

function dados1() {
    global $nome;
    echo $nome . "<br>";
}

dados1();

// Dessa forma fazemos com que a variavel de fora passe a ser valida dentro da função.

//IMPORTANTE: a melhor estratégia é passar por usar parâmetros nas funções.
// Exemplo seria:

$nome = "Lucas";

function dados2($nome) {
    echo $nome;
}

dados2($nome); // dessa forma é melhor e previni para não poluição de código

// o bom seria usar global, quando é um arquivo de funções onde precisam passar parametros de banco de dados
// igual acontece em seu trabalho.
?>