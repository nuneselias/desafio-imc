<?php
include 'functions.php';
$sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();

$peso = $row->peso;
$altura = $row->altura;
$imc = calcularImc($altura, $peso);
$status = statusImc($imc);
?>

<h1 class="display-4 text-light bg-dark">Resultado IMC</h1>

<section id="main-home">
    <div id="content-left">
        <div id="content-center">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <p>Seu IMC é: </p>
                    <label>
                        <?php
                        echo number_format($imc, 2, '.', '');
                        ?>
                    </label>
                    <hr id="separate-calculate">
                    <p>Seu status é: </p>
                    <label>
                        <?php
                        echo $status;
                        ?>
                    </label>
                    <hr id="separate-calculate">
                    <label>
                        <?php
                        echo '<a>O cálculo de IMC é baseado no peso dividido pela altura ao quadrado: </a><p id="imc-calc">IMC = ' . $peso . ' / '. $altura . '² = ' . number_format($imc, 2, '.', '') . '</p>';
                        ?>
                    </label>
                    <div id="buttons">
                        <a id="btn" href="?page=listar" class="btn btn-outline-info btn-lg" role="button">Voltar</a>
                        <a id="btn" href="?page=home" class="btn btn-outline-primary btn-lg" role="button">Início</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>