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
<!-- teremeos dois valores, o multiplicador e o outro
 então se multiplica e mostra o resultado -->
    <div class="container">
        <tabuada>
            <?php 
            $num1 = 6;
            $num2 = 0;
            ?>
            <h3>Tabuada do número <?=$num1?></h3>
            <br>
            <?php
            while ($num2 < 10) :
            $tabuada = $num1 * $num2;
                echo"$num1 x $num2 = ". $tabuada;
                echo "<hr>";
                $num2++
            ?>
            <?php endwhile?>
        </tabuada>
    </div>
        <script src="" async defer></script>
    </body>
</html>