<?php
session_start();
$loginMsgError = "";

if (isset($_SESSION["login_msg_error"])) {
    $loginMsgError = $_SESSION["login_msg_error"];
}


?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./src/styles.css" rel="stylesheet">
    <title>Página de Login</title>

</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100 ">
        <div class="card p-4 shadow p-3 mb-5 rounded" id="header-css">
            <div class="mx-auto text-center">
                <a href="index.php"><img src="./src/img/logo.png" alt="LogoAurora" width="150px" height="100px"></a>
            </div>
            <h3 class="card-title text-center">Login</h3>
            <form class="d-flex flex-column " action="autenticacao.php" method="post">
                <div class="card-title text-center">
                    <label for="username" class="form-label">Nome de Usuário</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Digite seu nome de usuário">
                </div>
                <div class="card-title text-center">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
                </div>
                <p class="text-danger m-0 mb-1">
                    <?php echo $loginMsgError; ?>
                    &nbsp;
                </p>
                <div class="card-title text-center">
                    <input class="form-check-input" type="radio" name="usuarytype" value="usuariocomum" />
                    <label class="form-check-label" for="usuariocomum">Usuario Comum</label>

                    <input class="form-check-input" type="radio" name="usuarytype" value="usuariomaster">
                    <label class="form-check-label" for="usuariomaster">Usuario Master</label>
                </div>
                <div class="card-title text-center">
                    <a href="cadastrosimples.php">Ainda não tem um Login? Cadastre-se</a>
                </div>
                <button type="submit" class="mb-2 btn btn-primary w-100">Entrar</button>
                <button type="reset" class="mb-2 btn btn-primary w-100">Limpar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?PHP
    session_unset();
    ?>
</body>

</html>