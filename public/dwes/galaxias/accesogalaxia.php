<?php
/**/ 
namespace Dwes\Galaxias;

echo "<br> Namespace actual : " . __NAMESPACE__;

/**
 * Direccionamiento namespace
 
 * 1 -Sin direccionamiento
 * 2 -Direcciuonamiento relativo
 * 3 -Direccionamiento absoluto


 */

 /*Pasos para trabajar con namespaces
 1-definir namespace
 2-include o require del fichero que contiene la clase o lo que necesites
 3-usar use para utilizarlo*/ 
 
include "galaxia1.php";//Para poder trabajar con las clases y demas de la clase galaxia
 echo "<h2>Sin direccionamiento</h2>";
 echo "<br>Radio de la galaxia : :" . RADIO;
observar("Via Lactea");
$gl = new Galaxia();
Galaxia::muerte();

echo "<h2>Direccionamiento Relativo</h2>";
//a partir de mi ubicacion ACTUAL
include "pegaso/pegaso.php";

echo "<br>Radio de la galaxia :" . Pegaso\RADIO;
Pegaso\observar("Pegaso");
$gl = new Pegaso\Galaxia();//crea una galaxia pegaso
Pegaso\Galaxia::muerte();


echo "<h2>Direccionamkiento absoluto</h2>";
//navego desde el directorio raiz del servidor web
echo "<br>Radio de la galaxia : " . \Dwes\Galaxias\Pegaso\RADIO;
\Dwes\Galaxias\Pegaso\observar("Pegaso");
$gl = new \Dwes\Galaxias\Pegaso\Galaxia();
\Dwes\Galaxias\Pegaso\Galaxia::muerte();




echo "<hr>";
use const \Dwes\Galaxias\Pegaso\RADIO;
use function \Dwes\Galaxias\Pegaso\observar;
use \Dwes\Galaxias\Galaxia;

echo "<br> el radio es : " . RADIO;
echo "<br> observo en pegaso " . observar("Otra galaxia");
echo "<br>objeto de la galaxia generico : " . new Galaxia;

//Apodar clase -> alias
use \Dwes\Galaxias\Pegaso\Galaxia as Seiya;
use \Dwes\Galaxias\Galaxia as Galaxus;


echo "<br><br>";

$pg = new Seiya();
$glc = new Galaxus();

//Seiya\observar("Observando a Seiya");
//Galaxus\observar("Observando a Galaxus");