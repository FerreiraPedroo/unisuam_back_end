<?php
session_start();

if (isset($_SESSION["sessao"])) {
    $sessao = $_SESSION["sessao"];
}

$pdo = new PDO('mysql:host=localhost;dbname=aurora', 'root', '');
$req = $_REQUEST;

$origem = isset($req["origem"]) ? $req["origem"] : "";
$destino = isset($req["destino"]) ? $req["destino"] : "";

$query = "";
$origQuery = $origem ? " WHERE origem='$origem'" : "";
$destQuery = $destino ? " WHERE destino='$destino'" : "";

if ($origQuery && $destQuery) {
    $query = "$origQuery AND destino='$destino'";
} else if ($origQuery) {
    $query = $origQuery;
} else if ($destQuery) {
    $query = $destQuery;
}

$sql = "SELECT * FROM passagem ";
$resultado = $pdo->query("$sql $query");

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Tour</title>
    <link href="../src/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../src/styles.css" />
</head>

<body class="d-flex flex-column align-items-center gap-4">
    <?php include("../cabecalho.php") ?>

    <main>
        <div class="container d-flex flex-wrap gap-4 justify-content-center">
            <?php
            if (!$resultado->rowCount()) {
                echo "<div class='d-flex flex-column align-items-center'>";
                echo "<p class='fs-3'>Nenhum registro encontrado</p>";
                echo "<img class='w-50' src='../src/img/passagens/icons8-airport-100.png' />";
                echo "</div>";
            }
            foreach ($resultado as $value) {
                $date = new DateTime($value[5]);
                $date = $date->format('d/m/Y');
                $foto = explode(",",$value[10])[0];
                echo ("
                    <a class='card text-decoration-none' href='../passagens/passagem.php?id=$value[0]' style='width: 18rem;'>
                        <img src='../src/img/$foto' class='card-img-top h-50' alt='...'>
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

    <script>
        const origem = document.getElementById("passagem-input-origem");
        const destino = document.getElementById("passagem-input-destino");
        const botaoPesquisarPassagem = document.getElementById("botao-pesquisar-passagem");
    </script>
</body>

</html>