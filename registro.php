<?php
session_start();

try {
    $pdo = new PDO('mysql:host=localhost;dbname=aurora', 'root', '');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome_completo = $_POST["nome_completo"];
        $data_nascimento = $_POST["data_nascimento"];
        $telefone_fixo = $_POST["telefone_fixo"];
        $telefone_celular = $_POST["telefone_celular"];
        $cpf = $_POST["cpf"];
        $sexo = $_POST["sexo"];
        $nome_mae = $_POST["nome_mae"];
        $endereco = $_POST["endereco"];
        $email = $_POST["email"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $repetir_senha = $_POST["repetir_senha"];
        echo ("INSERT INTO usuarios (nome_completo, data_nascimento, telefone_fixo, telefone_celular, cpf, sexo, nome_mae, endereco, email,login, senha) VALUES ('$nome_completo', '$data_nascimento', '$telefone_fixo', '$telefone_celular', '$cpf', '$sexo', '$nome_mae', '$endereco', '$email', '$login', '$senha')");

        $stmt = $pdo->query("INSERT INTO usuarios (nome_completo, data_nascimento, telefone_fixo, telefone_celular, cpf, sexo, nome_mae, endereco, email,login, senha) VALUES ('$nome_completo', '$data_nascimento', '$telefone_fixo', '$telefone_celular', '$cpf', '$sexo', '$nome_mae', '$endereco', '$email', '$login', '$senha'");
    }
} catch (PDOException $e) {
    $_SESSION["cadastro_msg_error"] = ("Não foi possiver cadastrar o usuário, tente novamente.");
    header("Location: cadastrosimples.php");
}
