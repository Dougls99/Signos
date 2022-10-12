<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signos</title>
  </head>
  <body>
    <h1>Seu Signo</h1>

    <form
      class="formulario"
      action="signos.php"
      method="post"
      accept-charset="utf-8"
    >
      <label>Nome:</label>
      <input
        name="nome"
        type="text"
        placeholder="Digite seu nome"
        id="Idnome"
      />

      <label>Data de Nascimento:</label>
      <input
        name="data_nasc"
        type="date"
        placeholder="Digite Sua Data de Nascimento"
        id="IdData_nasc"
      />

      <input type="submit" value="Enviar" />
    </form>
  </body>
</html>
