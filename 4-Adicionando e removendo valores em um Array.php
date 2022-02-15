<?php

$cores = ["Vermelho", "Preto", "Amarelo"];

var_dump($cores);

// adiciona no final do array
var_dump(array_push($cores, "Branco", "Azul", "Verde"));

var_dump($cores);

// remove do final
var_dump(array_pop($cores));

var_dump($cores);

// adiciona no inicio do array
var_dump(array_unshift($cores, "Laranja"));

var_dump($cores);

// remove o primeiro elemento do nosso array
var_dump(array_shift($cores));

var_dump($cores);