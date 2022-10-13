<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signos</title>
</head>
<body>
  <h1><?= $vNome ?></h1>

  <div>
    <h2>Seu signo é <?= $signoUsuario ?></h2>
    <p><?= $signoUsuario['descricao'] ?></p>
  </div>

  <a href="index.php">Voltar</a>

</body>
</html>