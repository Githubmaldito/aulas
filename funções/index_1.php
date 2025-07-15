<?php
function apresentar(){
    echo "<h2>Finja que está apresentando algo importante.</h2><br>";
}
apresentar();
echo"<hr>";

for ($i= 0; $i < 6; $i++){
//mesmo que a função ainda não tenha sido definida, ela a inda funciona
    falar_algo();
}

function falar_algo(){
    echo "<h2>Eu estou falando algo importante.</h2><br>";
}
//no php, as funções são case insensitive, ou seja, não importa se você chama a função com letras maiúsculas ou minúsculas
echo "<hr>";
FALAR_ALGO();

function somar($a, $b){
    return $a + $b;
}

?>