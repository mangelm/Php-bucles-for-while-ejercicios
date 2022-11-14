<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Del 0 al 9</title>
</head>
<body>
 

<?php 
    // Escribe un script que imprima los números del 0 al 9
    echo "Bucle For"."<br>";
    for ($i = 0; $i < 10; $i++) {
        echo $i."<br>";
    }

    echo "Bucle While"."<br>";
    $i = 0;
    while ($i < 10){
        echo $i."<br>";
        $i+=1;
    }
?> 

</body>