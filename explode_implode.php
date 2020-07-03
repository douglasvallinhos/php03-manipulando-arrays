<?php

$nomes = "Douglas, Fran, Valdir, Stella, Jean, Carol";
// explode é utilizado para fazer uma string virar um array
$nomes_array = explode(", ", $nomes);

foreach ($nomes_array as $nome){
    echo "$nome".PHP_EOL;
}
//implode é utilizado para fazer um array virar uma string
$nomes_juntos = implode(", ",$nomes_array);

echo "$nomes_juntos".PHP_EOL;
