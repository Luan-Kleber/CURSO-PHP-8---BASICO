<?php

// INCLUDE E REQUIRE

/*
Tradicionalmente uma aplicação de PHP pode contem deenas de script que,
combinados entre si, permitem executar as operaçõesd desejadas.
Até agora vimos scripts isolados.
Podemos separar o código entre vários scripts e, no momento da execução,
"importar" o código para o interior da nossa aplicação

Existem 4 formas de executar esta tarefa:

    include
    include_once
    require
    require_once
*/

//-----------------------------------------------------------
// INCLUDE
// include 'script.php';
// include 'outro.php'; // o arquivo não existe. Vai aparecer VAZIO
// include 'script.php';

/*
Principal diferença entre o include e o require:
include - Mostra aviso se o scipt não existe e permite continuar a execução.
require - Mostra um erro se o script não existe e interrompe e execução.
*/

//-----------------------------------------------------------
// REQUIRE
// require 'script.php';
// require 'outro.php'; // o arquivo não existe. Vai aparecer ERRO
// require 'script.php';

//-----------------------------------------------------------
// INCLUDE & REQUIRE

/*
include_once e require_once efetuam a inclusão do script apenas uma vez.
Se o scrit foi anteriormente carregado, já não vai ser mais carregado.
*/

// include_once significa incluir apenas uma vez
include_once 'script.php';
include_once 'script.php';

require_once 'script.php';
require_once 'script.php';

/*
Exemplo: Podemos cria um script ue contém funções,
importar para este scrit e chamar essas funções.
*/

echo "<hr>";
require_once('functions.php');

echo "adicionar: ".adicionar(20,5)."<br>";
echo "subtrair: ".subtrair(20,5)."<br>";
echo "multiplicar: ".multiplicar(20,5)."<br>";
echo "dividir: ".dividir(20,5)."<br>";

//-----------------------------------------------------------
echo "<hr>";

/*
Imagina o cenário onde tens um conjunto d dados considerável e queres definir isso dentro
de um script à parte. Também é possível seguindo o seguinte exemplo:
*/

$nomes = require_once('dados.php');

echo "<pre>";
print_r($nomes);
?>