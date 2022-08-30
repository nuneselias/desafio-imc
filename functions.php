<?php

function calcularImc($altura, $peso){    
    $imc = $peso / pow($altura, 2);
    return $imc;
}

function statusImc($imc){
    if ($imc < 18.5) {
        $status = "Magreza";
    } else if ($imc >= 18.5 and $imc < 24.9) {
        $status = "Normal";
    } else if ($imc >= 24.9 and $imc < 30) {
        $status = "Sobrepeso";
    } else {
        $status = "Obesidade";
    }
    return $status;
}   