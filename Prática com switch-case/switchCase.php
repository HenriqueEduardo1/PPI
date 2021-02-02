<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prática com switch-case</title>
</head>
<body>
    <?php

        $num1 = 12;
        $num2 = 3;
        $op = "+";

        switch($op){
            case "+":
                echo "O resultado da soma é " . ($num1 + $num2) . ".";
                break;
            case "-":
                echo "O resultado da subtração é " . ($num1 - $num2) . ".";
                break;
            case "*":
                echo "O resultado da multiplicação é " . ($num1 * $num2) . ".";
                break;
            case "/":
                echo "O resultado da divisão é " . ($num1 / $num2) . ".";
                break;
            default:
                echo "Operação inválida!";
        }
        
    ?>
</body>
</html>