<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        $w = 5;
        $x = 25;
        $y = 13;
        $z = 101;

        echo "w = $w <br>";
        echo "x = $x <br>";
        echo "y = $y <br>";
        echo "z = $z <br><br>";

        $a = $w + $x;
        $af = sprintf("%0.1f ",$a);
        $b = $z - $y;
        $bf = sprintf("%0.1f ",$b);
        $c = $z / $w;
        $cf = sprintf("%0.1f ",$c);
        $d = $y * $x;
        $df = sprintf("%0.1f ",$d);

        echo "w + x = $af <br>";
        echo "z - y = $bf <br>";
        echo "z / w = $cf <br>";
        echo "y * x = $df <br><br>";

        $a += 1;
        $b += 1;
        $c -= 1;
        $d -= 1;

        echo "A = $a | ";
        echo "B = $b | ";
        echo "C = $c | ";
        echo "D = $d  <br>";

        $wxyz = ($a+=($b+=($c+=$d)));
        $wxyz += 1;

        echo "$wxyz"

        ?>
    </body>
</html>