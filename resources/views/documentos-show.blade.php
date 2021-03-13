<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ver o Documento</title>
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
        <h3 class="page-header">Visualizar Documento</h3>
        <div class="row">
            <div class="col-md-4">
                <p><strong>Id</strong></p>
                <p>{{ $documentos['id']}}</p>
                
                <p><strong>Tipo de Documento</strong></p>
                <p>{{ $documentos['tipoDocumento']}}</p>
            </div> 

            <div class="col-md-4">
                <p><strong>Número do Documento</strong></p>
                <p>{{ $documentos['numeroDocumento']}}</p>
            </div> 
            <div class="col-md-4">
                <p><strong>Cliente</strong></p>
                <p>{{ $documentos->clientes->nome}}</p>
            </div> <br>
            <div id="actions" class="row">
                <div class="col-md-12">
                <a href="/documentos/editar/{{$documentos['id']}}" class="btn btn-primary">Editar</a>
                <a href="/documentos" class="btn btn-default">Fechar</a>
            </div>
   
</body>
</html>