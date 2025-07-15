<!-- 
construa uma apresentação em hmtl que mostra a tabuada dos 5
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
$numero = 5; // número da tabuada
echo "<h1>Tabuada do $numero</h1>";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "<p>$numero x $i = $resultado</p>";
}

?>

</body>
</html>