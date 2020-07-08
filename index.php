<?php
namespace Alura;

spl_autoload_register(
    function (string $namespaceClasse): void {
        $diretorio = "/src";
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse);
        @include_once getcwd() . $diretorio . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    }
);

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
