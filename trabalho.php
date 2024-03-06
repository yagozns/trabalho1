<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Formulario</title>

</head>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="mb-3">
    <label class="form-label">Nome Completo:</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="yago augusto" required>
  </div>
  <div class="mb-3">
    <label class="form-label">CPF:</label>
    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="375.100.476-56" required>
  </div>

    <div class="col-md-6">
      <label class="form-label">E-mail:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@gmail.com.br" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Senha:</label>
      <input type="password" class="form-control" id="senha" name="senha" placeholder="**********" required>
    </div>
    <div class="col-12">
      <label class="form-label">Telefone:</label>
      <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(31) 92774-1946" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="data" name="data" aria-describedby="emailHelp" required>
      </div>  
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" name="checkbox">
        <label class="form-check-label" for="gridCheck">
          Você é estudante?
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>

    <?php

    if($_SERVER["REQUEST_METHOD"]== "POST"){

      $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Não informado";
      $cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : "Não informado";
      $email = isset($_POST["email"]) ? $_POST["email"] : "Não informado";
      $senha = isset($_POST["senha"]) ? $_POST["senha"] : "Não informado";
      $telefone = isset($_POST['telefone']) ? $_POST["telefone"] : "Não informado";
      $data = isset($_POST["data"]) ? $_POST["data"] : "Não informado";
      $estudante = isset($_POST["estudante"]) ? "sim":"nao";

      echo "<p>Eu, $nome, $estudante sou estudante. Meu número de CPF e $cpf, nasci em $data e tenho".
      (date("Y") - date("Y", strtotime($data))) . "anos de idade. Meu telefone para contato é $telefone e o meu email é $email.</p>";
      

    }elseif ($_SERVER["REQUEST_METHOD"]=="GET" && !empty($_POST)){

      "Erro! Formulario nao enviado";

    };

    ?>
</body>
</html>2