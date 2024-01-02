<?php

// CICLO FOREACH

// É a melhor opção para iterações em arrays ou objetos.
// (falaremos de objetos em outro módulo de PHP)
 
/*
foreach([array] as $value ou $key => $value) {
    // codigo
}
*/

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];
foreach($nomes as $nome) { // foreach tradução 'por cada'
    echo "$nome <br>";
}

echo '<hr>';

$posicoes = [
    'administrador' => 'joao',
    'secretario' => 'ana',
    'colaborador' => 'carlos'
];

foreach($posicoes as $chave => $valor) {
    echo "Com a posição de <strong>$chave</strong>, temos a seguinte pessoa: <strong>$valor</strong> <br>";
}

// no final da execução, a variável '$valor' e a '$chave' vão permanecer disponíveis
echo "<hr>$valor<br>$chave";


// No cenaŕio de PHP embutido no HTML

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
        <?php foreach($nomes as $nome) : ?>
            <h2><?= $nome; ?></h2>
        <?php endforeach; ?>
    </div>

</body>
</html>