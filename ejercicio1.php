<?php
$Ave[0] = "Castilla";
$Ave[1] = "Huacachilla";//No tengo idea pero lo pongo
$Ave[2] = "Chocollo";   
$Ave[3] = "Paloma";   
$Ave[4] = "Zacatillo";   
$Ave[5] = "Zanate";  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<div class="container-fluid">

<h1>Ejercicio1</h1>
<hr>


<?php

echo '<h3>Imprime los nombres de manera normal</h3>';

for ($i=0; $i <=5  ; $i++) { 
   
    echo "El pajarraco es: ".$Ave[$i]."<br>";
}
 

?>
<br>

<br>


<?php

echo '<h3>Ordena por Orden Alfabetico</h3>';

for ($i=0; $i <=5  ; $i++) { 
    sort($Ave);
    echo "El pajarraco es: ".$Ave[$i]."<br>";
}


?>


   
</div>
</body>
</html>