<?php
$pdo = new PDO('mysql:host=localhost;dbname=aurora', 'root', '');
$req = $_REQUEST;


// if ($resultado) {
//     $nome = explode(" ", $resultado["nome_completo"]);

//     if (count($nome) >= 2) {
//         $userInfo = ["nome" => $nome[0] . " " . $nome[1]];
//     } else {
//         $userInfo = ["nome" => $nome[0]];
//     }

//     $userInfo["foto"] = $resultado["foto"];
//     $userInfo["usuario_master"] = $resultado["usuario_master"];

//     $data = date('d/m/Y H:i');
//     $ip = $_SERVER['REMOTE_ADDR'];
//     $userId = $resultado["id"];
//     $acao = "[LOGIN]:SUCCESS";

//     $sqlLog = "INSERT INTO `log` (`usuario_id`,`data`,`ip`,`acao`) VALUE('$userId','$data','$ip','$acao')";

//     $pdo->exec($sqlLog);

//     $_SESSION["sessao"] = $userInfo;
//     header("Location: index.php");

// } else {
//     $data = date('d/m/Y H:i');
//     $ip = $_SERVER['REMOTE_ADDR'];
//     $acao = "[LOGIN]:FAIL|[USER]:$username|[PASSWORD]:$password";

//     $sqlLog = "INSERT INTO `log` (`data`,`ip`,`acao`) VALUE('$data','$ip','$acao')";
//     $pdo->exec($sqlLog);

//     $_SESSION["login_msg_error"] = "Usuário ou senha incorreto(s).";
//     header("Location: login.php");
// }


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

<body class="d-flex flex-column gap-4">
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
                <form action="#" method="post">
                    <div class="card-title text-center mb-3" id="NomeMae" hidden>
                        <label for="firstname" style="font-weight: bold" class="form-label pb-2">Qual o nome da sua mãe?</label>
                        <input type="text" class="form-control" name="NomeMae" placeholder="Digite o nome da sua mãe">

                    </div>
                    <div class="card-title text-center mb-3" id="DataNascimento" hidden>
                        <br>
                        <label for="datanascimento" style="font-weight: bold" class="form-label">Qual a data do seu nascimento?</label>
                        <br>
                        <br>
                        <input type="text" style="font-weight: bold" class="form-control" name="DataNascimento" placeholder="Digite sua data de nascimento">
                        <br>
                    </div>
                    <div class="card-title text-center mb-3" id="CEP" hidden>
                        <br>
                        <label for="CEP" style="font-weight: bold" class="form-label">Qual o CEP do seu endereço?</label>
                        <br>
                        <br>
                        <input type="number" class="form-control" name="CEP" placeholder="Digite seu CEP">
                        <br>
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