<?php

// JSON, faz com que linguagens diferentes se entendam
// transformando array em json e json em array

$veiculos = [
    "motos" => [

    ],
    "carros" => [
        "Corsa", 
        "Palio", 
        "Gol", 
        "Uno", 
        "Zafira", 
        "Fiesta", 
        "Civic"
        ]
];

// echo json_encode($veiculos); //temos o nosso array em formatação de JSON


// Transformando o JSON em array

$dados = '{"motos":[],"carros":["Corsa","Palio","Gol","Uno","Zafira","Fiesta","Civic"]}';

$dados = json_decode($dados, true);

var_dump($dados);