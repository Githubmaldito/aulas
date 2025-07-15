<?php
/*
ordena por ordens alfabetica os produtos do array
apresenteos em uma ul
*/
$produtos = [
    'Arroz',
    'Feijão',
    'Macarrão',
    'Carne',
    'Pão',
    'Manteiga'
];
// Ordena o array de produtos em ordem alfabética
// A função sort() ordena o array em ordem crescente
sort($produtos);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercicio 3</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <div class="container">
            <list>
                <ul>
                    <li><?= $produtos[0] ?></li>
                    <li><?= $produtos[1] ?></li>
                    <li><?= $produtos[2] ?></li>
                    <li><?= $produtos[3] ?></li>
                    <li><?= $produtos[4] ?></li>
                    <li><?= $produtos[5] ?></li>
                </ul>
            </list>
        <script src="" async defer></script>
    </body>
</html>