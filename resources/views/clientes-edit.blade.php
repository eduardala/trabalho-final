<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cadastrar um novo cliente</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/clientes">Clientes<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="/documentos">Documentos<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="/telefones">Telefones<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="/pedidos">Pedidos<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="/pc">Vincular pedido a um cliente<span class="sr-only">(current)</span></a>
          </div>
        </div>
    </nav>
    <div id="main" class="container-fluid">
        <h3 class="page-header">Editar Cliente</h3>
    <form action="{{ route('clientes.update', ['id' => $clientes->id]) }}" method="POST">
        @csrf

        <div class="row">
            <div class="form-group col-md-1">
              <label for="campo1">Id</label>
              <input type="number" class="form-control" name="id" id="id" value="{{ $clientes['id']}}">
            </div>

            <div class="form-group col-md-4">
                <label for="campo2">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{ $clientes['nome']}}">
              </div>
              
              <div class="form-group col-md-4">
                <label for="campo3">Sexo</label>
                <input type="text" class="form-control" name="sexo" id="sexo" value="{{ $clientes['sexo']}}" readonly>
              </div>
              <hr /><br>
            </div>
              <div id="actions">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                  <a href="/clientes" class="btn btn-default">Cancelar</a>
                </div>
    </form>
</body>
</html>