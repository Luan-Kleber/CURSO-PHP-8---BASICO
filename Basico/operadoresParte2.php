<?php

#   OPERADORES DE ATRIBUIÇÃO COMBINADOS

# permitem alterar o valor de uma variável, a partir do seu valor original

$a = 10;

$a = $a + 20;   #30
$a = $a - 3;    #7
$a = $a * 2;    #20
$a = $a / 2;    #5

// simplificando

$a += 20;   #30
$a -= 3;    #7
$a *= 2;    #20
$a /= 2;    #5


#   OPERADORES DE INCREMENTO E DECREMENTO

# adicionam ou subtraem uma unidade à variável

$a = 10;

$a++;   # $a = $a + 1
$a--;   # $a = $a - 1

# outro exemplo, pré-incremento ou pós-incremento.
# o mesmo acontece para o decremnto

$a = 10;

$a++;
++$a;

$a--;
--$a;
?>