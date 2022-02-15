<?php

// como ordenar um array de maneira reversa 
$navegadores = ["Chrome", "Firefox", "Opera", "Brave", "Edge"];

var_dump(array_reverse($navegadores));

// preserva sa chaves reverte apenas os valores
var_dump(array_reverse($navegadores, true));