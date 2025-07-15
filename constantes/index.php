<?php
# constntes são imutáveis, ou seja, não podem ser alteradas
#para definir uma constante, usa-se o define()
define("nome", "Lucio");
#o primeiro parâmetro é o nome da constante, o segundo é o valor
define("idade", 22);
define("altura", 1.80);

#para exibir o valor de uma constante, usa-se o nome da constante sem o cifrão ($) 
echo "Meu nome é " . nome . ", tenho " . idade . " anos e minha altura é " . altura . " metros.";

?>