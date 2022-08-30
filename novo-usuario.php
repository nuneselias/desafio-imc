<section id="main-home">
    <div id="content-left">
        <div id="content-center">
            <h1 class="display-3 text-light bg-dark">Novo Usuário</h1>
            <div class="card" style="width: 25rem;">
                <div id="main" class="input-group mb-1">
                    <div class="card-body" style="width: 20rem;">
                        <form action="?page=salvar" method="POST">
                            <input type="hidden" name="acao" value="cadastrar">
                            <div class="mb-3">
                                <label id="title-input">Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
                            </div>
                            <div class="mb-3">
                                <label id="title-input">Altura</label>
                                <input type="text" name="altura" class="form-control" placeholder="Digite sua altura. ex 1.80" maxlength="4">
                            </div>
                            <div class="mb-3">
                                <label id="title-input">Peso</label>
                                <input type="text" name="peso" class="form-control" placeholder="Digite seu peso. ex: 80.5" maxlength="5">
                            </div>
                            <div id="buttons">
                                <button id="btn" type="submit" class="btn btn-outline-info btn-lg">Enviar</button>
                                <a id="btn" href="?page=home" class="btn btn-outline-primary btn-lg" role="button">Início</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>