<?php
/*os loops são usados para executar o mesmo código multiplas vezes
 o break é usado para sair do loop
 o continue é usado para sair da iteração atual e continuar com a próxima*/

$stop = 4;
for ($i =0; $i < 23; $i++){
    echo " 39<br>";
    if ($i == $stop){
        echo "ating loop at $i<br>";
    break;
    }
}
echo"<hr>";
// não é a maneira mais otimizada de fazer usando um array:
$nomes = ["joão", "maria", "pedro", "luan", "luana"];
for ($i = 0; $i < count($nomes); $i++){
    echo $nomes[$i]."<br>";
}
echo "<hr>";

$nome_stop = "luan";
foreach ($nomes as $nome){
    echo $nome."<br>";
    if ($nome == $nome_stop){
        echo "parando o loop no nome $nome<br>";
        break;
    }
}

echo "<hr>";
// continue
$ignorar = "luan";
foreach ($nomes as $nome){
    if ($nome == $ignorar) continue;
        echo "$nome<br>";
         // pula para a próxima iteração
}
echo "<hr>";

//BREAK EM VÁRIOS NÍVEIS
$paises = [
    'Brasil' => ['São Paulo', 'Rio de Janeiro', 'Belo Horizonte'],
    'Portugal' => ['Lisboa', 'Porto', 'Coimbra'],
    'Rússia' => ['Moscou', 'Leningrado', 'Stalingrado'],
];
//ciclo dentro de ciclo
foreach($paises as $pais => $cidades){
    echo "<h2>$pais</h2><hr>";
    foreach($cidades as $cidade){
        if ($cidade == 'Porto') break ; // sai do loop interno

        echo "<p>$cidade</p>";
        
    }

}
?>