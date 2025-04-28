<?php
  include_once 'funcoes.php';

  $nome = $_POST["nome"];
  $mes = $_POST["mes"];
  $dia = $_POST["dia"];
  $senha = $_POST["senha"];
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <nav class="p-2 navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="imagem/logo.png" width="36" height="30" alt="">
            </a>
        </nav>

        <h1>Resultado obtido:</h1>

    </div>

    <div class="jumbotron"></div>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Signo</th>
                    <th scope="col">Senha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <?php echo $nome ?>
                    </th>
                    <td scope="row">
                        <?php echo descobreSigno($mes, $dia) ?>
</td>
                    <td scope="row">
                        <?php echo $senha ?>
</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>