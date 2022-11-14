<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solo 3 , 6 , 9 , 12 y 15</title>
</head>
<body>
 

<?php 
    // Escribe un script que imprima solo los números 3,6,9,12 y 15.
    echo "Bucle For"."<br>";
    for ($i = 3; $i < 16; $i+=3) {
        echo $i."<br>";
    }

    echo "Bucle While"."<br>";
    $i = 3;
    while ($i < 16){
        echo $i."<br>";
        $i+=3;
    }
?> 

</body>