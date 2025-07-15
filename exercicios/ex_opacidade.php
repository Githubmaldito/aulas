<?php
//apresente a frase 10 vezes, mas com opacidade menor a cada vez
//utilize o atributo style para o efeito visual

$frase = "Est frase será exibida em diferentes opaciades.";
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <?php for($i = 10; $i >=0; $i--): ?>
        <h3 style="opacity: <?= $i / 10?>;"><?= $frase?></h3>
    <?php  endfor; ?>
    <?php  ?>

</body>
</html>