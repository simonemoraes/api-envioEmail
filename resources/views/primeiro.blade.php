<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
<body>
<div class="row">
    <div class="col-sm-6 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3>Email de Contato</h3>
                </div>
            <div class="panel-body">
                <p><strong>Nome:&nbsp;&nbsp;</strong>{{$dados['nome']}}</p>
                <p><strong>Telefone:&nbsp;&nbsp;</strong>{{$dados['email']}}</p>
                <p><strong>Email:&nbsp;&nbsp;</strong>{{$dados['telefone']}}</p>
                <p><strong>Mensagem:&nbsp;&nbsp;</strong>{{$dados['mensagem']}}</p>
                </div>
            </div>
        </div>
    </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
