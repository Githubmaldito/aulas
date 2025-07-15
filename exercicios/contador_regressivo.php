<!-- Crie um contador regressivo de 10 até 0. 
 A cada iteração, exiba o número. 
 Quando chegar a 0, exiba "Fogo!". -->
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
$num1 = 10;
?>

    <h2>Contador regressivo</h2>
    <?php while ($num1 > 0) :
    if ($num1 == 0) {
      echo "FOGO!";
    } else {
    echo $num1;
    $num1--; 
    } ?>

    <?php endwhile ?>
    
        <script src="" async defer></script>
    </body>
 </html>