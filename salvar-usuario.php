<?php
include 'functions.php';

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $altura = $_POST["altura"];
            $peso = $_POST["peso"];

            $imc = calcularImc($altura, $peso);
            $status = statusImc($imc);
            $sql = "INSERT INTO usuarios (nome, altura, peso, status, imc) 
                    VALUES ('{$nome}', '{$altura}', '{$peso}', '{$status}', '{$imc}')";

            $res = $conn->query($sql);
            if($res==true){
                echo "<script>alert('Cadastrado com sucesso!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }else{
                echo "<script>alert('Não foi possível cadastrar!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
            
        case 'editar':
            $nome = $_POST["nome"];
            $altura = $_POST["altura"];
            $peso = $_POST["peso"];

            $imc = calcularImc($altura, $peso);
            $status = statusImc($imc);
            $sql = "UPDATE usuarios 
                    SET nome='{$nome}',
                        altura='{$altura}',
                        peso='{$peso}',
                        status='{$status}',
                        imc='{$imc}'
                    WHERE 
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível Editar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;

        case 'excluir':

            break;
    }