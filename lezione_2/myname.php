<html>
    <head>
        <title><?php echo 'My name';?></title>
    </head>
    <body>

    <?php
 
    $name = "Luisa";
    $text = "Il mio nome è " ;


    //echo $text . $name;

    function print_my_name($text, $name) {
        echo "</br><strong>Ciao" . "</br>". $text . $name . "!</strong>";

    }

    print_my_name($text, $name);
    ?>

    </body>
</html>