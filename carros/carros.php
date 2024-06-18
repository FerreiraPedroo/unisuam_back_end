<?php
session_start();

if (isset($_SESSION["sessao"])) {
    $sessao = $_SESSION["sessao"];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Aurora Tour</title>
    <link href="../src/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../src/styles.css" />
</head>
<header id="header-css" class="d-flex flex-column gap-3 pb-4 rounded-bottom-4">
    <!-- <nav class="navbar navbar-expand-lg m-0 p-0">
        <div class="container-fluid">
            <a class="data-navbar-title navbar-brand d-flex align-items-center gap-2 p-1 " href="/">
                <img src="../../src/img/logo.png" alt="Logo" width="150" height="120" class="d-inline-block align-text-top">
                Aurora's Tour
            </a>
            <?php

            if (isset($sessao)) {
                echo ('<a class="navbar-brand fs-6 d-flex align-items-center gap-2" href="../../usuario.php">');
                echo ('<img src="../../src/img/' . $sessao["foto"] . '" alt="User" width="32" height="32" class="d-inline-block align-text-top">');
                echo ($sessao["nome"]);
                echo ('</a>');
            } else {
                echo ('<a class="navbar-brand fs-6 d-flex align-items-center gap-2" href="../../login.php">');
                echo ('<img src="src/img/user.png" alt="User" width="32" height="32" class="d-inline-block align-text-top">');
                echo ("Entre ou cadastre-se");
                echo ('</a>');
            }
            ?>
        <?php include('cabecalho.php') ?>
        </div>
    </nav> -->

    <!-- <nav class="bg-white d-flex flex-column justify-content-center w-auto mx-5 p-1 border rounded-3 gap-3">
        <ul class="navbar-nav d-flex flex-row justify-content-center gap-5">
            <li class="nav-item">
                <a class="nav-link d-flex flex-column align-items-center" aria-current="page" href="./viagens/index.php">
                    <img src="../src/img/Viagem.png" alt="Viagens" width="36" height="36">
                    <strong> Viagens </strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex flex-column align-items-center" aria-current="page" href="/pacotes">
                    <img src="../src/img/Pacotes.png" alt="Pacotes" width="36" height="36">
                    <strong> Pacotes </strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex flex-column align-items-center" aria-current="page" href="/hotéis">
                    <img src="../src/img/hotel.png" alt="Hotéis" width="36" height="36">
                    <strong> Hotéis </strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex flex-column align-items-center" aria-current="page" href="/ingressos">
                    <img src="../src/img/ingressos.png" alt="Ingressos" width="36" height="36">
                    <strong> Ingressos </strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex flex-column align-items-center" aria-current="page" href="/carros">
                    <img src="../src/img/carro.png" alt="Carros" width="36" height="36">
                    <strong> Carros </strong>
                </a>
            </li>
        </ul>
    </nav> -->


    <script src="./src/js/bootstrap.min.js"></script>


</body>

</html>