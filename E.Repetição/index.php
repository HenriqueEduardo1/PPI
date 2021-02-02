<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/base.css">
    <title>Loop</title>
</head>
    <body>
        <?php
        
        //$idiomas = ["Inglês","norueguês"];
        $idiomas[] = ["Alemão","Belgica"];
        $idiomas[] = ["Francês","Canadá"];

        print_r($idiomas);

        echo "<hr>";
        echo "Tamanho do vetor: " . count($idiomas);
        echo "<hr>";

        echo "<ol>";
        $cont = 0;

        while($cont < count($idiomas)){
            echo "<li class='red'>";
            echo "$idiomas[$cont]\n";
            echo "</li>";
            $cont++;
        }
        echo "</ol>";

        echo "<hr>";

        foreach($idiomas as $idioma){
            echo "<p class='blue'>";
            echo "Idioma: " . $idioma[0] . "\n";
            echo "<span class='red'>";
            echo "País: " . $idioma[1];
            echo "</span>";
            echo "</p>";
        }


        ?>
    </body>
</html>