<h1>Cadastrar Produto</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="cool">
                <div class="card">
                    <div class="card-body">
                        <form action="?page=salvar_produto" method="POST">
                            <input type="hidden" name="acao" value="cadastrar">
                            <div class="mb-3">
                                <label>Marca</label>
                                <input type="text" name="marca_produto" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Produto</label>
                                <input type="text" name="nome_produto" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Validade</label>
                                <input type="date" name="validade_produto" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Preço de Compra</label>
                                <input type="number" step="0.01" name="preco_compra" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Porcentagem</label>
                                <input type="number" step="0.01" name="porcent_produto" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</body>
</html>