<?php

$paginaSelecionada = explode("/", $_SERVER["REQUEST_URI"])[1];


?>

<header id="header-css" class="d-flex flex-column gap-3 pb-4 rounded-bottom-4">
    <nav class="navbar navbar-expand-lg m-0 p-0">
        <div class="container-fluid">
            <a class="data-navbar-title navbar-brand d-flex align-items-center gap-2 p-1 " href="/">
                <img src="../../src/img/logo.png" alt="Logo" width="58" height="40" class="d-inline-block align-text-top">
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
                <a class="nav-link d-flex flex-column align-items-center <?php echo $paginaSelecionada == "passagens" ? "fw-bolder" : "" ?>" aria-current="page" href="/passagens">
                    <img src="../../src/img/icons8-suitcase-96.png" alt="User" width="32" height="32" class="">
                    Passagens
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex flex-column align-items-center <?php echo $paginaSelecionada == "pacotes" ? "fw-bolder" : "" ?>" aria-current="page" href="/pacotes">
                    <img src="../../src/img/icons8-suitcase-96.png" alt="User" width="32" height="32" class="d-inline-block align-text-top">
                    Pacotes
                </a>
            </li>
            <li class="nav-item">
                <a class=" nav-link d-flex flex-column align-items-center aluguel-carros <?php echo $paginaSelecionada == "aluguel-carros" ? "fw-bolder" : "" ?>" aria-current="page" href="/carros">
                    <img src="../../src/img/icons8-car-96.png" alt="User" width="32" height="32" class="d-inline-block align-text-top">
                    Aluguel de Carros
                </a>
            </li>
        </ul>

        <form id="passagens-procurar" method="get" action="#" class="container text-center">
                <div class="d-flex flex-row align-items-center gap-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="passagem-input-origem">Origem</label>
                        <select class="form-select" id="passagem-input-origem" name="origem">
                            <option value="" <?php if ($origem == "") echo "selected"; ?>>Selecione...</option>
                            <option value="Rio de Janeiro" <?php if ($origem == "Rio de Janeiro") echo "selected"; ?>>Rio de Janeiro</option>

                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="passagem-input-destino">Destino</label>
                        <select class="form-select" id="passagem-input-destino" name="destino">
                            <option value="" <?php if ($destino == "") echo "selected"; ?>>Selecione...</option>
                            <option value="Minas Gerais" <?php if ($destino == "Minas Gerais") echo "selected"; ?>>Minas Gerais</option>
                            <option value="Brasilia" <?php if ($destino == "Brasilia") echo "selected"; ?>>Brasilia</option>
                            <option value="Rio de Janeiro" <?php if ($destino == "Rio de Janeiro") echo "selected"; ?>>Rio de Janeiro</option>
                            <option value="São Paulo" <?php if ($destino == "São Paulo") echo "selected"; ?>>São Paulo</option>
                        </select>
                    </div>
                    <input type="date">
                    <button id="botao-pesquisar-passagem" type="submit" class="btn btn-primary mb-3">Procurar</button>
                </div>
            </form>
    </nav>
</header>