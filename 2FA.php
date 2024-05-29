<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="src\styles.css"/>

    <title>2FA</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow p-3 mb-5 rounded" id="header-css">
            <div class="col mx-auto text-center">
            <a href="index.php"><img src="aurora-logo.png" alt="LogoAurora" width="150px" height="150px"></a>
            </div>
            <h3 class="card-title text-center mb-4">Autenticação de dois fatores</h3>
            <form action="#" method="post">
                <div class="card-title text-center mb-3" id="NomeMae" hidden>
                    <label for="firstname" class="form-label">Qual o nome da sua mãe?</label>
                    <input type="text" class="form-control" name="NomeMae" placeholder="Digite o nome da sua mãe" >
                </div>
                
                <div class="card-title text-center mb-3" id="DataNascimento" hidden>
                    <label for="datanascimento" class="form-label">Qual a data do seu nascimento?</label>
                    <input type="text" class="form-control" name="DataNascimento" placeholder="Digite sua data de nascimento">
                </div>

                <div class="card-title text-center mb-3" id="CEP" hidden>
                    <label for="CEP" class="form-label">Qual o CEP do seu endereço?</label>
                    <input type="number" class="form-control" name="CEP" placeholder="Digite seu CEP">
                </div>

                <button type="submit" class="mb-2 btn btn-primary w-100">Enviar</button>
            </form>
        </div>
    </div>

    <script>
        const TWOfactor = Math.floor((Math.random()*3))
        const arrayTWOfactor = ['NomeMae', 'DataNascimento', 'CEP']
        document.getElementById(arrayTWOfactor[TWOfactor]).removeAttribute('hidden')
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>