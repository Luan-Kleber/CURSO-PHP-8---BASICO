<?php

# CARACTERES DE ESCAPE

echo '<p>Este é um parágrafo de HTML</p>';
echo '<br>';

# os caracteres de escape são usados para escrever caracteres especiais,
# como é o caso de alguns símbolos que podem entrar em conflito com o código.

# $frase1 = 'I'm going to John's Party!;
$frase2 = "I'm going to John's Party!";

# a \ é o símbolo para abrir um caracter de escape.

$frase1 = 'I\'m going to John\'s Party!';




# apenas tem o comportamento desejado no terminal

echo 'Joao Ribeiro\n\rTeste';
echo "Joao Ribeiro\n\rTeste";

?>