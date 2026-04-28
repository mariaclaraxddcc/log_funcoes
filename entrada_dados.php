<?php

require_once "bibliotecaFuncoecs.php";

use function geometria\areaQuadrado;
echo "area quadrado: ", areaQuadrado (10), "\n";

use function geometria\areaRetangulo;
echo "area retangulo: ", areaRetangulo (50, 20),"\n";

use function geometria\areaTriangulo;
echo "area triangulo: ", areaTriangulo (10, 35),"\n";

use function geometria\areaCirculo;
echo "area circulo: ", areaCirculo (4,3.14),"\n";

use function geometria\areaTrapezio;
echo "area trapezio: ", areaTrapezio (30, 20, 10 ),"\n";







?>