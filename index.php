<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="cool ">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <h1>Casa das Balas</h1>
                        </div>
                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label>Usuario</label>
                                <input type="text" name="nome_usuario" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Senha</label>
                                <input type="password" name="senha_usuario" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Entrar</button>
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