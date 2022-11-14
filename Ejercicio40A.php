<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Del 100 al 105</title>
</head>
<body>
 

<?php 
    // Escribe un script que imprima los números del 100 al 105
    echo "Bucle For"."<br>";
    for ($i = 100; $i < 106; $i++) {
        echo $i."<br>";
    }

    echo "Bucle While"."<br>";
    $i = 100;
    while ($i < 106){
        echo $i."<br>";
        $i+=1;
    }
?> 

</body>