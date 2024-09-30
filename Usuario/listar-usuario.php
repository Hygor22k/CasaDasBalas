<h1>Listar Usuario</h1>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <div class="mb-3">
        <button onclick="location.href='?page=cadastrar_usuario'" class="btn btn-success">Novo Usuario</button>
    </div>
    <div class="mb-3">
        <form action="?page=listar_usuario" method="POST">
            <input type="text" name="pesquisar">
            <button type="submit" class="btn btn-secondary">Pesquisar</button>
        </form>
    </div>

    <?php 
    
        $pesquisar = (isset($_POST["pesquisar"])) ? $_POST["pesquisar"] : "";

        $sql = "SELECT  * FROM sislogin WHERE id_usuario = '{$pesquisar}' or nome_usuario LIKE '%{$pesquisar}%' ORDER BY nome_usuario ASC";
        $res = $conn->query($sql);
        $qtd = $res->num_rows;
        if($qtd > 0){
            echo "Encontramos: ".$qtd." Usuarios";
            echo "<table class='table table-hover table-striped table-dangered'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nome</th>";
            echo "<th>Tipo</th>";
            echo "<th>Data Contratação</th>";
            echo "<th>Opções</th>";
            echo "</tr>";
            while($row = $res->fetch_object()){
                echo "<tr>";
                echo "<td>".$row->id_usuario."</td>";
                echo "<td>".$row->nome_usuario."</td>";
                echo "<td>".$row->tipo_usuario."</td>";
                echo "<td>".date("d/m/Y", strtotime($row->data_contratacao))."</td>";
                echo "<td>
                <button onclick=\"location.href='?page=editar_usuario&id_usuario=".$row->id_usuario."'\" class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja Excluir?')){location.href='?page=salvar_usuario&acao=excluir&id_usuario=".$row->id_usuario."'}else{false}\" class='btn btn-danger'>Excluir</button>
                     </td>";
                echo "</tr>";
            }
        }else{
            echo "<script>alert('Não Foi Encontrado Nenhum Usuario!')</script>";
            echo "<script>locatio.href='?page=cadastrar_usuario'</script>";
        }
    
    ?>

    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</body>
</html>