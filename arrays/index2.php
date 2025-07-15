<?php
#mais funções
#rry associativo
$pessoa =[
    'nome' => 'Paulo',
    'sobrenome' => 'César',
    'idade' => 22,
    'telefone' => '9',
    'email' => 'pauluscesarius@gmail'
];

#para apresentar um vlor do array
echo $cliente['nome'] . '<br>';

#verificar a existência de uma chave no array
var_dump(array_key_exists('nome', $pessoa)); // true

#transformar um array associativo em string
$resultado = implode(', ', $pessoa); // 'Paulo, César, 22, 9, pauluscesarius@gmail'

#criar um array a partir de outro array
#usando uma porção, ou seja, dividindo-o
$nomes = ['João', 'Maria', 'José', 'Ana', 'Pedro', 'César', 'Lucio'];
$nomes_divididos = array_slice($nomes, 4); // ['César', 'Lucio']
#os 
?>