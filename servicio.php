<?php
include('conexion.php');

$senadornacional = "SELECT SUM(copebosenac) as copebosenac  , SUM(ampliosenac) as ampliosenac , SUM(todossenac) as todossenac , SUM(cambiosenac) as cambiosenac , SUM(izquierdasenac) as izquierdasenac , SUM(blancosenac) as blancosenac FROM escrutinio  ";
$sena=mysqli_query($conectar, $senadornacional);


$diputadonacional = "SELECT  SUM(copebodinac) as copebodinac , SUM(ampliodinac) as ampliodinac , SUM(todosdinac) as todosdinac , SUM(cambiodinac) as cambiodinac , SUM(izquierdadinac) as izquierdadinac , SUM(blancodinac) as blancodinac   FROM escrutinio ";
$dinac=mysqli_query($conectar, $diputadonacional);

$diputadoprovincial = "SELECT SUM(copebodipro) as copebodipro , SUM(ampliodipro) as ampliodipro , SUM(todosdipro) as todosdipro , SUM(cambiodipro) as cambiodipro , SUM(izquierdadipro) as izquierdadipro , SUM(blancodipro) as blancodipro FROM escrutinio";
$dipro=mysqli_query($conectar, $diputadoprovincial);


?>