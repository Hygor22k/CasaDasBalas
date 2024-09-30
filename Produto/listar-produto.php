<h1>Listar Produto</h1>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <div class="mb-3">
        <button onclick = "location.href='?page=cadastrar_produto'" class="btn btn-success">Novo Produto</button>
    </div>
    <div class="mb-3">
        <form action="?page=listar_produto" method="POST">
            <input type="text" name="pesquisar">
            <button type="submit" class="btn btn-secondary">Pesquisar</button>
        </form>
    </div>
    <?php 
    
        $pesquisar = (isset($_POST["pesquisar"])) ? $_POST["pesquisar"] : "";

        $sql = "SELECT * FROM produto WHERE id_produto = '{$pesquisar}' or marca_produto LIKE '%{$pesquisar}%' ORDER BY marca_produto ASC";

        $result = $conexao->query($sql);
        
        $quant = $result->num_rows;
        
        if($quant > 0){
            echo "Encontramos: ".$quant." Produtos";
            echo "<table class='table table-hover table-striped table-dangered'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Marca</th>";
            echo "<th>Produto</th>";
            echo "<th>Validade</th>";
            echo "<th>Preço de Compra</th>";
            echo "<th>Porcentagem</th>";
            echo "<th>Preço Final</th>";
            echo "<th>Opções</th>";
            echo "</tr>";
            while($row = $result->fetch_object()){
                echo "<tr>";
            echo "<td>".$row->id_produto."</td>";
            echo "<td>".$row->marca_produto."</td>";
            echo "<td>".$row->nome_produto."</td>";
            echo "<td>".$row->validade_produto."</td>"; 
            echo "<td>".$row->preco_compra."</td>";
            echo "<td>".$row->porcent_produto."</td>";
            echo "<td> R$: ".number_format($row->preco_final = (($row->preco_compra)*($row->porcent_produto)/100) + $row->preco_compra, 2,",",".")."</td>";
            echo "<td>
                <button onclick=\"location.href='?page=editar_produto&id_produto=".$row->id_produto."'\" class='btn btn-success'>Editar</button>

                <button onclick=\"if(confirm('Tem certeza que deseja Excluir este Produto?')){location.href='?page=salvar_produto&acao=excluir&id_produto= ".$row->id_produto."'}else{false}\"class='btn btn-danger'>Excluir</button>
                </td>";
            echo "</tr>";
            }
        }else{
            echo "<script>alert('Não Foi Encontrado Nenhum Produto!')</script>";
            echo "<script>location.href='?page=cadastrar_produto'</script>";
        }
    ?>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</body>
</html>