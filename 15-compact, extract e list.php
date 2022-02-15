<?php

// como podemos manipular arrays criando variaveis dinamicamente ou exxtraindo informaçoes de arrays gerando uma variavel ou pegando variaveis e compondo um array e tambem vamos entender como listar informaçoes dentro desse array e trabalhando novamente com dados dinamicos

// compact -> compactamos as informacoes em um array novo
$cidade = "São Paulo";
$estado = "SP";
$pais =  "Brasil";
$bairro = "";

var_dump(compact("cidade", "estado", "pais", "bairro"));

// extrai as chaves como nome da variavel e o valor como valor da variavel
$email = "hcode@hcode.com.br";
$pessoa = [
    "nome"=>"Djalma",
    "idade"=>"40",
    "email"=>"djalma@hcode.com.br"
];

// por padrao sobescreve, temos o extract($pessoa, EXTR_PREFIX_SAME, "var") e a variavel vai se chamar =>  $var_email
//tmb temos entre outros o EXTR_PREFIX_ALL que botara prefixo em todas as variaveis que pegarmos do array, começara com var_NOMECHAVE
var_dump(extract($pessoa));

var_dump($nome);
var_dump($idade);
var_dump($email);


// list extrai pondo o que antes era a chave e valor do array em uma variavel

$cartas = ["A♥️", "K♥️", "2♥️", "3♥️", "4♥️"];

//podemos deixar vazio a parte que nao queremos pegar, assim n atribuimos o valor do array em nenhuma so deixando o espaço vazio entre as virgulas
list($primeiraCarta, ,$terceiraCarta) = $cartas;

var_dump($primeiraCarta);
var_dump($terceiraCarta);