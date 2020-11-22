<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>The winning numbers</h2>
    <?php
    /*for( $i = 0; $i <= 100; $i++){
        $number[] = $i;
    }
    foreach($number as $num)

    shuffle($number);*/

    $numbers = range(1,100);
    shuffle($numbers);

    for( $i = 0; $i <= 4; $i++){
        echo $numbers[$i]."<br>";
    }
    
    /*echo $numbers[0]."<br>";
    echo $numbers[1]."<br>";
    echo $numbers[2]."<br>";
    echo $numbers[3]."<br>";
    echo $numbers[4]."<br>";*/

    /*foreach($numbers as $number){
        echo "$number ";
    }*/
    ?>
</body>
</html>