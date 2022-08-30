<h1 class="display-4 text-light bg-dark">Listar Usuários</h1>
<div id="main-register">
    <a href="?page=novo" class="btn btn-outline-primary btn-lg" role="button" >Novo Usuário</a>
    <a href="?page=home" class="btn btn-outline-primary btn-lg" role="button" >Início</a>
</div>

<?php
$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-dark table-hover'>";
    print "<tr>";
    print "<th>Id</th>";
    print "<th>Nome</th>";
    print "<th>Altura</th>";
    print "<th>Peso</th>";
    print "<th>IMC</th>";
    print "<th>Status</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . number_format($row->altura, 2, '.', '') . "</td>";
        print "<td>" . number_format($row->peso, 1, ',', '') . "</td>";
        print "<td>" . number_format($row->imc, 2, ',', '') . "</td>";
        print "<td>" . $row->status . "</td>";
        print "<td id='buttons-list'>
                    <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" id='buttons-list' class='btn btn-outline-info'>Editar</button>

                    <button onclick=\"location.href='?page=calculo&id=" . $row->id . "';\" id='buttons-list' class='btn btn-outline-light'>Calculo</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja remover este usuário?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\" 
                        id='buttons-list' class='btn btn-outline-danger'>Excluir</button>
                    </td>";
        print "</tr>";
    }
    print "</table>";
    } else {
        print "<p id='alert' class='alert alert-danger'>Não há usuários cadastrados!</p>";
    }
?>

