<?php

// podemos verificar quais sao as diferenças que tem entre um array e outro

// vê apenas a diferenca entre o primeiro array, o que apenas o primeiro array tem de diferente dos outros arrays

$eua = ["vermelho", "azul", "branco"];
$cores = ["vermelho", "amarelo", "verde"];
$brasil = ["amarelo", "verde", "azul"];

var_dump(array_diff($eua,$cores, $brasil));