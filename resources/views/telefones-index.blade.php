<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Relatório de Telefones</title>
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
    <hr><a class="btn btn-success btn-sm" href="/telefones/create">Cadastrar Telefone</a>

    <div class="row">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                  <th><center>ID</center></th>
                  <th><center>Tipo de Telefone</center></th>
                  <th><center>Número de Telefone</center></th>
                  <th><center>Cliente</center></th>

                  <th class="actions"><center>Ações<center></th>
               </tr>
            </thead>
            <tbody>                         
            <tr>
              @foreach($telefones as $telefone)
        
                <td class="text-center">
                    {{$telefone['id']}}
                </td>
                <td class="text-center">
                    {{$telefone['tipoTelefone']}}
                </td>
                <td class="text-center">
                    {{$telefone['numeroTelefone']}}
                </td>
                <td class="text-center">
                    {{$telefone['clientes_id']}}
                </td>
                <td class="text-center">
                  <a class="btn btn-success btn-sm" href="/telefones/ver/{{$telefone['id']}}">Visualizar</a>
                  <a class="btn btn-warning btn-sm" href="/telefones/editar/{{$telefone['id']}}">Editar</a>
                  <form name="form_delete" action="{{ route('telefones.destroy',$telefone['id']) }}" method="post">
                    @csrf
                    <a class="btn btn-danger btn-sm" href="#" onclick="this.parentNode.submit();">&nbsp;Excluir</a>
                </form>
                </td>
                <tr><br></tr>
              @endforeach
            </tr>
          </tbody>
        </table>
    <div>
</body>
</html>