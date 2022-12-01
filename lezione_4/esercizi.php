<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //due variabili delle casistiche

    //dichiarazione delle variabili:
    
    $a = 1;
    $b = 5;
    echo "a=$a<br>" . "b=$b<br>";

    
    //maggiore
    if ($a > $b);
    {
        echo "a is bigger than b<br>";
    } 
    //uguale
    if ($a == $b);
    {
        echo "a is equal to b<br>";
    } 

    //identico
    if ($a === $b);
    {
        echo "a is identic to b<br>";
    } 


    //diverso
    if ($a != $b);
    {
        echo "a is different than b<br>";
    } 


    //non identico
    if ($a !== $b);
    {
        echo "a is not identic to b<br>";
    } 


    //nonhocapito1
    if ($a <=> $b = 1);
    {
        echo "a is bigger than b<br>";
    } 


    //nonhocapito2
    if ($a <=> $b = -1);
    {
        echo "b is bigger than a<br>";
    } 


    //nonhocapito3
    if ($a <=> $b = 0);
    {
        echo "a and b are equal<br>";
    } 

    
    ?>
</body>
</html>