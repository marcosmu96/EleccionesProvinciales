<?php
include('conexion.php');


$sql ="SELECT COUNT(*) mesa , SUM(cargada) as cargada , SUM(electores) as electores,
  SUM(copebosenac) as copebosenac , SUM(copebodinac) as copebodinac , SUM(copebosepro) as copebosepro , SUM(copebocon) as copebocon , SUM(copebodipro) as copebodipro,
  SUM(ampliosenac) as ampliosenac , SUM(ampliodipro) as ampliodipro , SUM(ampliosepro) as ampliosepro , SUM(ampliocon) as ampliocon , SUM(ampliodinac) as ampliodinac, 
  SUM(todossenac) as todossenac   , SUM(todosdipro) as todosdipro   , SUM(todosdinac) as todosdinac , SUM(todossepro) as todossepro     , SUM(todosint) as todosint      , SUM(todoscon) as todoscon,
  SUM(cambiosenac) as cambiosenac   , SUM(cambiodipro) as cambiodipro   , SUM(cambiodinac) as cambiodinac , SUM(cambiosepro) as cambiosepro     , SUM(cambioint) as cambioint      , SUM(cambiocon) as cambiocon,
  SUM(izquierdasenac) as izquierdasenac , SUM(izquierdadinac) as izquierdadinac ,  SUM(izquierdacon) as izquierdacon , SUM(izquierdadipro) as izquierdadipro , 
  SUM(integradorcon) as integradorcon , 
  SUM(santarosaint) as santarosaint , SUM(santarosacon) as santarosacon , 
  SUM(somosfmecon) as somosfmecon , 
  SUM(sanjosecon) as sanjosecon , 
  SUM(participacioncon) as participacioncon ,
  SUM(nulosenac) as nulosenac , SUM(nulodinac) as nulodinac , SUM(nulosepro) as nulosepro , SUM(nulocon) as nulocon , SUM(nulodipro) as nulodipro, SUM(nuloint) as nuloint ,
  SUM(recurridosenac) as recurridosenac , SUM(recurridodinac) as recurridodinac , SUM(recurridosepro) as recurridosepro , SUM(recurridocon) as recurridocon , SUM(recurridodipro) as recurridodipro, SUM(recurridoint) as recurridoint  ,
  SUM(blancosenac) as blancosenac , SUM(blancodinac) as blancodinac , SUM(blancosepro) as blancosepro , SUM(blancocon) as blancocon , SUM(blancodipro) as blancodipro, SUM(blancoint) as blancoint  ,
  SUM(impugnado) as impugnado,  (SUM(copebosenac) + SUM(ampliosenac) + SUM(cambiosenac) + SUM(todossenac) + SUM(izquierdasenac) + SUM(recurridosenac) + SUM(nulosenac) + SUM(impugnado) +
SUM(blancosenac)) * 100 / SUM(electores)  as total

FROM escrutinio WHERE muninombre = 'TINOGASTA SUR'";

$result=mysqli_query($conectar, $sql);

?>

