<?php
$pdo = new PDO('mysql:host=localhost;dbname=aurora', 'root', '');
$req = $_REQUEST;


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Aurora Tour</title>
    <link href="../src/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../src/styles.css"/>
</head>

<body class="d-flex flex-column gap-4">
    <header id="header-css" class="d-flex flex-column gap-3 pb-4 rounded-bottom-4">
        <nav class="navbar navbar-expand-lg m-3 p-3">
            <div class="container-fluid">
                <a class="data-navbar-title navbar-brand d-flex align-items-center gap-2 p-1 " href="/">
                    <img src="../src/img/logo.png" alt="Logo" width="150" height="100" class="d-inline-block align-text-top" >
                    Aurora's Tour
                </a>
                <a class="data-navbar-title navbar-brand d-flex align-items-center gap-2 p-1 " href="/">
                    <img src="src/img/user.png" alt="User" width="32" height="32" class="d-inline-block align-text-top">
                    Entre ou cadastre-se
                </a>
            </div>
        </nav>
        
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="src/styles.css"/>
    <link rel="stylesheet" href="styles.css">
    <title>2FA</title>
</head>
<body class="scrollable-screen">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-5 shadow p-4 mb-6 rounded" id="conteiner">
            <div class="col mx-auto text-center">
                <a href="index.php"><img src="src/img/logo.png" alt="LogoAurora" width="200px" height="150px"></a>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <h3 class="card-title text-center mb-4">Autenticação de Dois Fatores</h3>
            <form action="#" method="post">
                <div class="card-title text-center mb-3" id="NomeMae" hidden>
                    <br>
                    <label for="firstname"style="font-weight: bold" class="form-label">Qual o nome da sua mãe?</label>
                    <br>
                    <br>
                    <input type="text" class="form-control" name="NomeMae" placeholder="Digite o nome da sua mãe" >
                    <br>
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
