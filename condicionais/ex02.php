<?php
/*
Usando o array de produtos, inverta sua ordeem e 
acrescente no final mais 2 produtos, apresentando em uma ul
*/
$produtos = [
    'Arroz',
    'Feijão',
    'Macarrão',
    'Carne',
    'Pão',
    'Manteiga'
];
$produtos = array_reverse($produtos);
//para se fazer um push, usa-se o método array_push diretamente
array_push($produtos, 'Ovo', 'Leite');
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercicio 2</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        
    <div class="container">
        <list>
            <ul>
                <li><?php echo $produtos[0] ?></li>
                <li><?php echo $produtos[1] ?></li>
                <li><?php echo $produtos[2] ?></li>
                <li><?php echo $produtos[3] ?></li>
                <li><?php echo $produtos[4] ?></li>
                <li><?= $produtos[5] ?></li>
                <li><?=  $produtos[6] ?></li>
                <li><?= $produtos[7] ?></li>




            </ul>
        </list>
    </div>
        
        <script src="" async defer></script>
    </body>
</html>