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
    <link rel="stylesheet" href="./src/styles.css" />
</head>

<body class="d-flex flex-column align-items-center">

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
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" style="width: 60%;">
                    <div class="carousel-inner " style="height: 480px;">
                        <div class="carousel-item active">
                            <img src="src/img/destinos/amsterda/001.webp" class="d-block w-100 carousel-img" alt="Imagem de Amsterdã 1">
                            <div class="carousel-caption">
                                <p class="caption-text">Amsterdã</p>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <img src="src/img/destinos/turquia-capadocia/001.jpg" class="d-block w-100 h-100 carousel-img" alt="Imagem da Capadócia 1">
                            <div class="carousel-caption">
                                <p class="caption-text">Capadócia</p>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <img src="src/img/destinos/paris/003.jpg" class="d-block w-100 h-100 carousel-img" alt="Imagem de Paris 1">
                            <div class="carousel-caption">
                                <p class="caption-text">Paris</p>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <img src="src/img/destinos/grecia-santorini/003.avif" class="d-block w-100 h-100 carousel-img" alt="Imagem de Santorini 1">
                            <div class="carousel-caption">
                                <p class="caption-text">Santorini</p>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <img src="src/img/destinos/chile/001.jpg" class="d-block w-100 h-100 carousel-img" alt="Imagem do Chile 1">
                            <div class="carousel-caption">
                                <p class="caption-text">Chile</p>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <img src="src/img/destinos/islandia-aurora-boreal/002.webp" class="d-block w-100 h-100 carousel-img" alt="Imagem da Aurora Boreal 1">
                            <div class="carousel-caption">
                                <p class="caption-text">Aurora Boreal</p>
                            </div>
                        </div>
                    </div>

                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExample" style="color: transparent;" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExample" style="color: transparent;" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExample" style="color: transparent;" data-bs-slide-to="2"></li>
                        <li data-bs-target="#carouselExample" style="color: transparent;" data-bs-slide-to="3"></li>
                        <li data-bs-target="#carouselExample" style="color: transparent;" data-bs-slide-to="4"></li>
                        <li data-bs-target="#carouselExample" style="color: transparent;" data-bs-slide-to="5"></li>
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