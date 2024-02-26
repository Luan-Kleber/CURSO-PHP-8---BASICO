<?php 

//remover cookie
$nome = 'meu_cookie';
setcookie($nome, '', time() - 1); // é a mesma função que criar cookie

// O que acontece é que para dizer que o cookie expirou colocamos '- 1',
// pois indica que o cookie acabou a 1 segundo atras.
// o '' significa que o valor do 'meu_cookie' deve ser vazio.

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Cookies</title>
</head>
<body>
    
    <?php require_once('nav.php') ?>

    <h3>Remover Cookie</h3>
    <hr>
    <p>Cookie removido com sucesso</p>

</body>
</html>