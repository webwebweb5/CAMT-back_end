<?php

$a = 14;
$b = 17;
$c = round(39.9);
$d = "91/";

print(is_numeric($a) && $a%2 == 0)?"True":"False";
echo "<br>";
print(is_numeric($b) && $b%2 == 0)?"True":"False";
echo "<br>";
print(is_numeric($c) && $c%2 == 0)?"True":"False";
echo "<br>";
print(is_numeric($d) && $d%2 == 0)?"True":"False";

?>