<?php
/* 
usando uma o array de produtos, apresente no html uma UL
contendo os produtos do array

*/

    $produtos = [
        'Arroz',
        'Feijão',
        'Macarrão',
        'Carne',
        'Pão',
        'Manteiga'
    ];
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de PHP</title>
</head>
<body>
    <div class="container">
        <list>
            <h4>Produtos</h4>
            <ul>
                <li><?php echo $produtos[0] ?></li>
                <li><?php echo $produtos[1] ?></li>
                <li><?php echo $produtos[2] ?></li>
                <li><?php echo $produtos[3] ?></li>
                <li><?php echo $produtos[4] ?></li>
                <li><?php echo $produtos[5] ?></li>
            </ul>
        </list>
    </div>
</body>
</html>