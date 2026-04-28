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


//atvd3
Namespace saude {
    //$agua = 0.35;
    //$frequencia = 220;

function calcularmc ($peso, $altura) {
    return $peso / $altura**2;
}


function valorIdealAgua ($peso) {
    $agua = 0.35;
    return $peso * $agua;
}

function frequenciaCardiacaMaxima ($idade) {
    $frequencia = 220;
    return $$frequencia = 220 - $idade;
}



function LibrasParaQuilo ($libras) {
    $libras = 0.4536;
    return $libras * 0.4536;
}


function CaloriasBasais ($peso, $idade, $sexo, $altura){

if ($sexo = "masculino"){
return 66.5 + (13.75 * $peso) + (5.003 * $altura) - (6.75 * $idade);
}
else {
    ($sexo = "feminino");
return 655.1 + (9.563 * $peso) + (1.850 * $altura) - (6.75 * $idade);
}

}

}











?>