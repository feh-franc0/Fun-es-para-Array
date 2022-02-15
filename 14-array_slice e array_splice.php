<?php

// cortando e inserindo dados em qualquer parte do array

$paises = [
    "Estados Unidos",
    "Russia",
    "China",
    "Japão",
    "Egito",
    "Brasil"
];

// var_dump(array_slice($paises, 1, 4, true)); // fatia parte do array, true preserva os indices da chave

var_dump(array_splice($paises, 2, 4, ["França","Itália"]));// Adiciona, substitui e ate pode remove elementos

var_dump($paises);