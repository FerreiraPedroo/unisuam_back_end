<?php
session_start();

if (isset($_SESSION["sessao"])) {
    $sessao = $_SESSION["sessao"];
} else {
    header("Location: login.php");
};

$paginaSelecionada = "";
if (isset($_GET["pagina"])) {
    $paginaSelecionada = $_GET["pagina"];
} else {
    $paginaSelecionada = "inicio";
};

$user = "";
$userLog = "";
if (isset($_GET["id"]) && $paginaSelecionada == "usuario-log") {
    $userId = $_GET["id"];
    $pdo = new PDO('mysql:host=localhost;dbname=aurora', 'root', '');
    $sql = "SELECT * FROM logger WHERE id=".$userId;
    $userLog = $pdo->query($sql);
    $sql = "SELECT * FROM usuarios WHERE id=".$userId;
    $user = $pdo->query($sql);
}

if ($sessao["usuario_master"] == "master") {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=aurora', 'root', '');
        $sql = "SELECT * FROM usuarios";

        $resultado = $pdo->query($sql);

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "não usario master";
}

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora's Tour</title>
    <link href="../../src/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../src/styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg m-0 p-0">
            <div class="container-fluid">
                <a class="data-navbar-title navbar-brand d-flex align-items-center gap-2 p-1 " href="/">
                    <img src="../../src/img/logo.png" alt="Logo" width="58" height="40" class="d-inline-block align-text-top">
                    Aurora's Tour
                </a>

                <?php
                echo ('<a class="navbar-brand fs-6 d-flex align-items-center gap-2" href="../../usuario.php">
                    <img src="../../src/img/' . $sessao["foto"] . '" alt="User" width="32" height="32" class="d-inline-block align-text-top">'
                    . $sessao["nome"] .
                    '</a>');
                ?>

            </div>
        </nav>

        <nav class="d-flex justify-content-center gap-5 my-4 pb-2 border-bottom border-secondary">
            <div class="d-flex flex-column align-items-center">
                <a href="?pagina=inicio" class="text-decoration-none">Início</a>
                <?php echo ($paginaSelecionada == "inicio" ? '<i class="fas fa-play fa-xs fa-rotate-270" style="color: #0300b3;"></i>' : "") ?>
            </div>

            <div class="d-flex flex-column align-items-center">
                <a href="?pagina=informacoes" class="text-decoration-none">Informações pessoais</a>
                <?php echo ($paginaSelecionada == "informacoes" ? '<i class="fas fa-play fa-xs fa-rotate-270" style="color: #0300b3;"></i>' : "") ?>
            </div>

            <div class="d-flex flex-column align-items-center">
                <a href="?pagina=usuarios" class="text-decoration-none">Usuários</a>
                <?php echo ($paginaSelecionada == "usuarios" ? '<i class="fas fa-play fa-xs fa-rotate-270" style="color: #0300b3;"></i>' : "") ?>
            </div>

            <?php 
            if($paginaSelecionada == "usuario-log") {
                echo '<div class="d-flex flex-column align-items-center">';
                echo '<div class="text-decoration-none">Log</div>';
                echo '<i class="fas fa-play fa-xs fa-rotate-270" style="color: #0300b3;"></i>';
            }   
            </div>
        </nav>
    </header>

    <main>

        <div class="container justify-content-center border">
            <div class="d-flex gap-4 align-items-start">
                <?php
                if($paginaSelecionada != "usuario-log") {
                    echo ('<img src="../../src/img/' . $sessao["foto"] . '" alt="User" width="128" height="128" class="">');
                    echo ('<div class="d-flex flex-column align-items-start gap-2">');
                    echo ('<div class="fs-5 w-0 p-0 bold">Nome: <span class="fs-4 fw-bold">' . $sessao["nome"] . '</span></div>');
                    echo ('<div class="fs-4">Usuário: <span class="fs-4 fw-bold">' . $sessao["usuario_master"] . '</span></div>');
                    echo ('<button type="button" class="btn btn-danger" onClick="deslogar()">Deslogar</button>');
                    echo ('</div>');
                }
                ?>
            </div>
        </div>

        <?php
        if ($sessao["usuario_master"] == "master" && $paginaSelecionada == "usuarios") {
            echo '<div class="d-flex flex-column m-4 gap-1">
            <div class="d-flex gap-4 align-items-center bg-secondary">
                <div class="coluna-usuario-info-foto text-center text-white p-1">FOTO</div>
                <div class="coluna-usuario-info-nome text-white p-1">NOME</div>
                <div class="coluna-usuario-info-usuario-master text-center text-white p-1">TIPO DE USUARIO</div>
                <div class="coluna-usuario-info-usuario-status text-center text-white p-1">Ativo</div>
            </div>';

            foreach ($resultado as $usuario) {
                echo '<div class="d-flex gap-4 align-items-center border border-primary bg-primary-subtle">
                    <div class="coluna-usuario-info-foto p-1">
                        <img src="../../src/img/' . $usuario["foto"] . '" alt="User" width="32" height="32" class="d-inline-block align-text-top">
                    </div>
                    <div class="coluna-usuario-info-nome p-1">' . $usuario["nome_completo"] . '</div>
                    <div class="coluna-usuario-info-usuario-master text-center p-1">' . $usuario["usuario_master"] . '</div>
                    <div class="coluna-usuario-info-usuario-status text-center p-1">' . $usuario["status"] . '</div>
                    <a href="?pagina=usuario-log&id="'.$usuario["id"]. '" class="btn btn-primary text-decoration-none">Log</a>
                </div>';
            }
        }
        ?>

        /////////////////////////////////////////////////////////////////////
        // COLOCAR NOMES ///
        //////////////////////////////////////////////////////////////////
        <?php
        if ($sessao["usuario_master"] == "master" && $paginaSelecionada == "usuario-log") {
            echo "
            <div id='log-container'>
            <div id='log-user-info'>
                <img id='log-user-img' src='' alt='foto'/>
                <div>
                    <div id='log-user-name'><?php $user["nome_completo"] ?></div>
                    <div id='log-user-status' class='<?php $user['status'] == 'ativo' ? 'log-user-status-active' : 'log-user-inactive'; ?> '>Ativo</div>
                </div>
            </div>
            <div id='log-text'>REGISTRO DE ATIVIDADES DO USUÁRIO</div>
            
            <div id='log-head-container'>

            <div id='log-head'>
                <div class='log-data-1'>DATA</div>
                <div class='log-data-2'>AÇÃO</div>
                <div class='log-data-3'>USUARIO</div>
                <div class='log-data-4'>DADOS</div>
                <div class='log-data-5'>IP</div>
            </div>
        ";
        
        foreach ($userLog as $log) {


            <div class='log-data-list'>
                <div class='log-data-1'>10/05/2070 10:59:59</div>
                <div class='log-data-2'>[LOGIN]USER/PASS/OK</div>
                <div class='log-data-3'>-</div>
                <div class='log-data-4'>usuario:12345/senha:1234</div>
                <div class='log-data-5'>127.0.0.1</div>
            </div>
        
            <div  class='log-data-list'>
                <div class='log-data-1'>10/05/2070 10:59:59</div>
                <div class='log-data-2'>[LOGIN]2MFA/OK</div>
                <div class='log-data-3'>5</div>
                <div class='log-data-4'>2MFA:Data Nascimento/dados:10/10/1970</div>
                <div class='log-data-5'>127.0.0.1</div>
            </div>
               }     
            
          echo "</div>";
        }
        ?>

        </div>
    </main>

    <script>
        function deslogar() {
            window.location.href = "/logout.php";
        }
    </script>
</body>

</html>