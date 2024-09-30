<h1>Editar Usuario</h1>

<?php 
    $sql = "SELECT * FROM sislogin WHERE id_usuario=".$_REQUEST["id_usuario"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<div class="contatiner mt-5">
    <div class="row">
        <div class="cool">
            <div class="card">
                <div class="card-body">
                    <form action="?page=salvar_usuario" method="POST">
                        <input type="hidden" name="acao" value="editar">
                        <input type="hidden" name="id_usuario" value="<?=$row->id_usuario?>">
                        <div class="mb-3">
                            <label>Nome</label>
                            <input type="text" name="nome_usuario" value="<?=$row->nome_usuario?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Senha</label>
                            <input type="password" name="senha_usuario" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Tipo de Usuario</label>
                            <input type="text" name="tipo_usuario" value="<?=$row->tipo_usuario?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Contratação</label>
                            <input type="date" name="data_contratacao" value="<?=$row->data_contratacao?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>