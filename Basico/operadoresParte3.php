<?php

#   OPERADORES DE COMPARAÇÃO

# Permitem efetuar uma comparação entre valores.
# Verificam se os valores são iguais, diferentes, maiores ou menores, ou do mesmo tipo

# o resultado da comparação será sempre o valor verdadeiro (true) ou (false)

# valores são iguais?
$a = (2 == 3);      # false
$a = (100 == 100);  # true
$a = (50 == '50');  # true
$a = (50 === '50'); # false

# valores são diferentes?
$a = (2 != 3);      # true
$a = (2 <> 3);      # true (alternativo)
$a = (50 != 50);    # false
$a = (50 != '50');  # false
$a = (50 !== '50'); # true

# operador com 3 símbolos, comparam valores e tipo de valor
# ===
# !==

# valores são maiores ou menores
$a = (2 > 3);       # false
$a = (2 < 3);       # true
$a = (50 >= 50);    # true
$a = (50 <= 50);    # true
$a = (50 < 50);     # false

# No PHP 7 foi adicioando um novo operador de comparação
# designado por spaceship operator
# <=>

$x = 1 <=> 1; # 0  (1 == 1)
$x = 3 <=> 2; # 1  (3 > 2)
$x = 1 <=> 2; # -1 (1 < 2)
?>