<?php
//include('conexion.php');

//include('servicio.php');
//$sql = $sql ="SELECT COUNT(*) mesa , SUM(cargada) as cargada , SUM(electores) as electores FROM escrutinio ";



//$result=mysqli_query($conectar, $sql);

?>

<!DOCTYPE html>
<html lang="eS">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elecciones Provincia de catamarca 2021</title>
   
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
<div class="grafico3">
    <a href="http://juscatamarca.gob.ar/Elecciones2021/Elecciones%20Catamarca%202021.apk" class="boton-gr"> Descargar Aplicacion para Android <img src="imagenes\download-icon-56591-450x450.png" alt=""></a>
    </div>
    <?php
    //while($mostrar= mysqli_fetch_array($result)){

?>
    <section>
        <div class="mesas">
            <p class="mesa1">Electores:</p>
            <p class="mesa2"> 20 <?php // echo $mostrar['electores'] ?> </p>
            <p class="mesa1">Mesas:</p>
            <p class="mesa2"> 60 <?php // echo $mostrar['mesa'] ?> </p>
            <p class="mesa1">Cargadas:</p>
            <p class="mesa2"> 12230 <?php // echo $mostrar['cargada'] ?> </p>
        </div>

    </section>

    <?php
      // }

       ?>

    <section class="provincias">
        <div class="municipio1">
            <h3>Capital</h3>
            <img src="imagenes/capi.jpg" alt="">
           
            <div class="municipio2">
                <a class="boton-dpto" href="capital.php">capital</a>
                
            </div>
        </div>

        <div class="municipio1">
            <h3>Ancasti</h3>

            <img src="imagenes/ancas.jpg" alt="">
           
            <div class="municipio2">
                <a class="boton-dpto" class="boton" href="ancasti.php">Ancasti </a>
            </div>
        </div>

        <div class="municipio1">
            <h3>Paclin</h3>
            <img src="imagenes/paclin.jpg" alt="">
           
            <div class="municipio2">
                <a class="boton-dpto" href="paclin.php">Paclin</a>
            </div>
        </div>


        <div class="municipio1">

            <h3>Valle Viejo</h3>
            <img src="imagenes/vviejo.jpg" alt="">
           
            <div class="municipio2">
                <a class="boton-dpto" href="v.viejo.php">V. Viejo</a>
            </div>
        </div>


        
        <div class="municipio1">
            <h3>Antofagasta de la Sierra</h3>
            <img src="imagenes/antof.jpg" alt="">
           
            <div class="municipio2">
                <a class="boton-dpto" href="ant.sierra.php">Ant. Sierra</a>
            </div>
        </div>




        <div class="municipio1">
            <h3>Capayan</h3>
            <img src="imagenes/capay.jpg" alt="">
           
            <div class="municipio2">
            
            <a class="boton-dpto" href="capayan.php" value="">Capayan</a>
                <a class="boton-dpto" href="huillapima.php">Huillapima</a>
                <a class="boton-dpto" href="capayan-dpto.php">Total Escrutinio</a>
            </div>
        </div>





        <div class="municipio1">
            <h3>La Paz</h3>
            <img src="imagenes/lapax.jpg" alt="">
           
            <div class="municipio2">
                <a class="boton-dpto" href="recreo.php">Recreo</a>
                <a class="boton-dpto" href="icaño.php">Icaño</a>
                <a class="boton-dpto" href="lapaz-dpto.php">Total Escrutinio</a>
            </div>
        </div>


        <div class="municipio1">
            <h3>El Alto</h3>
            <img src="imagenes/elalto.jpg" alt="">
        
            <div class="municipio2">
                <a class="boton-dpto" href="elalto.php">El Alto</a>
                <a class="boton-dpto" href="tapso.php">Tapso</a>
                <a class="boton-dpto" href="elalto-dpto.php">Total Escrutinio</a>
            </div>
        </div>



        <div class="municipio1">
            <h3>Santa Rosa</h3>
            <img src="imagenes/sanrosa.jpg" alt="">
        
            <div class="municipio2">
                <a class="boton-dpto" href="sta.rosa.php">Sta. Rosa</a>
                <a class="boton-dpto" href="losaltos.php">Los Altos</a>
                <a class="boton-dpto" href="santarosa-dpto.php">Total Escrutinio</a>
            </div>
        </div>




        <div class="municipio1">
            <h3>Andalgala</h3>
            <img src="imagenes/andal.jpg" alt="">
         
            <div class="municipio2">
                <a class="boton-dpto" href="andalgala.php">Andalgala</a>
                <a class="boton-dpto" href="aconquija.php">Aconquija</a>
                <a class="boton-dpto" href="andalgala-dpto.php">Total Escrutinio</a>
            </div>
        </div>





       



        <div class="municipio1">
            <h3>Santa Maria</h3>
            <img src="imagenes/santamar.jpg" alt="">
          
            <div class="municipio2">
                <a class="boton-dpto" href="santamaria.php">Santa Maria</a>
                <a class="boton-dpto" href="sanjose.php">San Jose</a>
                <a class="boton-dpto" href="santamaria-dpto.php">Total Escrutinio</a>
            </div>
        </div>

        <div class="municipio1">
            <h3>Poman</h3>
            <img src="imagenes/poman.jpg" alt="">
           
            <div class="municipio2">
                <a class="boton-dpto" href="poman.php">Poman</a>
                <a class="boton-dpto" href="mutquin.php">Mutquin</a>
                <a class="boton-dpto" href="saujil.php">Saujil</a>
                <a class="boton-dpto" href="poman-dpto.php">Total Escrutinio</a>
            </div>
        </div>

        <div class="municipio1">

            <h3>Fray Mamerto Esquiu</h3>
            <img src="imagenes/fme.jpg" alt="">
           
            <div class="municipio2">
                <a class="boton-dpto" href="f.m.e-centro.php">F.M.E Centro</a>
                <a class="boton-dpto" href="f.m.e-norte.php">F.M.E Norte</a>
                <a class="boton-dpto" href="f.m.e-sur.php">F.M.E Sur</a>
                <a class="boton-dpto" href="f.m.e.php">Total Escrutinio</a>
            </div>
        </div>


        <div class="municipio1">
            <h3>Tinogasta</h3>
            <img src="imagenes/tino.jpg" alt="">
       
            <div class="municipio2">
                <a class="boton-dpto" href="tinogasta-sur.php">Tinogasta Sur</a>
                <a class="boton-dpto" href="tinogasta-centro.php">Tinogasta Centro</a>
                <a class="boton-dpto" href="tinogasta-norte.php">Tinogasta Norte</a>
                <a class="boton-dpto" href="fiambala.php">Fiambala</a>
                <a class="boton-dpto" href="tinogasta-dpto.php">Total Escrutinio</a>
            </div>
        </div>


        <div class="municipio1">
            <h3>Ambato</h3>
            <img src="imagenes/amba.jpg" alt="">
         
            <div class="municipio2">
                <a class="boton-dpto" href="elrodeo.php">El Rodeo</a>
                <a class="boton-dpto" href="lapuerta.php">La Puerta</a>
                <a class="boton-dpto" href="lasjuntas.php">Las Juntas</a>
                <a class="boton-dpto" href="losvarela.php">Los Varela</a>
                <a class="boton-dpto" href="ambato-dpto.php">Total Escrutinio</a>
            </div>
        </div>


        <div class="municipio1">
            <h3>Belen</h3>
            <img src="imagenes/belen.jpg" alt="">
           
            <div class="municipio2">
                <a class="boton-dpto" href="belen.php">Belen</a>
                <a class="boton-dpto" href="londres.php">Londres</a>
                <a class="boton-dpto" href="s.fernando.php">S. Fernando</a>
                <a class="boton-dpto" href="hualfin.php">Hualfin</a>
                <a class="boton-dpto" href="quemado.php">C. Quemado</a>
                <a class="boton-dpto" href="p.sanjose.php">P. San Jose</a>
                <a class="boton-dpto" href="villavil.php">Villa Vil</a>
                <a class="boton-dpto" href="p.c.quemado.php">P. C. Quemado</a>
                <a  class="boton-dpto" href="pzodepiedra.php">Pzo De Piedra</a>
                <a class="boton-dpto" href="belen-dpto.php">Total Escrutinio</a>
            </div>
        </div>


        <div class="grafico">
    <a href="graficosenadores.php" class="boton-gr">Porcentaje por partido de Senadores Nacionales de la Provincia</a>
    <a href="graficodinac.php" class="boton-gr">Porcentaje por partido de Diputados Nacionales de la Provincia</a>
    <a href="graficodipro.php" class="boton-gr">Porcentaje por partido de Diputados Provinciales de la Provincia</a>
    <a href="http://juscatamarca.gob.ar/Elecciones2021/Elecciones%20Catamarca%202021.apk" class="boton-gr">Descargar Aplicacion Para Android <img src="imagenes\download-icon-56591-450x450.png" alt=""></a>
</div>

    </section>
 
    <div class="grafico2">
    <a href="graficosenadores.php" class="boton-gr">Porcentaje por partido de Senadores Nacionales de la Provincia</a>
    <a href="graficodinac.php" class="boton-gr">Porcentaje por partido de Diputados Nacionales de la Provincia</a>
    <a href="graficodipro.php" class="boton-gr">Porcentaje por partido de Diputados Provinciales de la Provincia</a>
    <a href="http://juscatamarca.gob.ar/Elecciones2021/Elecciones%20Catamarca%202021.apk" class="boton-gr"> Descargar Aplicacion para Android <img src="imagenes\download-icon-56591-450x450.png" alt=""></a>
</div>


    <script src="js/clock.js"></script>

    
   

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