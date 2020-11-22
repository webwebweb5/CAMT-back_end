<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Box Array</title>
    </head>
    <body>
    <?php
    $boxArray = array(
                    'Small Box has volume of ' => array(12, 10, 2.5),
                    'Medium Box has volume of ' => array(30, 20, 4),
                    'Large Box has volume of ' => array(60, 40, 11.5)
                    );

    foreach ($boxArray as $box => $vol){
        echo $box.$vol[0]*$vol[1]*$vol[2]. ' ('.$vol[0].'*'.$vol[1].'*'.$vol[2].')' .'<br>'; 
    }               

    ?>                

    </body>
</html>