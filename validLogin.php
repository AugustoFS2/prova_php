<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="faviconLogin.png">
    <title>Validando Login</title>
    <style>
        html {
            background: url(_media/loading.gif);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

            color: #2C2321;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 2.2vw;
            font-weight: 600;
            height: 100%;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include("connection.php");
    $nome = $_POST["nome_user"];
    $senha = $_POST["senha_user"];

    $sql = mysqli_query($banco, "select nome_user, senha_user from login_user where nome_user='$nome' and senha_user='$senha';");

    if ($sql && mysqli_affected_rows($banco) == 1) {        // caso user EXISTENTE -> vai para a PROVA após intervalo
        echo "Tudo ok<br>";
        echo "login VALIDADO, boa prova!<br>";
        header( "Refresh:5; url=prova.html", true, 303);
    } else {                                               // caso user INEXSITENTE -> volta ao INDEX após intervalo
        echo ("Usuário não encontrado!<br>");
        echo ("AGUARDE" . mysqli_connect_error());
        header( "Refresh:5; url=index.php", true, 303);
    }
/*
    if (mysqli_affected_rows($banco) == 1) {
        echo "logado";
    }
*/
    mysqli_close($banco);
    ?>
</body>

</html>