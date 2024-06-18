<?php
$pdo = new PDO('mysql:host=localhost;dbname=aurora', 'root', '');
$req = $_REQUEST;

$id = isset($req["id"]) ? $req["id"] : "";
$sql = "SELECT * FROM passagem WHERE id='$id'";
$resultado = $pdo->query($sql)

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
                $fotos = explode(",", $value[10]);

                $fotosHTML = "";

                foreach ($fotos as $foto) {
                    $fotosHTML .= "<img src='../src/img/$foto' style='width: 30%;' alt='...'>";
                };
               echo ("
                    <div class='card text-decoration-none mb-4'>
                        <div class='d-flex w-100 border gap-2 p-3 justify-content-center'>
                        $fotosHTML
                        </div>
                        <div class='card-body d-flex flex-column gap-2'>
                            <h5 class='card-title'>$value[1]</h5>
                            <p class='card-text m-0'>Descrição: $value[11]</p>
                            <p class='card-text m-0'>Origem: $value[2]</p>
                            <p class='card-text m-0'>Destino: $value[3]</p>
                            <p class='card-text m-0'><img src='../src/img/passagens/icons8-airplane-take-off-50.png' width='25px' class='' alt='...'> $date</p>
                        </div>

                    </div>
                ");
            }
            ?>
        </div>
    </main>

    <script src="../src/js/bootstrap.min.js"></script>
</body>

</html>
