<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Editar Pedido</title>
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
        <h3 class="page-header">Editar Pedido</h3>
    <form action="{{ route('pedidos.update', ['id' => $pedidos->id]) }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col-md-4">
              <label for="campo1">Descrição</label>
              <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $pedidos['descricao']}}">
            </div><br>
            <div class="form-group col-md-2">
                <label for="campo2">Valor</label>
                <input type="text" class="form-control" name="valor" id="valor" value="{{ $pedidos['valor']}}">
              </div><br>
            </div>
            <div id="actions">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                  <a href="/documentos" class="btn btn-default">Cancelar</a>
                </div>
            </div>
    </form>
</body>
</html>