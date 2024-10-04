<?php

    $num = $_GET['numero'];

    function calcularParImpar($num) {
        
        $cuadrado = $num * $num;

        if ($num % 2 == 0) {
            header("Location:par.php?numero=$num&cuadr=$cuadrado");
        } else {
            header("Location:impar.php?numero=$num&cuadr=$cuadrado");
        }
    }

    calcularParImpar($num);

?>