<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$tesla = new Car('black', 4);
$myBicycle = new Bicycle('red', 2);
$townBicycle = new Bicycle('yellow', 40);

?>


<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <?php echo $tesla->switchOn() . " The light is on ";?>
            <br>
            <?php echo $myBicycle->switchOn() . " The light is on ";?>
            <br>
            <?php echo $townBicycle->switchOff() . " The light is off ";?>
        </body>
</html>