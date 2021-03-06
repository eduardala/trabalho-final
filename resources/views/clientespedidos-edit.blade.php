<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Editar Clientes/Pedidos</title>
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
    <form action="{{ route('pc.update', ['id' => $clientespedidos->id]) }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col-md-4">
                <p>
                    <label for="">Cliente</label><br/>
                    <select name="clientes_id" id="clientes_id" class="form-control">
                        @if (isset($clientes))
                        @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}"
                            @if(isset($clientespedidos['clientes_id']) && ($clientespedidos['clientes_id'] == $cliente['id']))
                                {{ 'selected' }}
                            @endif
                                >
                            {{ $cliente['id'].'-'.$cliente['nome'] }}</option>
                        @endforeach
                        @endif
                    </select>
                </p>
            </div><br>

            <div class="form-group col-md-2">
                <p>
                    <label for="">Pedido</label><br/>
                    <select name="pedidos_id" id="pedidos_id" class="form-control">
                        @if (isset($pedidos))
                        @foreach($pedidos as $pedido)
                        <option value="{{ $pedido->id }}"
                            @if(isset($clientespedidos['produtos_id']) && ($clientespedidos['produtos_id'] == $pedido['id']))
                                {{ 'selected' }}
                            @endif
                                >
                            {{ $pedido['id'].' - '.$pedido['descricao'].' - '.' - '.$pedido['valor'] }}</option>
                        @endforeach
                        @endif
                    </select>
                </p>
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