<?php 
/*
uma empresaa tem diversos endereços de email,  variavel $cidade indica os dados a serem apresentados
construa a lógica condicional que permita apresentar apenas o email correspondente ao valor da variável
*/

$lojas = [
    'Sao Paulo' => 'enderecosp@email.com',
    'Rio de Janeiro' => 'enderecorio@email.com',
    'Belo Horizonte' => 'enderecobh@email.com'
];
$cidade = 'Belo Horizonte'; // pode ser alterada para testar outros casos
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>

<!-- verifica se a key existe -->
<!-- no 1° parametro se informa qual key quer verificar e no 2° se diz qual array -->
<?php if(key_exists($cidade, $lojas)): ?>

<!-- nome da cidade (se existe) -->
<h3> <?php echo $cidade ?> </h3>

<!-- email -->
<p> <?php echo $lojas[$cidade]?> </p>

<?php else: ?>
<!-- quando não existe cidade na coleção das lojas -->
<p>Não existe nenhuma loja na cidade indicada</p>

<?php endif ?>



</body>
</html>
