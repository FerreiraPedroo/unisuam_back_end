<?php

$paginaSelecionada = explode("/", $_SERVER["REQUEST_URI"])[1];

?>

<header id="header-css" class="d-flex flex-column gap-3 pb-4 rounded-bottom-4">
    <nav class="navbar navbar-expand-lg m-0 p-0">
        <div class="container-fluid">
            <a class="data-navbar-title navbar-brand d-flex align-items-center gap-2 p-1 " href="/">
                <img src="../../src/img/logo.png" alt="Logo" width="58" height="40"
                    class="d-inline-block align-text-top">
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
                echo ('<img src="../../src/img/icons8-male-user-96.png" alt="User" width="32" height="32" class="d-inline-block align-text-top">');
                echo ("Entre ou cadastre-se");
                echo ('</a>');
            }
            ?>

        </div>
    </nav>

    <nav class="bg-white d-flex flex-column justify-content-center w-auto mx-5 p-1 border rounded-3 gap-3">
        <ul class="navbar-nav d-flex flex-row justify-content-center gap-5">
            <li class="nav-item">
                <a class="nav-link d-flex flex-column align-items-center" aria-current="page"
                    href="./viagens/index.php">
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

        <?php

        if($paginaSelecionada == "viagens"){
            $origens = array(
                "Selecione...",
                "Galeão - RJ",
                "Santos Dumont - RJ",
                "Guarulhos - SP",
                "Congonhas - SP",
                "Eduardo Gomes - AM",
                "Afonso Pena - PR"
            );
            $destinos = array(
                "Selecione...",
                "Turquia",
                "Islândia",
                "Paris",
                "Roma",
                "Grécia",
                "Chile",
                "Amsterdã"
            );

        echo `<div id="origens-procurar" class="container text-center">
            <form method="get" action="#">
                <div class="d-flex gap-4 w-100">
                    <div class="d-flex flex-row align-items-center gap-4 w-100">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="Viagens-input-origem">Origem</label>
                            <select class="form-select" id="Viagens-input-origem">`;

                                foreach ($origens as $origem) {
                                    echo "<option value=\"$origem\">$origem</option>";
                                }
        echo `
                            </select>
                        </div>
                    </div>
                    <div id="Destino-procurar" class="d-flex flex-row align-items-center gap-4 w-100">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="Viagens-input-Destino">Destino</label>
                            <select class="form-select" id="Viagens-input-Destino">`;
                            
                            foreach ($destinos as $destino) {
                                echo "<option value=\"$destino\">$destino</option>";
                            }

                            echo `
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Procurar Destino</button>
            </form>
        </div>`;
    }
    ?>


    </nav>
</header>