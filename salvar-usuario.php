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
         
            break;

        case 'excluir':
            
            break;
    }