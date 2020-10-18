<?php

$Days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "The days of the week in English are: ";
foreach ($Days as $day){
    echo "$day ";
}
echo "<br>";
$Days[0] = "Dimanche";
$Days[1] = "Lundi";
$Days[2] = "Mardi";
$Days[3] = "Mercredi";
$Days[4] = "Jeudi";
$Days[5] = "Vendredi";
$Days[6] = "Samedi";

echo "The days of the week in French are: ";
foreach ($Days as $day){
    echo "$day ";
}

?>