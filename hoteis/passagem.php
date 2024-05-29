<?php
$pdo = new PDO('mysql:host=localhost;dbname=aurora', 'root', '');
$req = $_REQUEST;

$id = isset($req["id"]) ? $req["id"] : "";

$sql = "SELECT * FROM passagem WHERE id='$id'";
$resultado = $pdo->query("$sql");

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Tour</title>
    <link href="../src/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../src/styles.css"/>
</head>

<body class="d-flex flex-column gap-4">
    <header id="header-css" class="d-flex flex-column gap-3 pb-4 rounded-bottom-4">
        <nav class="navbar navbar-expand-lg m-0 p-0">
            <div class="container-fluid">
                <a class="data-navbar-title navbar-brand d-flex align-items-center gap-2 p-1 " href="/">
                    <img src="../src/img/logo.png" alt="Logo" width="58" height="40" class="d-inline-block align-text-top">
                    Aurora's Tour
                </a>
                <a class="navbar-brand fs-6 d-flex align-items-center gap-2" href="#">
                    <img src="../src/img/icons8-male-user-96.png" alt="User" width="32" height="32" class="d-inline-block align-text-top">
                    Entre ou cadastre-se
                </a>
            </div>
        </nav>

        <div id="page-title" class="">Os melhores destinos aqui !</div>

        <nav class="bg-white d-flex flex-column justify-content-center w-auto mx-5 p-1 border rounded-3 gap-3">
            <ul class="navbar-nav d-flex flex-row justify-content-center gap-5">
                <li class="nav-item">
                    <a class="nav-link d-flex flex-column align-items-center" aria-current="page" href="/passagens">
                        <img src="../src/img/icons8-suitcase-96.png" alt="User" width="32" height="32" class="">
                        Passagens
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex flex-column align-items-center" aria-current="page" href="#">
                        <img src="../src/img/icons8-suitcase-96.png" alt="User" width="32" height="32" class="d-inline-block align-text-top">
                        Hotéis
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex flex-column align-items-center" aria-current="page" href="#">
                        <img src="../src/img/icons8-cruise-ship-96.png" alt="User" width="32" height="32" class="d-inline-block align-text-top">
                        Cruzeiros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex flex-column align-items-center" aria-current="page" href="#">
                        <img src="../src/img/icons8-car-96.png" alt="User" width="32" height="32" class="d-inline-block align-text-top">
                        Carros
                    </a>
                </li>
            </ul>
        </nav>

    </header>

    <main>
        <div class="container d-flex gap-4 justify-content-center">
            <?php
            if (!$id || !$resultado->rowCount()) {
                echo "<div class='d-flex flex-column align-items-center'>";
                echo "<p class='fs-3'>Passagem não encontrada</p>";
                echo "<img class='w-50' src='../src/img/passagens/waiting-room.png' />";
                echo "</div>";
            }

            foreach ($resultado as $value) {
                $date = new DateTime($value[5]);
                $date = $date->format('d/m/Y');
                echo ("
                    <a class='card text-decoration-none' href='passagem?id=$value[0]' style='width: 18rem;'>
                        <img src='../src/img/passagens/$value[10]' class='card-img-top h-50' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>$value[1]</h5>
                            <p class='card-text m-0'>Origem: $value[2]</p>
                            <p class='card-text m-0'>Destino: $value[3]</p>
                            <p class='card-text m-0'><img src='../src/img/passagens/icons8-airplane-take-off-50.png' width='25px' class='' alt='...'> $date</p>
                        </div>
                    </a>
                ");
            }
            ?>
        </div>
    </main>

    <script src="../src/js/bootstrap.min.js"></script>
</body>

</html>