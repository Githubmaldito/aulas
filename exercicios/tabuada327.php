<!-- 
construa um array com a tabuada do numero 327
apresente os dados do array com um foreach
-->

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$numero = 327; // número da tabuada
$tabuada = []; // array para armazenar a tabuada   
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        // echo  "<p>$numero x $i = $resultado</p>";
        $tabuada[$i] = $resultado;
    }
    
    foreach ($tabuada as $numero) {
        echo "<p>$numero</p>";
    }

?>
</body>
</html>