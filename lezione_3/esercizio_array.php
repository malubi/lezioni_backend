<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GENERAL STORE MUSA</title>
</head>
<body>
    
    <?php
    //array numerici.
    $prodotti = array("borraccia", "felpa", "cover", "cappello", "portachiavi");
    $prezzi = array(10.50, 20.99, 8.77, 19.99, 2.50)
    ?>

    <table>

        <tr><td>Prodotto</td><td>Prezzo</td></tr>
        <tr><td><?php echo $prodotti[0]; ?></td><td><?php echo $prezzi[0]; ?></td></tr>
        <tr><td><?php echo $prodotti[1]; ?></td><td><?php echo $prezzi[1]; ?></td></tr>
        <tr><td><?php echo $prodotti[2]; ?></td><td><?php echo $prezzi[2]; ?></td></tr>
        <tr><td><?php echo $prodotti[3]; ?></td><td><?php echo $prezzi[3]; ?></td></tr>
        <tr><td><?php echo $prodotti[4]; ?></td><td><?php echo $prezzi[4]; ?></td></tr>

    </table>

    <?php
    //array associativo

    $store = array("borraccia" => "10.50", "felpa"=> 20.99, "cover"=> 8.77, "cappello"=> 19.99, "portachiavi"=>2.50)
        ?>

        <table>

        <tr><td>Prodotto</td><td>Prezzo</td></tr>
        <tr><td><?php echo "$prodotti[0]"; ?></td><td><?php echo $prodotti['borraccia']; ?></td></tr>
        <tr><td><?php echo "$prodotti[1]"; ?></td><td><?php echo $prodotti['felpa']; ?></td></tr>
        <tr><td><?php echo "$prodotti[2]"; ?></td><td><?php echo $prodotti['cover']; ?></td></tr>
        <tr><td><?php echo "$prodotti[3]"; ?></td><td><?php echo $prodotti['cappello']; ?></td></tr>
        <tr><td><?php echo "$prodotti[4]"; ?></td><td><?php echo $prodotti['portachiavi']; ?></td></tr>

        </table>
    
</body>
</html>