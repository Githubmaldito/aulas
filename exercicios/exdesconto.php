<?php
//desconto progressivo
//variavel que recebe o valor da compra
$valorCompra = 2000;
$cupomDesconto = 0.1; // 10% de desconto

if ($valorCompra >= 1000 && $valorCompra < 2000) {
    $cupomDesconto = 0.1; // 10% de desconto
} elseif ($valorCompra >= 2000 && $valorCompra < 3000) {
    $cupomDesconto = 0.15; // 15% de desconto
} elseif ($valorCompra >= 3000) {
    $cupomDesconto = 0.2; // 20% de desconto
} else {
    $cupomDesconto = 0; // sem desconto
}
echo "Valor da compra: R$ $valorCompra<br>";
// O operador de concatenação em PHP é o ponto (.), utilizado para unir (concatenar) strings.
// No exemplo abaixo, ele junta textos e valores de variáveis em uma única string para exibir no navegador.
echo "Com cupom de desconto de " . ($cupomDesconto * 100) . "%, o valor final é: R$ " . ($valorCompra - ($valorCompra * $cupomDesconto)) . "<br>";

?>