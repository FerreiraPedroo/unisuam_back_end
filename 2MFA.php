<?php
session_start();
$loged = isset($_SESSION['loged']);
if ($loged) {
    header("Location: index.php");
}

$userId = isset($_SESSION['ID']);

$mfa2DataNomeMae = isset($_POST["NomeMae"]) ? $_POST["NomeMae"] : 0;
$mfa2DataDataNascimento = isset($_POST["DataNascimento"]) ? $_POST["DataNascimento"] : 0;
$mfa2DataCEP = isset($_POST["CEP"]) ? $_POST["CEP"] : 0;

if ($mfa2DataNomeMae) {
    $resultado = findUser($userId);
    if ($resultado && $resultado["nome_mae"] == $mfa2DataNomeMae) {
        login($resultado);
    } else {
        logger($userId, "nome_mae", $mfa2DataNomeMae);
    };
} elseif ($mfa2DataDataNascimento) {
    $resultado = findUser($userId);
    if ($resultado && $resultado["data_nascimento"] == $mfa2DataDataNascimento) {
        login($resultado);
    } else {
        logger($userId, "data_nascimento", $mfa2DataDataNascimento);
    };
} elseif ($mfa2DataCEP) {
    $resultado = findUser($userId);
    if ($resultado && $resultado["cep"] == $mfa2DataCEP) {
        login($resultado);
    } else {
        logger($userId, "cep", $mfa2DataCEP);
    };
}


function findUser($userId)
{
    $pdo = new PDO('mysql:host=localhost;dbname=aurora', 'root', '');
    $sql = "SELECT * FROM usuarios WHERE id='$userId'";
    $resultado = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    if (!$resultado) {
        $data = date('d/m/Y H:i');
        $ip = $_SERVER['REMOTE_ADDR'];
        $acao = "[LOGIN]:[2MFA ERROR]: USUARIO NÃO ENCONTRADO";

        $sqlLog = "INSERT INTO `log` (`data`,`ip`,`acao`) VALUE('$data','$ip','$acao')";
        $pdo->exec($sqlLog);
    }

    return $resultado;
}


function logger($userId, $key, $value)
{
    $pdo = new PDO('mysql:host=localhost;dbname=aurora', 'root', '');

    $data = date('d/m/Y H:i');
    $ip = $_SERVER['REMOTE_ADDR'];
    $acao = "[LOGIN]:[2MFA ERROR]: $key : $value";

    $sqlLog = "INSERT INTO `log` (`usuario_id`,`data`,`ip`,`acao`) VALUE('$userId','$data','$ip','$acao')";
    $pdo->exec($sqlLog);
}

function login($resultado)
{
    $pdo = new PDO('mysql:host=localhost;dbname=aurora', 'root', '');
    $nome = explode(" ", $resultado["nome_completo"]);

    if (count($nome) >= 2) {
        $userInfo = ["nome" => $nome[0] . " " . $nome[1]];
    } else {
        $userInfo = ["nome" => $nome[0]];
    }

    $userInfo["foto"] = $resultado["foto"];
    $userInfo["usuario_master"] = $resultado["usuario_master"];

    $data = date('d/m/Y H:i');
    $ip = $_SERVER['REMOTE_ADDR'];
    $userId = $resultado["id"];
    $acao = "[LOGIN]:[2MFA]:SUCCESS";

    $sqlLog = "INSERT INTO `log` (`usuario_id`,`data`,`ip`,`acao`) VALUE('$userId','$data','$ip','$acao')";

    $pdo->exec($sqlLog);

    $_SESSION["sessao"] = $userInfo;
    header("Location: index.php");
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

<body class="d-flex flex-column align-items-center gap-4">
    <html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="src/styles.css" />
        <link rel="stylesheet" href="styles.css">
        <title>2FA</title>
    </head>

    <body class="scrollable-screen">
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="card p-5 shadow p-4 mb-6 rounded" id="conteiner">
                <div class="col mx-auto text-center mb-5">
                    <a href="index.php"><img src="src/img/logo.png" alt="LogoAurora" width="200px" height="150px"></a>
                </div>
                <h3 class="card-title text-center mb-4">Autenticação de Dois Fatores</h3>
                <form action="2MFA.php" method="post">
                    <div class="card-title text-center mb-3" id="NomeMae" hidden>
                        <label for="firstname" style="font-weight: bold" class="form-label pb-2">Qual o nome da sua mãe?</label>
                        <input type="text" class="form-control" name="NomeMae" placeholder="Digite o nome da sua mãe">
                    </div>
                    <div class="card-title text-center mb-3" id="DataNascimento" hidden>
                        <label for="datanascimento" style="font-weight: bold" class="form-label">Qual a data do seu nascimento?</label>
                        <input type="text" style="font-weight: bold" class="form-control" name="DataNascimento" placeholder="Digite sua data de nascimento">
                    </div>
                    <div class="card-title text-center mb-3" id="CEP" hidden>
                        <label for="CEP" style="font-weight: bold" class="form-label">Qual o CEP do seu endereço?</label>
                        <input type="text" class="form-control" name="CEP" placeholder="Digite seu CEP">
                    </div>
                    <br>
                    <button type="submit" class="mb-2 btn btn-primary w-100">Enviar</button>
                </form>
            </div>
        </div>

        <script>
            const TWOfactor = Math.floor((Math.random() * 3))
            const arrayTWOfactor = ['NomeMae', 'DataNascimento', 'CEP']
            document.getElementById(arrayTWOfactor[TWOfactor]).removeAttribute('hidden')
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>