<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <h1>Automobili</h1>
    <p><?php
    $cars = array("Volvo", "BMW", "Toyota");
    //var_dump($cars); 
    echo "Oggi ho comprato una " . $cars[2] . " nuova";
    ?></p>   

    <p><?php 

    $anni = array("Mario"=> 38, "Luisa" => 22, "Gianni" => 7);
    //var_dump($anni); 
    echo $anni['Mario'];
    ?></p>

    <p><?php

    /*$famiglia = array(
        "Rossi" => array("A", "B", "C");
        "Bianchi" => array("D", "E", "F");
        "verdi" => array("G", "H", "I");
    );

    var_dump($famiglia); 
    */?>
    </p>

</body>
</html>
