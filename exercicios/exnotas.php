<?php
// sistema de notas
$nota = 7.5; // pode ser alterada para testar outros casos
$faltas = 7;
// testar a nota e o numero de faltas e ver se está aprovado
if ($nota >= 7 && $faltas <= 10){
    echo "Aprovado com média $nota e faltas $faltas";
}elseif ($nota < 7 && $faltas <= 10){
    echo "Reprovado por nota.  Média: $nota, Faltas: $faltas";
} elseif ($faltas > 10){
    echo "Reprovado por número de faltas. Faltas: $faltas";
} else {
    echo "Situação indefinida";
}


?>