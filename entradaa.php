<?php
require_once "bibliotecaFuncoecs.php";

$op = "";
$opcaoPrincipal = "";
$opcaoConversao = "";
 
 
while ($opcaoPrincipal !=4){
 
echo "menu
1 conversao
4 sair\n ";
 
$opcaoPrincipal = readline (">>> ");
 
switch ($opcaoPrincipal){
 case 1:
    while ($opcaoPrincipal){
echo "menu
1- dolar para real
6 - sair";
 
$opcaoPrincipal = readline (">>> ");
while ($opcao){
    case 1:
$valor = readline ("digite o valor em dolar");
$cotacao = readline (" digite o valor...");
 
echo "valor em real: ", dolarParaReal ($valor, $cotacao);
break;
 case 6:
    echo "saindo....";
    break



 
    }
break;
 
case 4:
    echo "saindo";
default:
echo "opcao invalida";
 
 
    }
}
}
?>
