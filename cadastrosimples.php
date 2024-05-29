<?php
session_start();
$cadastroMsgError = "";

if (isset($_SESSION["cadastro_msg_error"])) {
    $cadastroMsgError = $_SESSION["cadastro_msg_error"];
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./src/css/cadastro.css">
</head>

<body>
    <div class="container">
        <a href="index.php"><img src="./src/img/logo.png" alt="LogoAurora" width="150px" height="100px"></a>
        <h2>CADASTRO</h2>
        <form action="registro.php" method="post">
            <div class="input-group">
                <label for="nome_completo">Nome Completo:</label>
                <input type="text" name="nome_completo" id="nome" required>
            </div>
            <div class="input-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" required>
            </div>
            <div class="input-group">
                <label for="telefone_fixo">Telefone Fixo:</label>
                <input type="text" name="telefone_fixo" pattern="\(\d{2}\)\d{4}-\d{4}" placeholder="(XX)XXXX-XXXX">
            </div>
            <div class="input-group">
                <label for="telefone_celular">Celular:</label>
                <input type="text" name="telefone_celular" pattern="\(\d{2}\)\d{5}-\d{4}" placeholder="(XX)XXXXX-XXXX">
            </div>
            <div class="input-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00" required>
            </div>
            <div class="input-radio-group">
                <label>Sexo:</label><br>
                <input type="radio" name="sexo" value="Feminino" required> Feminino
                <input type="radio" name="sexo" value="Masculino" required> Masculino
                <input type="radio" name="sexo" value="NaoInformar" required> Não Informar
            </div>
            <div class="input-group">
                <label for="nome_mae">Nome da Mãe:</label>
                <input type="text" name="nome_mae" placeholder="Nome da Mãe">
            </div>
            <div class="input-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" required>
            </div>
            <div class="input-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" placeholder="seuemail@example.com" required>
            </div>
            <div class="input-group">
                <label for="login">Login:</label>
                <input type="text" name="login" required>
            </div>
            <div class="input-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required>
            </div>
            <div class="input-group">
                <label for="repetir_senha">Repetir Senha:</label>
                <input type="password" name="repetir_senha" required>
            </div>
            <p class="text-danger m-0 mb-1">
                <?php echo $cadastroMsgError; ?>
                &nbsp;
            </p>
            <div id="button-box">
                <button id="botao-reset" type="submit">Cadastrar</button>
                <button type="reset">Limpar dados</button>
            </div>
        </form>
    </div>
    <?PHP
    session_unset();
    ?>
</body>

</html>