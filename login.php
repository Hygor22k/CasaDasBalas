<h1>lllll</h1>
<?php 

    session_start();
    if(empty($_POST) or (empty($_POST["nome_usuario"])) or (empty($_POST["senha_usuario"]))){
        echo "<script>location.href='index.php'</script>";
    }

    require("conexao.php");

    $usuario = $_POST["nome_usuario"];
    $senha = $_POST["senha_usuario"];
    $senha = md5($_POST["senha_usuario"]);

    $sql = "SELECT * FROM sislogin WHERE nome_usuario = '{$usuario}' AND senha_usuario = '{$senha}'";

    $result = $conexao->query($sql);

    $row = $result->fetch_object();

    $quant = $result->num_rows;

    if($quant == 1){
        
        $_SESSION["nome_usuario"] = $usuario;
        $_SESSION["tipo_usuario"] = $row->tipo_usuario;
        
        switch ($_SESSION["tipo_usuario"]) {
            case "admin":
                echo "<script>location.href='Painel-admin.php'</script>";
            break;
            case "vendedor":
                echo "<script>location.href='Painel-vendedor.php'</script>";
            break;
        }
    }else{
        echo "<script>alert('Usuario ou Senha Incorretos')</script>";
        echo "<script>location.href='index.php'</script>";
    }


