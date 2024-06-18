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

    <?php include('cabecalho.php') ?>

    <main>
        <div class="banners text-center">
            <span><strong> REALIZE OS SEUS SONHOS </strong></span>
            <?php
            echo '<div style="margin: 20px;">';
            echo '<p><strong>"A Aurora\'s Tour também nasceu de um sonho. Ela tem o nome de duas das coisas mais lindas deste mundo. Um pode ser o seu sonho também: a \'Aurora Boreal\'. O outro é levar uma mini Aurora para conhecer a inspiração de seu nome, ou seja, uma perfeição admirando outra."</strong></p>';
            echo '</div>';
            ?>
            <div class="container-fluid d-flex justify-content-center body-bg">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" style="width: 40%;">
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="src/img/destinos/amsterda/001.webp" class="d-block w-100 carousel-img" alt="Imagem de Amsterdã 1">
                            <div class="carousel-caption">
                                <p class="caption-text">Amsterdã</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="src/img/destinos/turquia-capadocia/001.jpg" class="d-block w-100 carousel-img" alt="Imagem da Capadócia 1">
                            <div class="carousel-caption">
                                <p class="caption-text">Capadócia</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="src/img/destinos/paris/003.jpg" class="d-block w-100 carousel-img" alt="Imagem de Paris 1">
                            <div class="carousel-caption">
                                <p class="caption-text">Paris</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="src/img/destinos/grecia-santorini/003.avif" class="d-block w-100 carousel-img" alt="Imagem de Santorini 1">
                            <div class="carousel-caption">
                                <p class="caption-text">Santorini</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="src/img/destinos/chile/001.jpg" class="d-block w-100 carousel-img" alt="Imagem do Chile 1">
                            <div class="carousel-caption">
                                <p class="caption-text">Chile</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="src/img/destinos/islandia-aurora-boreal/002.webp" class="d-block w-100 carousel-img" alt="Imagem da Aurora Boreal 1">
                            <div class="carousel-caption">
                                <p class="caption-text">Aurora Boreal</p>
                            </div>
                        </div>
                    </div>

                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
                        <li data-bs-target="#carouselExample" data-bs-slide-to="3"></li>
                        <li data-bs-target="#carouselExample" data-bs-slide-to="4"></li>
                        <li data-bs-target="#carouselExample" data-bs-slide-to="5"></li>
                    </ol>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <style>
                .carousel-caption {
                    position: absolute;
                    top: 0;
                    left: 50%;
                    transform: translateX(-50%);
                    text-align: center;
                }

                .caption-text {
                    background-color: white;
                    color: black;
                    padding: 5px 10px;
                    border-radius: 5px;
                    opacity: 0.8;
                    font-weight: bold;
                    margin-bottom: 0;
                }
            </style>

            <script src="./src/js/bootstrap.min.js"></script>
            <script>
                const origem = document.getElementById("passagem-input-origem");
                const destino = document.getElementById("passagem-input-destino");
                const botaoPesquisarPassagem = document.getElementById("botao-pesquisar-passagem");
            </script>

            </body>

</html>