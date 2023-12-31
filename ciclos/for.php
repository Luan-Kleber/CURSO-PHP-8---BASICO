<?php 

// CICLO FOR

// É uma das estruturas de ciclo mais usadas
// Permite executar blocos de código enquanto uma condição for verdadeira

// Ao contrário do ciclo while e do while, o ciclo for já inclui
// a lógica para atualizar o valor da condição

// Contém 3 expressões separadas por ponto e vírgula

// for(expressão de iniciação; expressão de condição; expressão de incremento) {
    // codigo
// }

for ($indice = 1; $indice <= 10; $indice++) {
    echo "Índice $indice<br>";
}

echo "<br>";

//em cenários menos comuns, podemos remover algumas expressões

/*

for(;;){

}

Trata-se de um ciclo infinito. Para que ele termine, será necessário
criar um cenário no interior do ciclo para que ele seja interrompido.
Veremos como usar as instruções Continue e break num outro vídeo.

*/

echo '<hr>';

//Também é possível algo do tipo:
for ($i = 0; $i < 10; print $i, $i++) { // mostra todos os numeros concatenados em tela ex: 123456...
}

echo '<hr>';

// Também podemos usar o ciclo For para fazer uma iteração
// pelos dados de um array, da seguinte forma
$nomes = ['joao', 'ana', 'carlos'];
for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i] . '<br>';
}

echo '<hr>';

// ou iterar pelas letras de uma string
$frase = "Teste com uma string.";
for ($i = 0; $i < strlen($frase); $i++) {
    echo $frase[$i] . '<br>';
}

// IMPORTANTE: sobre questões de performance
// se usármos uma função na exxpressão de avaliação da condição
// podemos comprometer a performance, no caso de ser um ciclo longo.
// Então:

$valores = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100]; // vamos imaginar um array gigante

// em vez de:
for ($i = 0; $i < count($valores); $i++) {
    // codigo
}

// podemos escrever:
for ($i = 0, $total_valores = count($valores); $i < $total_valores; $i++) {
    // codigo
}

// Na iniciação do ciclo ante do primeiro ';' podemos iniciar com a variavel $total_valores
// recebendo o valor de quantidade do array, assim tendo o total na variável quando for feita a condição.
// Antes seria necessário na condição faz o cálculo do total do array.

echo '<br>';

// no contexto do PHP embutido no HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
            margin: 5px;
            background-color: rgb(200,200,200);
        }
    </style>
</head>
<body>
    
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <div class="card">
                <h3>Título <?= $i ?></h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Velit, id nemo in natus repudiandae beatae dolorem facere nostrum, 
                cum dolore minima alias temporibus est eveniet necessitatibus, 
                voluptatum architecto dignissimos. Possimus.
                </p>
            </div>
        <?php endfor; ?>
</body>
</html>