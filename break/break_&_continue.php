<?php

// BREAK & CONTINUE

/* 
    Os loops (ciclos) são usados para executar o mesmo código múltiplas vezes.
    Em determinadas situações, podemos querer que o ciclo não execute todas as 
    suas interações, ou queremos que seja simplesmente interrompido.

    É nestes cenários que entram o break e o continue.
*/

// ---------------------------------------------------------------------------
// BREAK - permite interromper a execução de um ciclo antes do previsto
echo "<h2>Break</h2>";

$paragem = 5;
for($i = 0; $i <= 10; $i++) {
    echo "$i<br>";
    if($i == $paragem) {
        break;
    }

    //ou
    // if($i == $paragem) break;
}

echo "<hr>";

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];
$nome_que_vai_interromper = 'francisco';
foreach($nomes as $nome) {
    echo "$nome<br>";
    if($nome == $nome_que_vai_interromper) {
        break;
    }

    //ou
    // if($nome == $nome_que_vai_interromper) break;
}

echo "<hr>";

$numero = 0;
$interrompa = 5;
while($numero <= 10) {
    echo "$numero<br>";
    if($numero == $interrompa) {
        break;
    }

    //ou
    // if($numero == $interrompa) break;

    $numero++;
}

// IMPORTANTE: tanto o break ou o continue,
// tambem funcionam no ciclos while, do while e switch

// -----------------------------------------------------------------
// CONTINUE - permite passar de imediato para a iteração seguinte
echo "<h2>Continue</h2>";

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];
$ignorar = "carlos";
foreach($nomes as $nome) {
    if($nome == $ignorar) { // ignorou o "carlos" e continuou o ciclo
        continue;
    }
    echo "$nome<br>";
}

// -----------------------------------------------------------------
// BREAK com vários níveis
echo "<h2>BREAK com vários níveis</h2>";

/*
    Imagina o cenário em que estamos a executar dois ciclos, um dentro do outro.
    O ciclo interior encontra uma condição para ser interrompido.
    Queremos que o ciclo interior e o exterior sejam interrompidos.
*/

$paises = [
    'Portugal' => ['Lisboa', 'Porto', 'Coimbra'],
    'Brasil' => ['Brasilia', 'São Paulo', 'Rio de Janeiro'],
    'Angola' => ['Luanda', 'Cabinda', 'Huambo'],
    'Moçambique' => ['Maputo', 'Matola', 'Nampula'] 
];

foreach($paises as $pais => $cidades) {
    echo "<h3><u>$pais</u></h3>";

    foreach($cidades as $cidade) {

        // vamos para os dois ciclos quando a cidade é Cabinda
        if($cidade == 'Cabinda') break 2;

        echo "<p>$cidade</p>";

        // break 2, significa que se colocassemos só 'break' pararia o foreach inteirior
        // mas ainda continuaria o foreach exterior. Mas agora se utilizarmos o break 2
        // paramos os dois foreach, e não necesseriamento tem que ser 'break 2', pois
        // podemos colocar o numero de quantos foreach tivermos e quanto queremos parar.
    }
}

// tanto o break e o continue tem essa função e podemos utilizar essa função
// em qualquer ciclo incluindo o switch.

echo "<hr>Fim";
?>