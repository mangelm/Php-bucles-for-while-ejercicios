<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador min y max</title>
</head>
<body>
 

<?php 
  /*
    Crea un programa que sea capaz de imprimir 
    los valores comprendidos entre las variables"
    "$min y $max. Si $min es más grande que $max 
    imprime el siguiente texto de error: 
    "Vuelve a Barrio Sésamo si no entiendes
    que min siempre tiene que ser más pequeño
    que max". 
    */
    
    $min = $_GET["min"];
    $max = $_GET["max"];
    
    #comenta el for para que el foreach funcione
    echo "Bucle Foreach"."<br>";
    if ($min > $max){
        echo "Vuelve a Barrio Sésamo si no entiendes
            que min siempre tiene que ser más pequeño
             que max";
    }else{
        foreach (range($min,$max) as $numero){
                echo $numero." ";
        }
    }

    echo "Bucle For"."<br>";
    if ($min >= $max){
        echo "Vuelve a Barrio Sésamo si no entiendes
            que min siempre tiene que ser más pequeño
             que max";
    }else{
        for($i= $min; $i <= $max;$i++){
            echo $i." ";
        }
    } 


    

    
?> 

</body>