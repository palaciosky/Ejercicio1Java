<?php
if (isset($_POST["txtcant"])) {
    $cant = $_POST["txtcant"];
    # code...
    echo '
    <div class="container-fluid">
    <br>
    <center><h1>Resultados del calculo</h1></center>
    <br>
    <br>
    <br>
    <div class="row container-fluid">
    
   ';
   $sum2 = 0; 
   $sum = 0;
    for ($i=1; $i <= $cant ; $i++) { 
      echo '<div class=" shadow-lg p-3 mb-5 bg-light rounded col-lg-5 " >';
      echo '<table class="table ">
      <tr><th scope="col" >';
      echo 'El Empleado : '.$_POST["textnom$i"].
      '</th></tr>';
     
      echo '<tr><td>El 1 dia trabajo '.$_POST["textd1$i"].'h</td></tr>';
      
      echo '<tr><td>El 2 dia trabajo '.$_POST["textd2$i"].'h</td></tr>';
     
      echo '<tr><td>El 3 dia trabajo '.$_POST["textd3$i"].'h</td></tr>';
     
      echo '<tr><td>El 4 dia trabajo '.$_POST["textd4$i"].'h</td></tr>';
     
      echo '<tr><td>El 5 dia trabajo '.$_POST["textd5$i"].'h</td></tr>';
      
      echo '<tr><td>El 6 dia trabajo '.$_POST["textd6$i"].'h</td></tr>';
      
      echo '<tr><td>La suma de horas es '.($sum = ($_POST["textd1$i"]+$_POST["textd2$i"]+$_POST["textd3$i"]+$_POST["textd4$i"]+$_POST["textd5$i"]+$_POST["textd6$i"])).'h</td></tr>' ;
      echo '
      </table>
      </div>

      ';
      echo '<div class="col-lg-1 bg-white">
    <br>
    </div>';
      $sum2 = ($sum2 + $sum) ;
     
    }
    
    echo'<br></div>';
    echo '<div class="container bg-light shadow-none p-3 mb-5" ><h3>La sumatoria de Horas de los empleados son '.$sum2.' h';
    echo '<br>';
    echo 'El costo de salarios es: ₡ '.($sum2 * 10);
    echo '<a href="ejercicio4.php" class="btn btn-danger" >Go Back xd...</a><br><br><br></div></body>';
    echo '</h3></div>
    <br>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>   
    </div>
    </div>
    ';
}
?>