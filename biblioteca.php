<?php
namespace matematica {

function somar ($a, $b,$c) {
     return $a + $b+ $c; 
}
echo "resultado:", somar (10, 5, 5),"\n";


function divisao ($a, $b,) {
     return $a / $b;
}
echo "resultado:", divisao (10, 5), "\n";


function subtracao ($a, $b) {
    return $a - $b;
}
echo "resultado:", subtracao (10, 5),"\n";


 
function multiplicacao ($a, $b) {
    return $a * $b;
} 
 echo "resultado:", multiplicacao (10, 5),"\n";
}

namespace texto{
   function Concatenar($nome, $sobrenome){
    return $nome . " " . $sobrenome; 
   }

} 

namespace logica {
    function verificaIdade($idade){
        if($idade>=18){
            return "maior idade";
        
    } else {
        return "menor idade";
    }

    }
}















?>
