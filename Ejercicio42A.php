<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Del 30 al 20</title>
</head>
<body>
 

<?php 
    // Escribe un script que imprima los números del 30 al 20.
    echo "Bucle For"."<br>";
    for ($i = 30; $i > 19; $i--) {
        echo $i."<br>";
    }

    echo "Bucle While"."<br>";
    $i = 30;
    while ($i > 19){
        echo $i."<br>";
        $i--;
    } 
?> 

</body>