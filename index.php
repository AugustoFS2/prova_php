<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css">
    <link rel="icon" type="image/x-icon" href="faviconIndex.png">
    <script src="js/script.js" defer></script>
    <title>Login para Prova</title>

    <style>
    .senhaAugusto, .senhaBeatriz, .senhaCarlos, .senhaDebora {
        display: none;
    }
    
    .userAugusto:hover + .senhaAugusto, .userBeatriz:hover + .senhaBeatriz, .userCarlos:hover + .senhaCarlos, .userDebora:hover + .senhaDebora {
        display: block;
    }
</style>
</head>

<body>
    <div id="pagina" class="container">
        <div class="row">
            <div id="c1" class="col">
                
            </div>
            <div id="c2" class="col-5">
                <div class="card-body">
                    <form method="post" action="validLogin.php">
                        <div id="form_dados">
                            <div class="col-8">
                                <div class="mb-2">
                                <label>
                                    <span>Usuário: </span>
                                    <input type="text" id="nome_user" name="nome_user" required>
                                </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-2">
                                <label>
                                    <span>Senha: </span>
                                    <input type="password" id="senha_user" name="senha_user" required>
                                </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-2" id="div_enviar">
                                    <input type="submit" values="Enviar">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="c3" class="col">
                <h4>Lista de usuários já cadastrados</h4>
                <h5>(Passe o mouse para ver a senha)</h5><br>
            <ul>
                <li>
                    <div class="userAugusto">
                        <h6>Augusto</h6><br>
                    </div>
                    <div class="senhaAugusto">
                        <h6>0123</h6><br>
                    </div>
                </li>
                
                <li>
                    <div class="userBeatriz">
                        <h6>Beatriz</h6><br>
                    </div>
                    <div class="senhaBeatriz">
                        <h6>4567</h6><br>
                    </div>
                </li>

                <li>
                    <div class="userCarlos">
                        <h6>Carlos</h6><br>
                    </div>
                    <div class="senhaCarlos">
                        <h6>89ab</h6><br>
                    </div>
                </li>

                <li>
                    <div class="userDebora">
                        <h6>Débora</h6><br>
                    </div>
                    <div class="senhaDebora">
                        <h6>cedf</h6><br>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </div>
</body>

</html>