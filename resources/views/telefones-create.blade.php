<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cadastrar um novo telefone</title>
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
        <h3 class="page-header">Cadastrar Cliente</h3>
        <form action="{{ route('cadastro-telefone') }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-4"> 
                    <label for="">Tipo de telefone</label><br/>
                    <p>           
                        <select class="basic" name="tipoTelefone" id="tipoTelefone">
                        <option value="Fixo" selected="selected" >Fixo</option>
                        <option value="Celular" >Celular</option>
                        <option value="Comercial" >Comercial</option>
                        </select>
                    </p>
                </div>

                <div class="form-group col-md-4">
                    <label for="">Número do telefone</label><br/>
                    <input type="text" name="numeroTelefone" id="numeroTelefone"><br>
                </div>
                <div class="form-group col-md-4">
                    <p>
                        <label for="">Cliente</label><br/>
                        <select name="clientes_id" id="clientes_id" class="form-control">
                            @if (isset($clientes))
                            @foreach($clientes as $cliente)
                            <option value="{{ $cliente['id'] }}"
                                @if(isset($documentos['cliente_id']) && ($documentos['cliente_id'] == $cliente['id']))
                                    {{ 'selected' }}
                                @endif
                                    >
                                {{ $cliente['nome'] }}</option>
                            @endforeach
                            @endif
                        </select>
                    </p>
                </div>
        
                <div id="actions" class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary">Salvar</button>
                      <a href="/telefones" class="btn btn-default">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
