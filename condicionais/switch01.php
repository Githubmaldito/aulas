<?php
/*
EXPRESSÃO CONDICIONAL SWITCH

é semelhante ao if else 
o parametro é o valor a ser avaliado
cada 'case' verifica se o vaor é igual e executa o código correspondente
break ignora o resto do código

default é semelhante ao else, executa quando nenhum case é verdadeiro
*/
//exemplo com encomendas
$estadoEncomenda = 'em processamento';

switch ($estadoEncomenda){
    case 'em processamento':
        echo "A encomenda sendo processada";
        break;
    case 'em rota':
        echo "A encomendaestá em rota de entrega";
        break;
    case 'entregue':
        echo "A encomenda foi entregue";
        break;
    default:
        echo "Estado da encomenda desconhecido";
        break;
}

/*
exemplo com boolean
$socio = true;

switch ($socio){
    case true:
        echo "O usuario é socio";
        break;
    case false:
        echo "O usuario não é socio";
        break;

}

*/

?>