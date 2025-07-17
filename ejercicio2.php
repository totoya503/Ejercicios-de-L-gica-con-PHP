<?php
    function esPrimo($numero) {
            // Si el número es menor o igual a 1, no es primo
            if ($numero <= 1) return false;
            // Recorremos desde 2 hasta el número pasado y comprobamos si es divisible
            // con el operador módulo (%) donde si el resultado es 0, no es primo
            for ($i = 2; $i < $numero; $i++) {
                if ($numero % $i == 0) return false;
            }
            // Si no se encontró ningún divisor, es primo
            return true;
        }
        echo esPrimo(7) ? "Es primo" : "No es primo";
?>