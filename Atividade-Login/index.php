<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <form class="caixa" action="restrito.php" method="post">
        <h1>Login</h1>
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="senha" placeholder="password">
        <input type="submit" value="Login">
    </form>
</body>
<main>
    <?PHP
    if (isset($_GET["msg"])) {
    ?>
        <p><?= $_GET["msg"]; ?></p>
    <?php
    }
    ?>
</main>

</html>