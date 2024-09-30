<?php 


    session_start();
    unset($_SESSION["nome_usuario"]);
    unset($_SESSION["tipo_usuario"]);
    session_destroy();
    echo "<script>location.href='index.php'</script>";
    exit;