<?php

// CICLOS

/*
    Os ciclos permitem a repetição de blocos de código até que uma
    determinada condição interrompa a sua execução.
    são estruturas muitop presentes em qualquer script de PHP
*/

// ------------------------------------------------
// WHILE

// Enquanto a condição for verdadeira, o código é repetido
$valor = 1;
while($valor <= 10) {
    echo "Valor: $valor \n";
    $valor++;
}

// IMPORTANTE: Se não alterarmos o valor da condição
// o ciclo fica infinito

// Neste caso pode nunca executar o bloco, uma vez que a 
// avaliação da condição acontece no inicio do ciclo

// outro exemplo
echo "\n".'-------------------------------------------------'."\n";
$valor = 1;
while($valor <= 10) {
    echo "3 x $valor = ".($valor * 3)."\n";
    $valor++;
}

// --------------------------------------------------

// DO WHILE 

// A diferença para o ciclo WHILE é que,
// neste caso, o bloco é executado pelo menos uma vez
// e só depois é avaliada a condição

echo "\n".'-------------------------------------------------'."\n";
$valor = 11;

do {
    echo "3 x $valor = ".($valor * 3)."\n";
    $valor++;
} while($valor <= 10);

// se o valor for 11, ainda assim, o bloco é executado uma vez.


// --------------------------------------------------

echo "\n".'-------------------------------------------------'."\n";

$valor1 = 1;
$valor2 = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- while -->
    <?php while($valor1 <= 10): ?>
        <h3>Valor 1 = <?= $valor1++ ?></h3>
    <?php endwhile; ?>


    <hr>

    <!-- do while -->
    <?php do { ?>
        <h3>Valor 2 = <?= $valor2++ ?></h3>
    <?php } while($valor2 <= 10); ?>
</body>
</html>