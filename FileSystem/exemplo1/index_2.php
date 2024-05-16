<?php 

//--------------------------------------
// Podemos criar e remover pastas
// mkdir(__DIR__ . '/pasta_teste');

/*
    Se a asta excluir, vai aparecer um aviso.
    Devemos sempre assegurar se a pasta ou ficheiro existe.
    Para isso podemos usar a função file_exists().
    Funciona para ficheiros e pastas.
*/

if(!file_exists(__DIR__ . '/pasta_teste')) {
    mkdir(__DIR__ . '/pasta_teste');
}
?>