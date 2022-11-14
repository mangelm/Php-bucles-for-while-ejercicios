<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicador de enlaces</title>
</head>
<body>
 

<?php 
  /*
    Crea un script que según el valor de 
    la variable $enlaces cree tantos 
    enlaces (<a href="#"> 1 </a>) como sea 
    necesario. De modo que si $enlaces = 2 
    el resultado serían dos enlaces uno con 
    el número 1 y otro con el número 2 
   */
    $enlaces = $_GET["enlaces"];
    
    echo "Bucle While"."<br>";
    $i = 1;
    while ($enlaces >= $i){
        echo"<a href='#'>".$i."</a>"."<br>";
        $i++;
    }
    
    echo "Bucle For"."<br>";
    for ($i =1;$enlaces >=$i;$i++){
        echo"<a href='#'>".$i."</a>"."<br>";
    }
    
?> 

</body>