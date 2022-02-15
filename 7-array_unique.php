<?php

// como trazer uma unica vez dados que estao repetidos no mesmo array
$paises = [
    "Brasil",
    "Argentina",
    "Argentina",
    "100",
    200,
    200,
    100,
    "100"
];

var_dump(array_unique($paises));
// podemor passar tmb o paramentro de SORT_NUMERIC E SORT_STRING
// NO SORT_NUMERIC TRAZ SE REPETIDO APENAS OS NUMEROS
// SORT_STRING TRAZ SE REPETIDO AS STRINGS E OS NUMEROS TRANSFORMADOS EM STRING TMB