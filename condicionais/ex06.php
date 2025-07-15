<?php 

/*
simular uma mensagem de erro
se a variavel erro tiver conteudo dentro dela, deverá
aparecer uma mensagem de erro
caso contrário, se a mensagem de erro estiver vazia,
deverá aparecer a mensagem 'SUCESSO'
*/

$mensagem_erro = 'Algo deu errado';
$mensagem_sucesso = 'SUCESSO';

//aqui será o css (estilo)
$css = '';
//essa variavel recebera a mensagem de erro ou sucesso
$mensagem = null;

if(!empty($mensagem_erro)){
    $css = 'erro';
    $mensagem = $mensagem_erro;
} else {
    $css = 'sucesso';
    $mensagem = $mensagem_sucesso;
}

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
       <style>

        .sucesso{
            color: green;
            font-weight: bold;
            background-color: darkgreen;
        }
        .erro{
            color: red;
            font-weight: bold;
        }
       </style>
        
    </head>
    <body>

    <div class="container">
        <div class="<?=$css?>"><?= $mensagem ?></div>
    </div>
        
        <script src="" async defer></script>
    </body> 
</html>