<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elecciones Provincia de catamarca 2021</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header>


        <div class="cabezera">
            <img src="imagenes/escudo2.PNG" alt="">
            
            <section class="titulo">
            <h2>Elecciones 2021</h2>
            <h1>Provincia de Catamarca</h1>
            </section>

            <section class="clock">
                <div class="hours">
                  <div class="first">
                    <div class="number">0</div>
                  </div>
                  <div class="second">
                    <div class="number">0</div>
                  </div>
                </div>
                <div class="tick">:</div>
                <div class="minutes">
                  <div class="first">
                    <div class="number">0</div>
                  </div>
                  <div class="second">
                    <div class="number">0</div>
                  </div>
                </div>
                <div class="tick">:</div>
                <div class="seconds">
                  <div class="first">
                    <div class="number">0</div>
                  </div>
                  <div class="second infinite">
                    <div class="number">0</div>
                  </div>
                </div>
            </section>
     
        </div>

    </header>
    <section>


    


    <?php
    while($mostrar= mysqli_fetch_array($result)){

?>
        <div class="mesas">
            <p class="mesa1">Electores:</p><p class="mesa2"> <?php echo $mostrar['electores'] ?>  </p>
            <p class="mesa1">Mesas:</p><p class="mesa2"> <?php echo $mostrar['mesa'] ?> </p>
            <p class="mesa1">Cargadas:</p><p class="mesa2">  <?php echo $mostrar['cargada'] ?> </p>
        </div>
       
    </section>
    

    <div class="titulo-dpto">
    <h5>TINOGASTA</h5>
    </div>


    <table class="ficha">
    


      <tr class="tit-ficha">
        <td>Nº</td>
        <td>PARTIDO O ALIANZA</td>
        <td>SENADOR NACIONAL</td>
        <td>DIPUTADO NACIONAL</td>
        <td>DIPUTADO PROVINCIAL</td>
        <td>SENADOR PROVINCIAL</td>
        <td>INTENDENTE</td>
        <td>CONCEJAL</td>
      </tr>

      <tr>
        <td>219 <br> 506</td>
        <td>CO.PE.BO. CON VOS PODEMOS</td>
        <td><?php echo $mostrar['copebosenac'] ?></td>
        <td><?php echo $mostrar['copebodinac'] ?></td>
        <td><?php echo $mostrar['copebodipro'] ?></td>
        <td><?php echo $mostrar['copebosepro'] ?></td>
        <td> </td>
        <td><?php echo $mostrar['copebocon'] ?></td>
      </tr>

     
      <tr>
        <td>501</td>
        <td>FRENTE AMPLIO CATAMARQUEÑO</td>
        <td><?php echo $mostrar['ampliosenac'] ?></td>
        <td><?php echo $mostrar['ampliodinac'] ?></td>
        <td><?php echo $mostrar['ampliodipro'] ?></td>
        <td><?php echo $mostrar['ampliosepro'] ?></td>
        <td>  </td>
        <td><?php echo $mostrar['ampliocon'] ?></td>
      </tr>
      <tr>
        <td>502</td>
        <td>FRENTE DE TODOS</td>
        <td><?php echo $mostrar['todossenac'] ?></td>
        <td><?php echo $mostrar['todosdinac'] ?></td>
        <td><?php echo $mostrar['todosdipro'] ?></td>
        <td><?php echo $mostrar['todossepro'] ?></td>
        <td></td>
        <td><?php echo $mostrar['todoscon'] ?></td>
      </tr>
      <tr>
        <td>503</td>
        <td>JUNTOS POR EL CAMBIO</td>
        <td><?php echo $mostrar['cambiosenac'] ?></td>
        <td><?php echo $mostrar['cambiodinac'] ?></td>
        <td><?php echo $mostrar['cambiodipro'] ?></td>
        <td><?php echo $mostrar['cambiosepro'] ?></td>
        <td></td>
        <td><?php echo $mostrar['cambiocon'] ?></td>
      </tr>
      <tr>
        <td>504</td>
        <td>FRENTE DE IZQUIERDA Y TRABAJADORES</td>
        <td><?php echo $mostrar['izquierdasenac'] ?></td>
        <td><?php echo $mostrar['izquierdadinac'] ?></td>
        <td><?php echo $mostrar['izquierdadipro'] ?></td>
        <td></td>
        <td></td>
        <td><?php echo $mostrar['izquierdacon'] ?></td>
      </tr>
      <tr>
        <td>419</td>
        <td>MOV.INTEGRADOR SANTARROSEÑO</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $mostrar['integradorcon'] ?></td>
      </tr>
      <tr>
        <td>406</td>
        <td>UNIDOS POR SANTA ROSA</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $mostrar['santarosacon'] ?></td>
      </tr>
      <tr>
        <td>403</td>
        <td>SOMOS FRAY MAMERTO ESQUIU</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $mostrar['somosfmecon'] ?></td>
      </tr>
      <tr>
        <td>505</td>
        <td>FRENTE UNIDOS POR SAN JOSE</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $mostrar['sanjosecon'] ?></td>
      </tr>
      
      <tr>
        <td>508</td>
        <td>PARTICIPACION POPULAR</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $mostrar['participacioncon'] ?></td>
      </tr>
      <tr class="votos">
        <td></td>
        <td>VOTOS NULOS</td>
        <td><?php echo $mostrar['nulosenac'] ?></td>
        <td><?php echo $mostrar['nulodinac'] ?></td>
        <td><?php echo $mostrar['nulodipro'] ?></td>
        <td><?php echo $mostrar['nulosepro'] ?></td>
        <td></td>
        <td><?php echo $mostrar['nulocon'] ?></td>
      </tr>
      <tr class="votos">
        <td></td>
        <td>VOTOS RECURRIDOS</td>
        <td><?php echo $mostrar['recurridosenac'] ?></td>
        <td><?php echo $mostrar['recurridodinac'] ?></td>
        <td><?php echo $mostrar['recurridodipro'] ?></td>
        <td><?php echo $mostrar['recurridosepro'] ?></td>
        <td></td>
        <td><?php echo $mostrar['recurridocon'] ?></td>
      </tr>
      <tr class="votos">
        <td></td>
        <td>VOTOS EN BLANCO</td>
        <td><?php echo $mostrar['blancosenac'] ?></td>
        <td><?php echo $mostrar['blancodinac'] ?></td>
        <td><?php echo $mostrar['blancodipro'] ?></td>
        <td><?php echo $mostrar['blancosepro'] ?></td>
        <td></td>
        <td><?php echo $mostrar['blancocon'] ?></td>
      </tr>
      <tr class="votos">
        <td></td>
        <td>VOTOS DE IDENTIDAD INPUGNADA</td>
        <td><?php echo $mostrar['impugnado'] ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr class="votos">
        <td></td>
        <td>PORCENTAJE DE VOTANTES</td>
        <td><?php echo $mostrar['total'] ?> %</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>


   
    </table>

    <?php
       }

       ?>

<script src="js/clock.js"></script>

<h3 class="deslizar">Deslizar >>>></h3>

<a href="index.php" class="volver">Volver Atras</a>


<footer>

        <div class="cabezera footer">
            <div class="titulo titulo2">
                <h2>Elecciones 2021</h2>

            </div>

            <img class="img2" src="imagenes/escudo2.PNG" alt="">

            <section class="titulo titulo3">
                <h2>Elecciones 2021</h2>
                <h1>Provincia de Catamarca</h1>
            </section>

            
            <div class="titulo">
                <h2 class="elec1">Elecciones 2021</h2>

            </div>



        </div>
    </footer>


</body>
</html>