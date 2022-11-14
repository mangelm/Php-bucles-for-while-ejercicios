<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impares entre 23 y 58</title>
</head>
<body>
 

<?php 
    // Escribe un programa que imprima los números impares comprendidos entre el 23 y el 58.
    echo "Bucle For"."<br>";
    
    for ($i = 23; $i < 59; $i++) {
        if ($i%2 != 0){
            echo $i."<br>";
        }; 
    }

    echo "Bucle While"."<br>";
    $i = 23;
    while ($i < 59){
        if ($i%2 != 0){
            echo $i."<br>";
        }; 
        $i++;
    } 
?> 

</body>