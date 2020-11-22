<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WhileLogic</title>
    </head>
    <body>
    <?php
    /*
    your name and student id
    today’s day
    */
    $Count = 0;
    while ($Count <= 100) {
        $Numbers[] = $Count;
        $Count++;
    }
    foreach ($Numbers as $CurNum)
        echo "<p>$CurNum</p>";
    ?>
    </body>
</html>