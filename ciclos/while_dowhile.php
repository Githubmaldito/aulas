<?php

/*
os ciclos permitem a repetição de blococs de código até que uma condição interrompa sua execução

WHILE 
Enquanto a condição for verdadeira, o código é repetido
*/


$valor = 1;
//usa-se o while, dentro dos parenteses se coloca a condição
while ($valor <= 10){
//dentro das chaves, se põe o que deve acontecer
    $valor++;
    echo $valor;
}

echo "<hr>";
$valor = 1;
while ($valor <=10){
    echo "3 x $valor = ". $valor * 3 . "<br>";
    $valor++;
}

/*
do while
Neste caso, o bloco é executado pelo menos uma vez,
depois se valida  condição 
*/
//primeiro, se diz o que fazer, pelo menos uma vez
$valor = 1;
echo "<hr>";
do {
echo "3 x $valor = ". $valor * 5 . "<br>";
$valor++;
//após informar o que será feito na primera,
//informa-se a condição no while
} while ($valor <= 10);

?>