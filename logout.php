<?php
session_start();
$sair = isset($_GET["sair"]) ? $_GET["sair"] : 0;

if ($sair) {
    session_unset();
    header("Location: login.php");
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
    <title>Página de Logout</title>

</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100 ">
        <div class="card p-4 shadow p-3 mb-5 rounded" id="header-css">
            <div class="mx-auto text-center p-4">
                <a href="index.php"><img src="./src/img/logo.png" alt="LogoAurora" width="150px" height="100px"></a>
            </div>

            <h3 class="card-title text-center">DESLOGAR</h3>
            </br>
            <button type="button" class="mb-2 btn btn-primary w-100" onClick="deslogarConfirmar()">CONFIRMAR</button>
            <button type="button" class="mb-2 btn btn-primary w-100" onClick="deslogarVoltar()">VOLTAR</button>
        </div>
    </div>
    <script>
        function deslogarVoltar() {
            window.history.back();
        }

        function deslogarConfirmar() {
            window.location.href = "/logout.php?sair=1";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>