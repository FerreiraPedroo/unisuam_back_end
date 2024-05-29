<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

try {
    $pdo = new PDO('mysql:host=localhost;dbname=aurora', 'root', '');
    $sql = "SELECT * FROM usuarios WHERE login='$username' AND senha='$password'";

    $resultado = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    if ($resultado) {
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
        $acao = "[LOGIN]:SUCCESS";

        $sqlLog = "INSERT INTO `log` (`usuario_id`,`data`,`ip`,`acao`) VALUE('$userId','$data','$ip','$acao')";

        $pdo->exec($sqlLog);

        $_SESSION["sessao"] = $userInfo;
        header("Location: index.php");

    } else {
        $data = date('d/m/Y H:i');
        $ip = $_SERVER['REMOTE_ADDR'];
        $acao = "[LOGIN]:FAIL|[USER]:$username|[PASSWORD]:$password";

        $sqlLog = "INSERT INTO `log` (`data`,`ip`,`acao`) VALUE('$data','$ip','$acao')";
        $pdo->exec($sqlLog);

        $_SESSION["login_msg_error"] = "Usuário ou senha incorreto(s).";
        header("Location: login.php");
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
