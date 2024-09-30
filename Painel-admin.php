<?php 
    session_start();
    if(empty($_SESSION)){
        echo "<script>location.href='index.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Painel Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="painel-admin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?page=listar_produto">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?page=listar_usuario">Usúarios</a>
        </li>
      </ul>
    </div>
        <?php 
            echo "<strong>Olá: ". $_SESSION["nome_usuario"]."</strong>";
            echo "<button onclick=\"location.href='logout.php'\" class='btn     
            btn-danger'>Sair</button>";
        ?>
  </div>
</nav>

    <?php 

        require("conexao.php");

        switch(@$_REQUEST["page"]){
            case "cadastrar_produto":
                require("Produto/cadastrar-produto.php");
            break;
            case "listar_produto":
                require("Produto/listar-produto.php");
            break;
            case "editar_produto":
                require("Produto/editar-produto.php");
            break;
            case "salvar_produto":
                require("Produto/salvar-produto.php");
            break;
              //Usuario
            case "cadastrar_usuario":
              require("cadastrar-usuario.php");
          break;
          case "listar_usuario":
              require("listar-usuario.php");
          break;
          case "editar_usuario":
              require("editar-usuario.php");
          break;
          case "salvar_usuario":
              require("salvar-usuario.php");
          break;
            default :
                echo "<h1>Bom dia!</h1>";
            break;

            
        } 
    
    ?>
  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</body>
</html>