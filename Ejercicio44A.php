<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impares entre 23 y 58, 3 caracteres en linea</title>
</head>
<body>
 

<?php 
    // Modifica el programa anterior para que en 
    //cada línea se pinten solo se pinten 3 números 
    //y los siguientes en la siguiente línea de 
    //manera que quedaría algo así: 
    //23 25 27 
    //29 31 33
    echo "Bucle For"."<br>";
    $contador = 0;
    for ($i = 23; $i < 59; $i++) {
        if ($i%2 != 0){
            echo $i." ";
            $contador++;
            if($contador == 3){
                echo("<br>");
                $contador = 0;
            }
        }; 
    }
    
    echo "Bucle While"."<br>";
    $i = 23;
    $contador = 0;
    while ($i < 59){
        if ($i%2 != 0){
            echo $i." ";
            $contador++;
            if($contador == 3){
                echo("<br>");
                $contador = 0;
            }
        }
        $i++;
   } 
?> 

</body>