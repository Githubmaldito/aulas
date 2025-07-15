<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>O PHP pode ser usado com html normalmente</h1>

    <style>
        .cor-p{
            color: green;
        }
    </style>

    <?php
        echo "<p>Olá, mundo!</p>";
        #tudo que for relativo ao PHP deve estar entre as tags
        $Php = "quanto php"
    ?>
    
    <h2>Essa linha usa tanto HTMl <?php echo $Php?> </h2>
    <!-- Também é possível usar html a partir do PHP -->
     <?php 
     #deve ser utilizaado o echo com as aspas
     echo "<p>Escrito em HTML usando o PHP</p>";
     echo "<p class=cor-p>Também se pode usar CSS</p>"
     ?>
</body>
</html>