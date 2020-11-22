<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bean Counting</title>
    </head>
    <body>
        <?php
        function countBs($word){
            $count = 0;
            for( $i = 0; $i < strlen($word); $i++){
                if($word[$i] == "B"){
                    $count++;
                }
            }
            return $count;
        }
        function countChar($word, $ch){
            $count = 0;
            for( $i = 0; $i < strlen($word); $i++){
                if($word[$i] == $ch){
                    $count++;
                }
            }
            return $count;
        }

        echo 'Output of the countBs("BBC") fucntion is '.countBs("BBC");
        echo "<br>";
        echo 'Output of the countChar("kakkerlak, k") fucntion is '.countChar("kakkerlak", "k")

        ?>
    </body>
</html>