<?php
/**Problema de Suma de Números Pares: Crea un script que sume todos los números pares en un array de números enteros. */
    function sumarPares($pares){
        $suma = 0;    
        for($i = 0; $i < count($pares); $i++){
            if($pares[$i] % 2 == 0){
                $suma += $pares[$i];
            }
        }
        return "Suma total de pares $suma";
    };
echo sumarPares([2,3,6,7,9,40]);
?>