<h1>Cadastrar Usuario</h1>

<div class="contatiner mt-5">
    <div class="row">
        <div class="cool">
            <div class="card">
                <div class="card-body">
                    <form action="?page=salvar_usuario" method="POST">
                        <input type="hidden" name="acao" value="cadastrar">
                        <div class="mb-3">
                            <label>Nome</label>
                            <input type="text" name="nome_usuario" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Senha</label>
                            <input type="password" name="senha_usuario" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Tipo de Usuario</label>
                            <input type="text" name="tipo_usuario" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Contratação</label>
                            <input type="date" name="data_contratacao" class="form-control">
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