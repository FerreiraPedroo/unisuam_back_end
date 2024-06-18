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
    <link href="../src/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../src/styles.css" />

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

        .carousel-img {
            width: 100%;
            height: auto;
        }

        .body-bg {
            background-color: #f8f9fa;
            padding: 20px;
        }
    </style>
</head>

<body class="d-flex flex-column align-items-center gap-4">
    <?php include('../cabecalho.php'); ?>

    <main>
        <div class="banners text-center">
            <span><strong>REALIZE OS SEUS SONHOS</strong></span>
            <div class="container-fluid d-flex justify-content-center body-bg">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        // Função para gerar carrossel
                        function gerar_carrossel($id, $imagens, $legendas) {
                            echo "<div id='carouselExample$id' class='carousel slide mb-4' data-bs-ride='carousel'>";
                            echo "<div class='carousel-inner'>";
                            foreach ($imagens as $index => $imagem) {
                                $active = $index === 0 ? "active" : "";
                                echo "<div class='carousel-item $active'>";
                                echo "<img src='$imagem' class='d-block w-100 carousel-img' alt='Imagem'>";
                                echo "<div class='carousel-caption'>";
                                echo "<p class='caption-text'>{$legendas[$index]}</p>";
                                echo "</div>";
                                echo "</div>";
                            }
                            echo "</div>";
                            echo "<ol class='carousel-indicators'>";
                            foreach ($imagens as $index => $imagem) {
                                $active = $index === 0 ? "active" : "";
                                echo "<li data-bs-target='#carouselExample$id' data-bs-slide-to='$index' class='$active'></li>";
                            }
                            echo "</ol>";
                            echo "<button class='carousel-control-prev' type='button' data-bs-target='#carouselExample$id' data-bs-slide='prev'>";
                            echo "<span class='carousel-control-prev-icon' aria-hidden='true'></span>";
                            echo "<span class='visually-hidden'>Anterior</span>";
                            echo "</button>";
                            echo "<button class='carousel-control-next' type='button' data-bs-target='#carouselExample$id' data-bs-slide='next'>";
                            echo "<span class='carousel-control-next-icon' aria-hidden='true'></span>";
                            echo "<span class='visually-hidden'>Próximo</span>";
                            echo "</button>";
                            echo "</div>";
                        }

                        $carrosseis = [
                            [
                                "imagens" => [
                                    "../src/img/carros/Amsterdã/001.png",
                                    "../src/img/carros/Amsterdã/002.png",
                                    "../src/img/carros/Amsterdã/003.png"
                                ],
                                
                                "legendas" => ["Aeroporto AMS - Amsterdã"]
                            ],
                            [
                                "imagens" => [
                                    "../src/img/carros/Chile/001.png",
                                    "../src/img/carros/Chile/002.png",
                                    "../src/img/carros/Chile/003.png"
                                ],
                                "legendas" => ["Aeroporto SCL - Santiago - Chile"]
                            ],
                            [
                                "imagens" => [
                                    "../src/img/carros/Grécia/001.png",
                                    "../src/img/carros/Grécia/002.png",
                                    "../src/img/carros/Grécia/003.png"
                                ],
                                "legendas" => ["Aeroporto ATM - Athenas - Grécia"]
                            ],
                            [
                                "imagens" => [
                                    "../src/img/carros/Islandia/001.png",
                                    "../src/img/carros/Islandia/002.png",
                                    "../src/img/carros/Islandia/003.png"
                                ],
                                "legendas" => ["Aeroporto KEF - Keflavik - Islândia"]
                            ],
                            [
                                "imagens" => [
                                    "../src/img/carros/Paris/001.png",
                                    "../src/img/carros/Paris/002.png",
                                    "../src/img/carros/Paris/003.png"
                                ],
                                "legendas" => ["Aeroporto CGD - Paris"]
                            ],
                            [
                                "imagens" => [
                                    "../src/img/carros/Roma/001.png",
                                    "../src/img/carros/Roma/002.png",
                                    "../src/img/carros/Roma/003.png"
                                ],
                                "legendas" => ["Aeroporto FCO - Itália - Roma"]
                            ],
                            [
                                "imagens" => [
                                    "../src/img/carros/Turquia/001.png",
                                    "../src/img/carros/Turquia/002.png",
                                    "../src/img/carros/Turquia/003.png"
                                ],
                                "legendas" => ["Aeroporto IST - Istambul - Turquia"]
                            ]
                        ];

                        // Gerar carrosséis
                        foreach ($carrosseis as $index => $carrossel) {
                            gerar_carrossel($index, $carrossel['imagens'], $carrossel['legendas']);
                        }
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        // Gerar novamente carrosséis para a segunda coluna
                        foreach ($carrosseis as $index => $carrossel) {
                            gerar_carrossel($index + count($carrosseis), $carrossel['imagens'], $carrossel['legendas']);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
