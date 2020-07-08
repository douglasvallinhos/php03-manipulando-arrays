<?php
namespace Alura;

require_once 'autoload.php';

$notas = [10,5,7,4];

// sort é utilizado para organizar o array em ordem crescente
sort($notas);
echo "A menor nota é $notas[0]".PHP_EOL;

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media){
    echo "A média das notas é $media";
}else{
    echo "Não foi possível Calcular a média";
}
