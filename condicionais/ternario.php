<?php 

    # OPERADOR TERNÁRIO

    # É um operador condicional que pode substituir uma estrutura simples IF ELSE
    # O operador necessita de três expressões ou áreas:
    # 1. A expressão que será avaliada como verdadeira
    # 2. A expressão que será executada com o true
    # 3. A expressão que será executada com o false

    $opcao = 0;

    $nome = $opcao == 1 ? 'Joao' : 'Antonio';

    # podemos também usar da seguinte forma:

    $nome = '';    
    $opcao == 1 ? $nome = 'Joao' : $nome = 'Antonio';
    
    # podemos usar o operador ternário em várias situações distintas.
    # por exemplo, para apresentar um determinado texto

    echo $opcao == 1 ? 'SIM' : 'NAO';

?>

<!-- COm intrução condicional IF -->
<?php if($opcao == 1): ?>
    <h2>SIM</h2>
<?php else: ?>
    <h2>NAO</h2>
<?php endif; ?>

<!-- Com operador ternário -->
<h2><?= $opcao == 1 ? 'SIM' : 'NAO'?></h2>

<!-- Por exemplo, para controlar CSS -->
<h2 style="color: <?= $opcao == 1 ? 'red' : 'blue' ?>">Este texto tem cor definida pelo PHP</h2>