<?php
//MATCH
/*
é uma nova estrutura condicional que apareceu no php8
retorna um determinado valor de acordo com a análise efetuada
*/


$estadoEncomenda = 'em processamento';

//assim seria com switch
// switch ($estadoEncomenda){
//     case 'em processamento':
//         echo "A encomenda sendo processada";
//         break;
//     case 'em rota':
//         echo "A encomendaestá em rota de entrega";
//         break;
//     case 'entregue':
//         echo "A encomenda foi entregue";
//         break;
//     default:
//         echo "Estado da encomenda desconhecido";
//         break;
// }
//---------------agora com match-------------------
$resultado = match ($estadoEncomenda) {
    'em processamento' => "A encomenda sendo processada",
    'em rota' => "A encomendaestá em rota de entrega",
    'entregue' => "A encomenda foi entregue",
    default => "Estado da encomenda desconhecido"
};
echo '<br>';
echo $resultado;
echo '<br>';

//analisando multiplas condições de comparação
$nota = 7;
$resultado = match (true) {
    $nota >= 7 => "Aprovado com média $nota",
    $nota < 7 => "Reprovado por nota. Média: $nota",
    default => "Situação indefinida"
};
echo $resultado;

?>