<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Top sales</title>
    </head>
    <body>
        <h1>Gosselin Automotive</h1>
        <h2>Top Five Salespeople in January </h2>
        <hr>
        <?php
        $Salespeople = array(
            "Hiroshi Morinaga" => 57,
            "Judith Stein" => 44,
            "Jose Martinea" => 26,
            "Tyrone Winters" => 22,
            "Raja Singh" => 21
            );
        foreach ($Salespeople as $val){
            echo key($Salespeople)." : ".$val." cars"."<br>\n";
            next($Salespeople);
        }
        ?>
    </body>
</html>