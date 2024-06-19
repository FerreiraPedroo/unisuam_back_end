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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./src/styles.css" rel="stylesheet">
    <title>Página de Cadastro</title>

</head>


<body>
    <div class="container d-flex justify-content-center align-items-center vh-95 ">
        <div class="card p-4 shadow p-3 mb-5 rounded" id="header-css">
            <div class="mx-auto text-center">
            <a href="index.php"><img src="./src/img/logo.png" alt="LogoAurora" width="150px" height="100px"></a>
            </div>
            <h3 class="card-title text-center">Cadastro</h3>
            <form class="d-flex flex-column " action="registro.php" method="post">
                <div class="card-title text-center">
                    <label class="form-label" for="nome_completo">Nome Completo:</label>
                    <input type="text" class="form-control" name="nome_completo" id="nome" required>
                </div>
                <div class="card-title text-center">
                    <label class="form-label" for="data_nascimento">Data de Nascimento:</label>
                    <input class="form-control" type="date" name="data_nascimento" required>
                </div>
                <div class="card-title text-center">
                    <label class="form-label" for="telefone_fixo">Telefone Fixo:</label>
                    <input class="form-control" type="text" name="telefone_fixo" pattern="\(\d{2}\)\d{4}-\d{4}" placeholder="(XX)XXXX-XXXX">
                </div>
                <div class="card-title text-center">
                    <label class="form-label" for="telefone_celular">Celular:</label>
                    <input class="form-control" type="text" name="telefone_celular" pattern="\(\d{2}\)\d{5}-\d{4}" placeholder="(XX)XXXXX-XXXX">
                </div>
                <div class="card-title text-center">
                    <label class="form-label" for="cpf">CPF:</label>
                    <input class="form-control" type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00" required>
                </div>
                <div class="card-title text-center">
                    <label class="form-label">Sexo:</label><br>
                    <input class="form-check-input" type="radio" name="sexo" value="Feminino" required> Feminino
                    <input class="form-check-input" type="radio" name="sexo" value="Masculino" required> Masculino
                    <input class="form-check-input" type="radio" name="sexo" value="NaoInformar" required> Não Informar
                </div>
                <div class="card-title text-center">
                    <label class="form-label" for="nome_mae">Nome da Mãe:</label>
                    <input class="form-control" type="text" name="nome_mae" placeholder="Nome da Mãe">
                </div>
                <div class="card-title text-center">
                    <label class="form-label" for="endereco">Endereço:</label>
                    <input class="form-control" type="text" name="endereco" required>
                </div>
                <div class="card-title text-center">
                    <label class="form-label" for="email">E-mail:</label>
                    <input class="form-control" type="email" name="email" placeholder="seuemail@example.com" required>
                </div>
                <div class="card-title text-center">
                    <label class="form-label" for="login">Login:</label>
                    <input class="form-control" type="text" name="login" required>
                </div>
                <div class="card-title text-center">
                    <label class="form-label" for="senha">Senha:</label>
                    <input class="form-control" type="password" name="senha" required>
                </div>
                <div class="card-title text-center">
                    <label class="form-label" for="repetir_senha">Repetir Senha:</label>
                    <input class="form-control" type="password" name="repetir_senha" required>
                </div>
                <p class="text-danger m-0 mb-1">
                    <?php echo $cadastroMsgError; ?>
                    &nbsp;
                </p>
                <div id="button-box">
                    <button class="mb-2 btn btn-primary w-100" id="enviar" type="submit">Cadastrar</button>
                    <button class="mb-2 btn btn-primary w-100" type="reset">Limpar dados</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>