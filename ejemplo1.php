<?php
$dias[0] = "Domingo";//Asigna el valor DOMINGO a la primera posicion de la maz dias
$dias[1] = "Lunes";//Asigna el valor Lunes a la segunda posicion de la Maz
$dias[2] = "Martes";   //Asigna el valor Lunes a la tercera posicion de la Maz
$dias[3] = "Miercoles";   //Asigna el valor Lunes a la cuarta posicion de la Maz


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de Arrays</title>
</head>
<body bgcolor="123456" ><font face="Arial" color="white" >
    <center><h1>Uso de Array uno</h1><b></center>
    <hr size="10" ><p><br>
    <table width="60%"aling="center"  >
    <tr>
      <td bgcolor="#168999"><font face="Arial" color="white" ><b>
        <center>
        <?php
        print ("Mi dia favorito es el ".$dias[1]."<br>");
        ?>
        </center>
    
     </td>
    </tr>
    
    </table>
</body>
</html>