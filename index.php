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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Tour</title>
    <link href="./src/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./src/styles.css" />
</head>

<body class="d-flex flex-column gap-4 body">
    <?php include("cabecalho.php") ?>

    <main>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>


        <div class="container d-flex gap-4 justify-content-center body-bg">
            <?php
            ?>

        </div>
    </main>

    <script src="./src/js/bootstrap.min.js"></script>
    <script>
        const origem = document.getElementById("passagem-input-origem");
        const destino = document.getElementById("passagem-input-destino");
        const botaoPesquisarPassagem = document.getElementById("botao-pesquisar-passagem");
    </script>

</body>

</html>