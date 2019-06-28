<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <title>Desafio PDO</title>
</head>
<body>
<header>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Viva Toscana</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Procurar">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
  </form>
</nav>
</header>
<div class="img-fundo">
<div class="container">
  <div class="row">
    <div class="col-md-6">
    <div class="card-card">
  <div class="card-body">
    <h1 style="font-style: italic;text-align:center;font-size:3em;">Venha desvendar os segredos de Florença<h1>
    <h2 style="text-align: center;font-size: 2em;">Apenas cadestre o seu email para se aventurar!</h2>
  </div>
</div>
    </div>
    <div class="col-md-6">
    <form action="salvarform.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Digite o seu email para se aventurar</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o seu E-mail">
    <small id="emailHelp" class="form-text text-muted">Cadastre o seu e-mail aqui ensima.</small>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Salvar</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    </div>
  </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>