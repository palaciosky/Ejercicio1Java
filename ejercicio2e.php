<?php
#la wea pa las variables

#$DIAS[0] = 

if (isset($_POST["cant1"])) {
    if (is_numeric($_POST["cant1"])) {
        # code...
        $count = $_POST["cant1"];  

        echo '
        <br>
        <center><h2>Formularios de los datos de los Empleados</h2></center>
        <hr>
        <div class="container ">
        <form  action="ejercicio2f.php" method="post">
        ';
        $base = "";
        $base2 = "";

        for ($i=1; $i <= $count ; $i++) { 
          
            $base = $base.'<div class="shadow-lg" style="padding:5%;" ><div class="form-group"><h4>Datos del '.$i.' Empleado</h4>
            <label for="textnom'.$i.'">El nombre del Empleado N°'.$i.'</label><br>
            <input type="text" class="form-control " name="textnom'.$i.'" id="textnom'.$i.'" required>
            </div>
            <div class="form-group">
            <label for="textd1'.$i.'">Ingrese las horas del 1 dia </label><br>
            <input type="number" class="form-control"   name="textd1'.$i.'" id="textd1'.$i.'" required>
            </div>
            <div class="form-group">
            <label for="textd2'.$i.'">Ingrese las horas del 2 dia </label><br>
            <input type="number" class="form-control" name="textd2'.$i.'" id="textd2'.$i.'" required>
            </div>
            <div class="form-group">
            <label for="textd3'.$i.'">Ingrese las horas del 3 dia </label><br>
            <input type="number" class="form-control" name="textd3'.$i.'" id="textd3'.$i.'" required>
            </div>
            <div class="form-group">
            <label for="textd4'.$i.'">Ingrese las horas del 4 dia </label><br>
            <input type="number" class="form-control" name="textd4'.$i.'" id="textd4'.$i.'" required>
            </div>
            <div class="form-group">
            <label for="textd5'.$i.'">Ingrese las horas del 5 dia </label><br>
            <input type="number" class="form-control" name="textd5'.$i.'" id="textd5'.$i.'" required>
            </div>
            <div class="form-group">
            <label for="textd6'.$i.'">Ingrese las horas del 6 dia </label><br>
            <input type="number" class="form-control" name="textd6'.$i.'" id="textd6'.$i.'" required>
            </div><br></div>
            <hr>
            ';
           

           }
           echo $base.'<input type="hidden" name="txtcant" value="'.$count.'">
           
           <input type="submit" class="btn btn-lg btn-primary" value="     Enviar    ">';
           echo '</div>';
    
       echo '
       <link rel="stylesheet" href="css\bootstrap.min.css">
       <script src="js/bootstrap.min.js"></script>   
       </form>';
    }
}
?>

