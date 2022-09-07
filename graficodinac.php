<?php
include('conexion.php');

include('servicio.php');
$sql = $sql ="SELECT COUNT(*) mesa , SUM(cargada) as cargada , SUM(electores) as electores FROM escrutinio ";



$result=mysqli_query($conectar, $sql);

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
    <style>
      #chartdiv3 {
          
                  width: 100%;
                  align-items: center;
                  height: 500px; 
                  margin: 50px auto;
                 }

                 @media only screen and (max-width: 1000px) {

#chartdiv3 {
width: 100%;
    height: 300px;
}
}




      </style>

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

    <?php
    while($mostrar= mysqli_fetch_array($result)){

?>
    <section>
        <div class="mesas">
            <p class="mesa1">Electores:</p>
            <p class="mesa2"> <?php echo $mostrar['electores'] ?> </p>
            <p class="mesa1">Mesas:</p>
            <p class="mesa2"> <?php echo $mostrar['mesa'] ?> </p>
            <p class="mesa1">Cargadas:</p>
            <p class="mesa2"> <?php echo $mostrar['cargada'] ?> </p>
        </div>

    </section>

    <?php
       }

       ?>

 









<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv3");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
var chart = root.container.children.push(
  am5percent.PieChart.new(root, {
    endAngle: 270
  })
);

// Create series
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
var series = chart.series.push(
  am5percent.PieSeries.new(root, {
    valueField: "value",
    categoryField: "category",
    endAngle: 270
  })
);

series.states.create("hidden", {
  endAngle: -90
});

// Set data
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
series.data.setAll([{

    <?php
    while($mostrar= mysqli_fetch_array($dinac)){

?>

  category: "FRENTE DE TODOS",
  value: <?php echo $mostrar['todosdinac'] ?>
}, {
  category: "CO.PE.BO. CON VOS PODEMOS",
  value: <?php echo $mostrar['copebodinac'] ?>
}, {
  category: "FRENTE AMPLIO CATAMARQUEÑO",
  value: <?php echo $mostrar['ampliodinac'] ?>
}, {
  category: "JUNTOS POR EL CAMBIO",
  value: <?php echo $mostrar['cambiodinac'] ?>
  
}, {
  category: "VOTOS EN BLANCO",
  value: <?php echo $mostrar['blancodinac'] ?>
}, {
  category: "FRENTE DE IZQUIERDA </br> Y TRABAJADORES",
  value: <?php echo $mostrar['izquierdadinac'] ?>
}]);

<?php
       }

       ?>



series.appear(1000, 100);

}); 





</script>


      <div id="chartdiv3">
    <h2 style="text-align: center;">Diputados Nacionales de la Provincia</h2>
   </div>



   <a href="index.php" class="volver">Volver Atras</a>




















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