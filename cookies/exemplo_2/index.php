<?php

// Neste eemplo muito simples, vamos usar o cookie
// para definir o tema claro ou escuro do nosso site.

//verifica se eiste um cookie com o tema
$theme = !empty($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .light {
            background-color: write;
            color: black;
        }
        .dark {
            background-color: black;
            color: white;
        }
        a {
            color: red;
        }
    </style>

</head>
<body class="<?= $theme ?>">

        <a href="theme_dark.php">Tema Dark</a> | <a href="theme_light.php">Tema Light</a>
        <h1>Exemplo simples de tema com cookie</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda impedit totam, 
        ipsam id reprehenderit, eaque porro quia commodi sed ex, 
        veritatis veniam cum illo incidunt officia rerum sunt nesciunt obcaecati.</p>

</body>
</html>