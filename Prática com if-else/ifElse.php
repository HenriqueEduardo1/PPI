<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prática com if-else</title>
</head>
<body>
    <?php
        $num = 100;

        if(($num % 2 == 1) || ($num % 2 == -1)){
            echo "O número " . $num . " é ímpar!";
        }else{
            echo "O número " . $num . " é par!";
        }
    ?>
</body>
</html>