<h1>Salvar Produto</h1>
<?php 

    switch ($_REQUEST["acao"]) {
        case "cadastrar":
            $marca_produto = $_POST["marca_produto"];
            $nome_produto = $_POST["nome_produto"];
            $validade_produto = $_POST["validade_produto"];
            $preco_compra = $_POST["preco_compra"];
            $porcent_produto = $_POST["porcent_produto"];
            $sql = "INSERT INTO produto         
            (marca_produto,
            nome_produto,
            validade_produto,
            preco_compra,
            porcent_produto) VALUE 
            ('{$marca_produto}',
            '{$nome_produto}',
            '{$validade_produto}',
            '{$preco_compra}',
            '{$porcent_produto}')";
            $result = $conexao->query($sql);

            if ($result = true) {
                echo "<script>alert('Produto Cadastrado com Sucesso!')</script>";    
                echo "<script>location.href='?page=listar_produto'</script>";
            }else{
                echo "<script>alert('Não foi possivel o Cadastro!')</script>";    
                echo "<script>location.href='?page=cadastrar_produto'</script>";
            }

        break;
        case "editar":
            $marca_produto = $_POST["marca_produto"];
            $nome_produto = $_POST["nome_produto"];
            $validade_produto = $_POST["validade_produto"];
            $preco_compra = $_POST["preco_compra"];
            $porcent_produto = $_POST["porcent_produto"];

            $sql = "UPDATE produto 
                    SET marca_produto = '{$marca_produto}',
                        nome_produto = '{$nome_produto}',
                        validade_produto = '{$validade_produto}',
                        preco_compra = '{$preco_compra}',
                        porcent_produto = '{$porcent_produto}'
                    WHERE id_produto =".$_REQUEST["id_produto"];

            $result = $conexao->query($sql);

            if ($result = true) {
                echo "<script>alert('Produto Editado com Sucesso!')</script>";    
                echo "<script>location.href='?page=listar_produto'</script>";
            }else{
                echo "<script>alert('Não foi possivel a Edição!')</script>";    
                echo "<script>location.href='?page=listar_produto'</script>";
            }
        break;
        case "excluir":
            
            $sql = "DELETE produto FROM
                    WHERE id_produto=".$_REQUEST["id_produto"];

            $result = $conexao->query($sql);

            if ($result = true) {
                echo "<script>alert('Produto Excluido com Sucesso!')</script>";    
                echo "<script>location.href='?page=listar_produto'</script>";
            }else{
                echo "<script>alert('Não foi possivel a Exclusão!')</script>";    
                echo "<script>location.href='?page=listar_produto'</script>";
            }
        break;
        
        $sql = "DELETE FROM produto WHERE id_produto=". $_REQUEST["id_produto"];

        $resultado = $conexao->query($sql);

        if($resultado == true){
            echo "<script>alert('Produto Excluido com Sucesso!')</script>";
            echo "<script>location.href='?page=listar_produto'</script>";
        }else{
            echo "<script>alert('Produto não pôde ser Excluido!')</script>";
            echo "<script>location.href='?page=listar_produto'</script>";
        }
        
    break;
        
    }
