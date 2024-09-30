<h1>Salvar Usuario</h1>

<?php 

    switch ($_REQUEST["acao"]) {
        case "cadastrar":
           $nome_usuario = $_POST["nome_usuario"];
           md5($senha_usuario = $_POST["senha_usuario"]);
           $tipo_usuario = $_POST["tipo_usuario"];
           $data_contratacao = $_POST["data_contratacao"];

            $sql = "INSERT INTO sislogin
                            (nome_usuario,
                            senha_usuario,
                            tipo_usuario,
                            data_contratacao)
                    VALUE   ('{$nome_usuario}',
                             '{$senha_usuario}',
                             '{$tipo_usuario}',
                             '{$data_contratacao}')";
            $res = $conn->query($sql);

            if ($res = true) {
                echo "<script>alert('Usuario Cadastrado com Sucesso!')</script>";    
                echo "<script>location.href='?page=listar_usuario'</script>";
            }else{
                echo "<script>alert('Não foi possivel Cadastro!')</script>";    
                echo "<script>location.href='?page=cadastrar_usuario'</script>";
            }
        break;

        case "editar":
            $nome_usuario = $_POST["nome_usuario"];
           md5($senha_usuario = $_POST["senha_usuario"]);
           $tipo_usuario = $_POST["tipo_usuario"];
           $data_contratacao = $_POST["data_contratacao"];

           $sql = "UPDATE sislogin 
                    SET nome_usuario = '{$nome_usuario}',
                        senha_usuario = '{$senha_usuario}',
                        tipo_usuario = '{$tipo_usuario}',
                        data_contratacao = '{$data_contratacao}'
                    WHERE id_usuario =".$_REQUEST["id_usuario"] ;

           $res = $conn->query($sql);

            if ($res = true) {
                echo "<script>alert('Usuario Editado com Sucesso!')</script>";    
                echo "<script>location.href='?page=listar_usuario'</script>";
            }else{
                echo "<script>alert('Não foi possivel a Edição!')</script>";    
                echo "<script>location.href='?page=listar_usuario'</script>";
            }
        break;
        case "excluir":

            $sql = "DELETE * FROM sislogin WHERE id_usuario=".$_REQUEST["id_usuario"];

            $res = $conn->query($sql);

            if ($res = true) {
                echo "<script>alert('Usuario Excluido com Sucesso!')</script>";    
                echo "<script>location.href='?page=listar_usuario'</script>";
            }else{
                echo "<script>alert('Não foi possivel a Exclusão!')</script>";    
                echo "<script>location.href='?page=listar_usuario'</script>";
            }
           
        break;
       
    }
