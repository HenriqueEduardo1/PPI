<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    $sorvete = 2.1;
    echo "O sorvete custa R$ $sorvete";

    echo "<hr>";

    $sorvete = "z";
    
    switch ($sorvete){
        case "c":
            echo "O sabor do sorvete é de chocolate";
            break;
        case "m":
            echo "O sabor do sorvete é de misto";
            break;
            case "b":
                echo "O sabor do sorvete é de balnilha";
                break;
        default:
            echo "sabor invalido";
            
    }
    ?>
</body>
</html>