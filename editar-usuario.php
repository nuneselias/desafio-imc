<?php
$sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<section id="main-home">
    <div id="content-left">
        <div id="content-center">
            <h1 class="display-3 text-light bg-dark">Editar Usuário</h1>
            <div class="card" style="width: 25rem;">
                <div id="main" class="input-group mb-1">
                    <div class="card-body" style="width: 20rem;">
                        <form action="?page=salvar" method="POST">
                            <input type="hidden" name="acao" value="editar">
                            <input type="hidden" name="id" value="<?php print $row->id ?>">
                            <div class=mb-3>
                                <label>Nome</label>
                                <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
                            </div>
                            <div class=mb-3>
                                <label>Altura</label>
                                <input type="text" name="altura" value="<?php print $row->altura; ?>" class="form-control" maxlength="4">
                            </div>
                            <div class=mb-3>
                                <label>Peso</label>
                                <input type="text" name="peso" value="<?php print $row->peso; ?>" class="form-control" maxlength="5">
                            </div>
                            <div id="buttons">
                                <button id="btn" type="submit" class="btn btn-outline-info btn-lg">Enviar</button>
                                <a id="btn" href="?page=listar" class="btn btn-outline-danger btn-lg" role="button">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>