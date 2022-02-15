<?php

// vai filtrar resultados de um array, porem vai gerar um novo array preservando o array de origem

$dados = [
    [
        "modelo"=>"Onix",
        "ano"=>2020,
        "preco"=>50000,
        "fabricante"=>"gm"
    ],
    [
        "modelo"=>"Cruze",
        "ano"=>2021,
        "preco"=>100000,
        "fabricante"=>"gm"
    ],
    [
        "modelo"=>"Palio",
        "ano"=>1998,
        "preco"=>7500,
        "fabricante"=>"fiat"
    ]
];

// $filtrados = array_filter($dados, function($item){

//     // var_dump($item["fabricante"]);
//     // var_dump("=======================");

//     // return true;

//     return $item["fabricante"] === "gm";

//     // return $item["ano"] <= 2020;


// });

$filtrados = array_filter($dados, function($item, $chave){

    //return $item["fabricante"] === "gm";
    // var_dump($chave);
    return $item["ano"] <= 2020 && $chave >= 1;

}, ARRAY_FILTER_USE_BOTH);

var_dump($filtrados);