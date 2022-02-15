<?php

// vamos contar os valores de um array,conta tmb quantas vezes foram repetidos os valores do array (CONTA APENAS STRINGS OU NUMEROS INTEIROS)

$valores = [
    "Banana",
    "Maçã",
    "Abacaxi",
    "Maçã",
    "Banana",
    "Maçã",
    15,
    15,
    15,
    30,
    10
];

var_dump(array_count_values($valores));