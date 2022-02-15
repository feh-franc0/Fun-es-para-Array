<?php

// para mapear o array, exxecutar alguma coisa em cada um dos elementos, percorrer o array gerando um novo array

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

$novoDados = array_map(function($item){

    $item["preco"] *= 1.1;

    return $item;

}, $dados);

var_dump($dados);
var_dump($novoDados);