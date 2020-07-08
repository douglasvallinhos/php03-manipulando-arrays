<?php
namespace Alura;

class Calculadora{
    public function calculaMedia(array $notas): ?float{
        $quantidadeDenotas = count($notas);

        if ($quantidadeDenotas > 0){
            $soma = 0;
            foreach ($notas as $nota){
                $soma += $nota;
            }
            $media = $soma / $quantidadeDenotas;
            return  $media;
        }else{
            return null;
        }
    }
}
