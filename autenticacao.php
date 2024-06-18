<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

try {
    $pdo = new PDO('mysql:host=localhost;dbname=aurora', 'root', '');
    $sql = "SELECT * FROM usuarios WHERE login='$username' AND senha='$password'";

    $resultado = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    if ($resultado) {
        $data = date('d/m/Y H:i');
        $ip = $_SERVER['REMOTE_ADDR'];
        $userId = $resultado["id"];
        $acao = "[LOGIN]:USER/PASS OK";

        $sqlLog = "INSERT INTO `log` (`usuario_id`,`data`,`ip`,`acao`) VALUE('$userId','$data','$ip','$acao')";

        $pdo->exec($sqlLog);

        $_SESSION["2MFA"] = $userId;
        header("Location: 2MFA.php");
    } else {
        $data = date('d/m/Y H:i');
        $ip = $_SERVER['REMOTE_ADDR'];
        $acao = "[LOGIN]:FAIL|[USER]:$username|[PASSWORD]:$password";

        $sqlLog = "INSERT INTO `log` (`data`,`ip`,`acao`) VALUE('$data','$ip','$acao')";
        $pdo->exec($sqlLog);

        $_SESSION["login_msg_error"] = "Usuário ou senha incorreto(s).";
        header("Location: login2.php");
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
