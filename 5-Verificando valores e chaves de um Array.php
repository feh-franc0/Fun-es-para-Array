<?php

$paises = ["Brasil", "Argentina", "Chile", "Colombia", "Equador", "numero"=>"10"];

var_dump($paises);

// retorna em bool se tem ou nao tem o valor Chile no nosso array 
//temos dentro de in_array a comparação de tipo,basta passar "true" dps de por o nome do array
var_dump(in_array("Chile", $paises));
var_dump(in_array(10, $paises,true));

// retorna o index do array que esta o valor Chile
//temos dentro de array_search a comparação de tipo,basta passar "true" dps de por o nome do array
var_dump(array_search("Chile", $paises));
var_dump(array_search(10, $paises, true));


// verifica se existe uma chave com o nome "numero" em nosso array
var_dump(array_key_exists("numero", $paises));

