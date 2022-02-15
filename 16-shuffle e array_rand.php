<?php

// podemos embaralhar/misturar e trazer algum dado do array de forma aleatoria

$cartas = ["A♥️", "K♥️", "2♥️", "3♥️", "4♥️"];

var_dump($cartas);
// ira trazer os dados do nosso array embaralhado no proprio array
var_dump(shuffle($cartas));
var_dump($cartas);

// ira trazer o indice de um dos nossos dados do array
var_dump($cartas[array_rand($cartas)]);

//podemos trazer randomicamente mais de um dado,apenas pondo quantos dados queremos que busce aleatoriamente
$resultado = array_rand($cartas, 2);
var_dump($cartas[$resultado[0]]);
var_dump($cartas[$resultado[1]]);