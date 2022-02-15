<?php

// como ordenar os valores de um array
// array_sort()

// ordem alfabetica
$carros = ["Corsa", "Palio", "Gol", "Uno", "Zafira", "Fiesta", "Civic"];

var_dump(sort($carros));

var_dump($carros);



// ordenar numericamente
$arquivos = [
    "3_imagem.jpg",
    "8_imagem.jpg",
    "2_imagem.jpg",
    "6_imagem.jpg",
    "9_imagem.jpg",
    "10_imagem.jpg",
    "1_imagem.jpg",
    "4_imagem.jpg",
    "7_imagem.jpg",
    "5_imagem.jpg",
];

sort($arquivos, SORT_NUMERIC);

var_dump($arquivos);


// Ordena mesmo tendo o numero no final do nome do "arquivo"
$arquivos = [
    "imagem6.jpg",
    "imagem3.jpg",
    "imagem9.jpg",
    "imagem7.jpg",
    "imagem5.jpg",
    "imagem2.jpg",
    "imagem10.jpg",
    "imagem4.jpg",
    "imagem1.jpg",
    "imagem8.jpg",
];

sort($arquivos, SORT_NATURAL);

var_dump($arquivos);