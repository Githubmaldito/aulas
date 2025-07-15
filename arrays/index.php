<?php
#SOBRE ARRAYS E AS FUNÇÕES ASSOCIADAS A ELES

#as funções:

#criação do array
$nomes = ['João', 'Maria', 'José', 'Ana'];
#outra forma de criar um array
$nomes = array('João', 'Maria', 'José', 'Ana');

#verifica se uma variável é um array
$resultado = is_array($nomes);

#saber quantos eleemntos tem um array (similar ao len do Python)
$resultado = count($nomes);

#adicionar um elemento no final do array usando o push
array_push($nomes, 'Pedro');

#adicionar ao inicio do array
array_unshift($nomes, 'César');

#retirar um valor de um array usando o pop()
$resultado = array_push($nomes);

#retirar usando o shift  (oposto do pop())
$resultado = array_shift($nomes);

#para eliminar um elemento a partir do índice
unset($nomes[2]); // remove o elemento no índice 2, terceiro elemento do array
?>