<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es primo o no</title>
</head>
<body>
 

<?php 
  /*
    Crea un programa que determine si el número de la 
    variable $num es un número primo. Un número primo 
    es aquel número que solo es divisible por 1 y por 
    sí mismo.
   */
    $num = $_GET["num"];
    $primo = True;

    #prueba a hacerlo con while
    echo "Bucle For"."<br>";
    for ($i=2; $i < $num ; $i++) { 
        if($num%$i == 0){
            $primo = False;
        }
    }

    if ($primo){
        echo $num." es primo";
    }
    else{
        echo $num." no es primo";
    } 
?> 

</body>