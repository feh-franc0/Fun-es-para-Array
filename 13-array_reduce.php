<?php

// uma maneira de reduzir os valores do nosso array em apenas um valor

$notas = [200, 100, 50, 50, 5, 5, 5, 5, 2];

// array, funcao que fara o que deseja com todos os valores do array, valor de inicio
$total = array_reduce($notas, function($acumulado, $valor){

    return $acumulado + $valor;
    
},0);

var_dump($total);