<?php

// Para remover uma pasta...
// rmdir(__DIR__ . '/pasta_teste');

// AVISO: Lembrando de sempre verificar se a pasta existe, para não haver erro

// Mais uma vez, vai aparecer um aviso se a pasta não existe.
if(file_exists(__DIR__ . '/pasta_teste')) {
    rmdir(__DIR__ . '/pasta_teste');
}

// IMPORTANTE: a pasta só pode ser remoida se estiver vazia.
?>