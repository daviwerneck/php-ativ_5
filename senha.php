<?php
  include_once 'funcoes.php';

  $nome = $_POST["nome"];
  $data = $_POST["data"];
  
  $arrayData = explode("-", $data);
  $mes = (int)$arrayData[1];
  $dia = (int)$arrayData[2];

  for ($i = 1; $i <=5; $i++){
    $senhas[] = criarSenha(str_replace(" ", "", $nome) . str_replace("-", "", $data));
    $signo = descobreSigno($mes, $dia);
  }
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

        <h3>Escolha uma opção:</h3>
        <form action="resultado.php" method="post">
        
            <div class="form-group col">
                <div class="col-sm-8">
                    <input type="radio" name="senha" value=<?php echo $senhas[0]?> checked>
                    <label for="botao1"> <?php echo $senhas[0] ?> </label>
                </div>
                <div class="col-sm-8">
                    <input type="radio" name="senha" value=<?php echo $senhas[1]?>>
                    <label for="botao2"> <?php echo $senhas[1] ?> </label>
                </div>
                <div class="col-sm-8">
                    <input type="radio" name="senha" value=<?php echo $senhas[2]?>>
                    <label for="botao3"> <?php echo $senhas[2] ?> </label>
                </div>
                <div class="col-sm-8">
                    <input type="radio" name="senha" value=<?php echo $senhas[3]?>>
                    <label for="botao4"> <?php echo $senhas[3] ?> </label>
                </div>
                <div class="col-sm-8">
                    <input type="radio" name="senha" value=<?php echo $senhas[4]?>>
                    <label for="botao5"> <?php echo $senhas[4] ?> </label>
                </div>
                
                <input type="hidden" name="mes" value="<?php echo $mes ?>">
                <input type="hidden" name="dia" value="<?php echo $dia ?>">
                <input type="hidden" name="nome" value="<?php echo $nome ?>">

                <div class="form-group">
                <button class="btn btn-primary py-2" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>