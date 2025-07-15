<!-- 
dada a coleção de nomes, apresente todos exceto o de indice 4 ("Maria")

-->

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
<?php
$nomes = ['João', 'Ana', 'Pedro', 'Lucas', 'Maria', 'Carla', "Adamastor"]; // coleção de nomes
?>
        
<?php
foreach ($nomes as $nome) {
    
    if ($nome === 'Maria') continue;
    echo "<h2>$nome</h2>";
}


?>


    </body>
</html>