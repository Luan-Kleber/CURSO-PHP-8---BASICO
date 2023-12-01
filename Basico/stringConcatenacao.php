<?php

# STRINGS

# Uma string é uma série de caracteres que podem ser guardados numa váriavel
# podemos definir uma string como sendo um conjunto de letras, símbolos e algarismos que
# normalmente designamos por texto.

# em PHP, as strings podem ser deliminadas por
# aspas simples ' (single quote)
# aspas duplas " (double quote)

$a = 'Esta é uma string';
$b = "Esta é outra string";

# Nos Padrões de código não existe uma orientação definida. Devemos ser consistentes ao longo do nosso código.


#   CONCATENAÇÃO DE STRINGS
# é o processo que, através do código, permite juntar várias strings.
# existem dois operadores de concatenação:

# .
# .=

$a = 'João' . ' ' . 'Ribeiro';      # o ponto liga as diferentes strings

$b = 'João';
$b .= ' ' . 'Ribeiro';              # .= faz uma concatenação com o valor já existente na string

# exemplos

$nome = 'Joao';
$sobrenome = 'Ribeiro';
$nomeCompleto = $nome . ' ' . $sobrenome;

# a diferença entre strings delimitadas por ' e por " é que, no segundo caso,
# podemos fazer o seguinte:

$nome = 'João';
$sobrenome = 'Ribeiro';
$nomeCompleto = "$nome $sobrenome";

# ao contrário das ", nas strings ' as variáveis não são interpretadas
# relativamente ao seu valor (Parse)
?>