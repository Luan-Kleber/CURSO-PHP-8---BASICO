<?php 

// PARÂMETROS DE UMA FUNÇÃO

/*
Podemos passar valores (argumentos) para o interior de uma função se essa função aceitar parâmetros.

Parâmetros são variáveis indicadas dentro dos parêtesis da função e que vão estar disponíveis para serem usadas dentro da função.

Argumentos são os valores que passamos para o interior dessa função. Vejamos em exemplo simples.
*/

function adicionar($a, $b){
    return $a + $b;
}

echo adicionar(100,50);

/*
adicionar - nome da função
$a e $b são parâmetros da função. Os parâmetros são separados por vírgulas.
Ao chamar a função, o valor 100 e o valor 50 são designados por argumentos.
O 100 irá ser atribuído $a e o 50 ao parâmetro $b da função.
*/

echo "<hr>";
// ------------------------------------------------------------------------------

/*
Podemos definir parâmetros opcionais dentro de uma função.
São parâmetros que já têm um valor padrão atribuído.
Se passarmos um argumento para esse parâmetro, o valor passado será usado.

Vejamos.
*/

function multiplicar($a, $b = 5) {
    return $a * $b;
}

echo multiplicar(10); // 50
echo "<br>";
echo multiplicar(10, 3); // 30

// IMPORTANTE: os parâmetros opcionais devem sempre ser definidos
// depois dos parâmetros não opcionais ex: primeiro não opcional ($a), depois opcional ($a, $b = 5)

echo "<hr>";
// -------------------------------------------------------------------------------

/*
O PHP 8 introduziu a possibilidade de alterar a ordem dos argumentos quando chamamos a função.

É um conceito designado por names arguments
*/

function apresenta($a, $b, $c = 100) {
    return "$a | $b | $c";
}

echo apresenta(10, 20) . '<br>';                // 10 | 20| 100
echo apresenta(10, 20, 30) . '<br>';            // 10 | 20| 30
echo apresenta(c: 1, b: 2, a: 3) . '<br>';      // 3 | 2 | 1

// Se quisermos misturar a ordem, os valores não nomeados devem vir sempre primeiro.
// Exemplo:
echo apresenta(10, c: 1, b: 2000);  // 10 | 2000 | 1

echo "<hr>";
// -------------------------------------------------------------------------------

/*
O PHP vai smepre tentar determinar o data type dos parâmetros e do return.
Podemos reforçar o tipo de valores que vão ser retornados da seguinte forma:
*/

function apresentar($a, $b): int {
    return  $a + $b;
}

echo var_dump(apresentar(10, 20)) . "<br>";

// Se for alterado o data type para string...

function multiplica($a, $b): string {
    return $a * $b;
}

echo var_dump(multiplica(10, 2)); //vai apresentar o resultado normalmente. Porque?

/*
Existe um mecanismo no PHP designado por strict types.
Se esse mecanismo não estiver ativo, o PHP vai tentar sempre fazer
a conversão implicita dos valores. 
*/

echo "<hr>";
// -------------------------------------------------------------------------------

// COMO FORÇAR OS STRICT TYPES ????
//declare(strict_types=1);

function multiplicando($a, $b): int | float{ // O 'int | float' quer dizer que pode ser devolvido tanto valor int quanto float
    return $a * $b;
}

echo multiplicando(10.3, 20);
?>