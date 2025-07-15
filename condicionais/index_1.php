<?php
#sei o que é


// if (condição) {
//     // código a ser executado se a condição for verdadeira
// } else {
//     // código a ser executado se a condição for falsa
// }

$valor = rand(1, 20);
$valor = number_format($valor);

if ($valor < 10) {
    if ($valor == 1) {
        echo "O valor é menor que 10, igual a 1";
    } elseif ($valor < 5) {
        echo "O valor é menor que 10, mas menor que 5, $valor";
    }
} elseif ($valor > 10) {
    if ($valor < 20){
        echo "O valor é maior que 10 e menor que 20, $valor";
    }
}

?>
