<?php
//include 'model/joguinho.php';
//include_once 'model/joguinho.php';

//require 'model/joguinho.php';
require_once dirname(__FILE__) . '/model/joguinho.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Include</title>
</head>

<body>
    <?php

    $brawlhalla = new Joguinho();

    $brawlhalla->setMedia("Todos");
    $brawlhalla->setnome("Brawlhalla");
    $brawlhalla->salvar();

    ?>

    <h1>
        <?= $brawlhalla->getNome(); ?>
    </h1>

</body>

</html>