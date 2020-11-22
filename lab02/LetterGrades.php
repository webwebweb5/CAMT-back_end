<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action = "LetterGrades.php" method="get"> 
        <p> 
            Grade: <input type="text" name="grade" /> 
            <input type="submit" /> 
        </p> 
        </form>

        <?php
            function grade($grade){
                switch ($grade){
                    case 'A':
                        echo "“Your grade is excellent.” for Grade A";
                    break;
                    case 'B':
                        echo "“Your grade is good.” for Grade B";
                    break;
                    case 'C':
                        echo "“Your grade is fair.” for Grade C";
                    break;
                    case 'D':
                        echo "“Your are barely passing.” for Grade D";
                    break;
                    case 'F':
                        echo "“Your failed” for Grade F";
                    break;
                }
            }

            grade($_GET["grade"]);

        ?>
    </body>
</html>