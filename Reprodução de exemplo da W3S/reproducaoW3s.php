<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .container{
            padding: 40px;
        }
        .modelo-form{
            background-color: #fefefe;
            margin: 15% auto 15% auto;
            border: 5px solid #888;
        }
        body{
            display: grid;
            place-items: center;
        }
        input[type="submit"]{
            width: 100%;
        }
        input:not(:last-child){
            margin-bottom: 15px;
        }
    </style>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action='bemVindo.php' method='post' class='modelo-form'>
        <div class="container">
            <label for="email"><b>Email</b></label><br>
            <input type='text' name='email' placeholder='E-mail'><br>
            <label for="senha"><b>Senha</b></label><br>
            <input type='password' name='senha' placeholder='password'><br>
            <input type='submit'>
        </div>
    </form>
</body>
</html>