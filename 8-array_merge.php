<?php

// podemos mescrar e unir nossos arrays como se fosse apenas um
// caso a chave tenha o nome igual ao do outro array ira ser sobescrito o valor do ultimo array ou do ultimo index

$frutas = ["tropical"=>"maçã", "banana", "abacaxi"];

$outrasFrutas = ["limão", "maçã", "tropical"=>"laranja"];

var_dump(array_merge($frutas, $outrasFrutas));