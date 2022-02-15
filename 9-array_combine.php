<?php

// combinação de arrays
// o primeiro vai ser as chaves desse array
// o segundo vai ser os valores nas posições subsequentes
// assim gerando um terceiro unindo os dois

$campos = ["nome", "email", "idade"];
$valores = ["Glaucio", "glaucio@hcode.com.br", "45"];

var_dump(array_combine($campos, $valores));