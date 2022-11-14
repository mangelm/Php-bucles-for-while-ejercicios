<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar tabla 3x3</title>
</head>
<body>
 

<?php 
  /*
    Crea un programa que genere una tabla html de 3 x 3
    que contenga los números del 1 al 9. (Solo realiza la parte de PHP)
   */
    
    echo "<table border=1>";
    echo "<caption><strong>Tabla</strong></caption>";
    for($i=0; $i <=2;$i++){
        echo"<tr>";
        for($j=0; $j <=2;$j++){
            echo"<td>Posición $i $j</td>";
        }
        echo"</tr>"; 
    }
    echo "</table>"; 
?> 
</body>