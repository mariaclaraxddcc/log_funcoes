<?php

require_once "bibliotecaFuncoecs.php";

use function conversao\dolarParaReal;
echo "Dolar Para Real: ", dolarparaReal (10, 5);

use function conversao\euroParaReal;
echo "Euro Para Real: ", europaraReal (10, 5.85);

use function conversao\pesoParaReal;
echo "Peso Para Real: ", pesoparaReal (10, 0.0035);

use function conversao\libraParaReal;
echo "Libra Para Real: ", libraparaReal (10, 6.75 );

use function conversao\ieneParaReal;
echo "Iene Para Real: ", ieneparaReal (10, 0.031);







?>