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

        .carousel-item {
            height: 500px;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .carousel-indicators {
            display: none;
        }
    </style>
</head>

<body class="d-flex flex-column align-items-center gap-4">
    <?php include('../cabecalho.php'); ?>

    <main>
        <div class="banners text-center">
            <span><strong>ESCOLHA O CARRO QUE OFEREÇA MAIS CONFORTO EM SUA VIAGEM</strong></span>
            <div class="container-fluid d-flex justify-content-center body-bg">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <!-- Adicionando a Tabela com as funcionalidades -->
                        <div class="container my-4">
                            <div class="row mb-3">
                            <div class="col">
                            <label for="searchAirport" class="form-label">PESQUISAR AEROPORTOS</label>
                            <select class="form-select" id="chosenaiport">
                                <option selected>PESQUISAR...</option>
                                <option value="1">AMS - AMSTERDÃ - HOLANDA</option>
                                <option value="2">SCL - SANTIAGO - CHILE</option>
                                <option value="3">ATM - ATHENAS - GRÉCIA</option>
                                <option value="4">KEF - KEFLAVIK - ISLÂNDIA</option>
                                <option value="5">CGD - PARIS - FRANÇA</option>
                                <option value="6">FCO - ROMA - ITÁLIA</option>
                                <option value="7">IST - ISTAMBUL - TURQUIA</option>
                            </select>
                        </div>

                                <div class="col">
                                <label for="chosenprice" type="number" class="form-label">PREÇO
                                </label>
                                <select class="form-select" id="chosenprice">
                                    <option selected>PESQUISAR...</option>
                                    <option value="1"><R1>R$ 613,96</R1> - TOYOTA C-HR - AMSTERDÃ</option>
                                    <option value="2"><R1>R$ 890,13</R1> - BMW 1 SÉRIE AUTO. - AMSTERDÃ</option>
                                    <option value="3"><R1>R$ 764,48</R1> - OPEL CORSA - AMSTERDÃ</option>
                                    <option value="4"><R1>R$ 181,10</R1> - VW GOL - CHILE</option>
                                    <option value="5"><R1>R$ 218,30</R1> - HYUNDAI ACCENT - CHILE</option>
                                    <option value="6"><R1>R$ 273,22</R1> - OPEL CORSA MT BENCINE - CHILE</option>
                                    <option value="7"><R1>R$ 369,38</R1> - AUDI A3 - GRÉCIA</option>
                                    <option value="8"><R1>R$ 93,11</R1> - SKODA CITIGO - GRÉCIA (150KM/DIA)</option>
                                    <option value="9"><R1>R$ 323,22</R1> - KIA PICANTO- GRÉCIA</option>
                                    <option value="10"><R1>R$ 1.045,49</R1> - TOYOTA YARIS - ISLÂNDIA</option>
                                    <option value="11"><R1>R$ 1.141,75</R1> - SUZUKI SWIFT - ISLÂNDIA</option>
                                    <option value="12"><R1>R$ 1.072,00</R1> - TOYOTA AYGO X - ISLÂNDIA</option>
                                    <option value="13"><R1>R$ 641,28</R1> - RENAULT CAPTUR - PARIS</option>
                                    <option value="14"><R1>R$ 592,84</R1> - PPEUGEOT E-2008 - PARIS</option>
                                    <option value="15"><R1>R$ 710,97</R1> - POPEL MOKKA - PARIS</option>
                                    <option value="16"><R1>R$ 647,48</R1> - FIAT 500 - ITÁLIA</option>
                                    <option value="17"><R1>R$ 100,76</R1> - AUDI 3 - ITÁLIA</option>
                                    <option value="18"><R1>R$ 257,98</R1> - TOYOTA AYGO - ITÁLIA</option>
                                    <option value="19"><R1>R$ 499,04</R1> - HYUNDAI I10 - TURQUIA</option>
                                    <option value="20"><R1>R$ 765,34</R1> - FIAT PANDA - TURQUIA</option>
                                    <option value="21"><R1>R$ 259,70</R1> - HYUNDAI I10 - TURQUIA (150KM/DIA)</option>
                                </select>
                            </div>

                                <div class="col">
                                    <label for="date" class="form-label">DATA</label>
                                    <input type="date" class="form-control" id="date">
                                </div>
                                <div class="col">
                                    <label for="chosenCar" class="form-label">ESCOLHA O SEU CARRO</label>
                                    <select class="form-select" id="chosenCar">
                                        <option selected>PESQUISAR...</option>
                                        <option value="1" >TOYOTA C-HR - AMSTERDÃ</option>
                                        <option value="2" >BMW 1 SÉRIE AUTO. - AMSTERDÃ</option>
                                        <option value="3" >OPEL CORSA - AMSTERDÃ</option>
                                        <option value="4" >VW GOL - CHILE</option>
                                        <option value="5" >HYUNDAI ACCENT - CHILE</option>
                                        <option value="6" >OPEL CORSA MT BENCINE - CHILE</option>
                                        <option value="7" >AUDI A3 - GRÉCIA</option>
                                        <option value="8" >SKODA CITIGO - GRÉCIA (150KM/DIA)</option>
                                        <option value="9" >KIA PICANTO- GRÉCIA</option>
                                        <option value="10">TOYOTA YARIS - ISLÂNDIA</option>
                                        <option value="11">SUZUKI SWIFT - ISLÂNDIA</option>
                                        <option value="12">TOYOTA AYGO X - ISLÂNDIA</option>
                                        <option value="13">RENAULT CAPTUR - PARIS</option>
                                        <option value="14">PEUGEOT E-2008 - PARIS</option>
                                        <option value="15">OPEL MOKKA - PARIS</option>
                                        <option value="16">FIAT 500 - ITÁLIA</option>
                                        <option value="17">AUDI 3 - ITÁLIA</option>
                                        <option value="18">TOYOTA AYGO - ITÁLIA</option>
                                        <option value="19">HYUNDAI I10 - TURQUIA</option>
                                        <option value="20">FIAT PANDA - TURQUIA</option>
                                        <option value="21">HYUNDAI I10 - TURQUIA (150KM/DIA)</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <?php
                        // Função para gerar carrossel
                        function gerar_carrossel($id, $imagens, $legenda) {
                            echo "<h3 class='mt-4 mb-2'>$legenda</h3>"; // Título do carrossel
                            echo "<div id='carouselExample$id' class='carousel slide mb-4'>";
                            echo "<div class='carousel-inner'>";
                            foreach ($imagens as $index => $imagem) {
                                $active = $index === 0 ? "active" : "";
                                echo "<div class='carousel-item $active'>";
                                echo "<img src='$imagem' class='d-block w-100' alt='Imagem'>";
                                echo "</div>";
                            }
                            echo "</div>";
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
                                "legenda" => "Aeroporto AMS - Amsterdã"
                            ],
                            [
                                "imagens" => [
                                    "../src/img/carros/Chile/001.png",
                                    "../src/img/carros/Chile/002.png",
                                    "../src/img/carros/Chile/003.png"
                                ],
                                "legenda" => "Aeroporto SCL - Santiago - Chile"
                            ],
                            [
                                "imagens" => [
                                    "../src/img/carros/Grécia/001.png",
                                    "../src/img/carros/Grécia/002.png",
                                    "../src/img/carros/Grécia/003.png"
                                ],
                                "legenda" => "Aeroporto ATM - Athenas - Grécia"
                            ],
                            [
                                "imagens" => [
                                    "../src/img/carros/Islandia/001.png",
                                    "../src/img/carros/Islandia/002.png",
                                    "../src/img/carros/Islandia/003.png"
                                ],
                                "legenda" => "Aeroporto KEF - Keflavik - Islândia"
                            ],
                            [
                                "imagens" => [
                                    "../src/img/carros/Paris/001.png",
                                    "../src/img/carros/Paris/002.png",
                                    "../src/img/carros/Paris/003.png"
                                ],
                                "legenda" => "Aeroporto CGD - Paris"
                            ],
                            [
                                "imagens" => [
                                    "../src/img/carros/Roma/001.png",
                                    "../src/img/carros/Roma/002.png",
                                    "../src/img/carros/Roma/003.png"
                                ],
                                "legenda" => "Aeroporto FCO - Itália - Roma"
                            ],
                            [
                                "imagens" => [
                                    "../src/img/carros/Turquia/001.png",
                                    "../src/img/carros/Turquia/002.png",
                                    "../src/img/carros/Turquia/003.png"
                                ],
                                "legenda" => "Aeroporto IST - Istambul - Turquia"
                            ]
                        ];

                        // Gerar carrosséis
                        foreach ($carrosseis as $index => $carrossel) {
                            gerar_carrossel($index, $carrossel['imagens'], $carrossel['legenda']);
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
