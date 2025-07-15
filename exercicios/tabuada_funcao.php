<?php
//fazer uma tabuada de cada operação
//utilizando funções

function tabuada($n){
    echo "Multiplicação";
    for($i=1; $i<=10; $i++){
        echo "$n x $i = ".($n*$i)."<br>";
    }
    echo "<hr>Adição <br>";
    for($i=1; $i<=10; $i++){
        echo "$n + $i = ".($n+$i)."<br>";
    }
    echo "<hr>Sutração <br>";
    for($i=1; $i<=10; $i++){
        echo "$n - $i = ".($n-$i)."<br>";
    }
    echo "<hr>Divisão <br>";
    for($i=1; $i<=10; $i++){
        echo "$n / $i = ".($n/$i)."<br>";
    }
    echo "<hr>";
}
//chamar a função
tabuada(6);
?>