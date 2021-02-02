<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variáveis e condicionais</title>
</head>
<body>
    <?php
        $participante = "Henrique Eduardo";

        if($participante == "Henrique Eduardo"){
            $participante = "um dos aluno";
        }else{
            $participante = "o professor";
        }

        echo "O particimante é $participante";
    ?>
</body>
</html>