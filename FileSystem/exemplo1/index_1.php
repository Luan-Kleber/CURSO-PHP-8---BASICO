<?php

echo "<pre>";

// listagem de arquivos
echo __DIR__ . "<br>";
$files = scandir(__DIR__); // constante mágica __DIR__
print_r($files);

/*
O . e o .. estão sempre presentes em cada pasta.
São identificados como a pasta atual (.) e a pasta anterior (..)
*/

echo "<hr>";
$files2 = scandir('./'); // listar a pasta atual
print_r($files2);

echo "<hr>";
$files3 = scandir("../"); // listar a pasta anterior
print_r($files3);

// ------------------------------------------------------------------
// Podemos questionar se cada elemento encontrado é um ficheiro ou uma pasta
echo "<hr>";
foreach($files as $item) {
    echo is_file($item) ? 'Arquivo' : 'Pasta'; // is_dir() identifica se é pasta
    echo "<br>";
}

// ------------------------------------------------------------------
echo '<hr>';
$files = scandir(__DIR__);
foreach ($files as $item) {
    if(is_file($item)) {
        echo $item . '<br>';
    }
}
?>