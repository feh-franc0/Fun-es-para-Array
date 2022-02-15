<?php

$frutas = [
    "estacao"=>"maçã", 
    "doce"=>"uva", 
    "pêra", 
    "tropical","manga",
    "uva"
];

var_dump($frutas);

// traz os nomes das chaves de um array
var_dump(array_keys($frutas));

// tmb podemos trazer os index que tem o valor "uva"
var_dump(array_keys($frutas, "uva"));

// vai trazer um array apenas com os valores que tem dentro do array
var_dump(array_values($frutas));