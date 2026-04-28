<?php

//atvd1
namespace conversao {
 
    function dolarParaReal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function euroParaReal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function pesoParaReal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function libraParaReal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function ieneParaReal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
}



//atvd2
Namespace geometria {
//$pi = 3,14


function areaQuadrado ($lado) {
    return $lado * $lado;
}


function areaRetangulo ($base, $altura) {
    return $base * $altura;
}


function areaTriangulo ($base, $altura) {
    return $base * $altura/2;
}


function areaCirculo ($raio, $pi ) {
    $pi = 3.14; 
    return $raio**2 * 3.14;
}


function areaTrapezio ($baseMaior, $baseMenor, $altura ) {
    return (($baseMaior + $baseMenor) * $altura) /2;
}

}



























?>