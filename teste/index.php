<?php

//variáveis

$valor = 100;

# $valor -> nome da variável
# = -> operador de atribuição
# 100 -> valor da variável

$nome = "João";
$_idade = 22;
echo $nome;

echo "<br>";
$nome = "Maria";
echo $nome;

$valor1 = $valor2 = $valor7 = 10;
# valor1 não recebe 10, mas sim o valor de $valor2, que por sua vez recebe o valor de $valor7, que é 10.
echo "<br>";
echo $valor1;
echo "<br>";
$valor1 = 20;
$valor2 = 45;
echo $valor1 + $valor2;
echo "<br>";
