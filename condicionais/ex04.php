<?php
/*
construa a logica condicional que permite apresentar
apenas o paragrafo correspondente ao valor da variavel $nome
*/
$nome ="João";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercicio 4</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php if($nome == 'João'): ?>
        <p>O nome  é João</p>
        <?php elseif ($nome == 'Pedro'): ?>
        <p>O nome é Pedro</p>
        <?php elseif ($nome == 'Lúcio'): ?>
        <p>O nome é Lúcio</p>
        <?php else: ?>
        <p>O nome é desconhecido para mim</p>
        <?php endif ?>
        <script src="" async defer></script>
    </body>
</html>