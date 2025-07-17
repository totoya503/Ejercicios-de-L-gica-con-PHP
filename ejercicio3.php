<?php
//Problema de Palíndromos: Implementa una función llamada esPalindromo que determine si una cadena de texto dada es un palíndromo. Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas direcciones.
function esPalindromo($cadena) {
    // esta parte elimina espacios y convierte la cadena a minúsculas
    $cadena = strtolower(str_replace(' ', '', $cadena));
    
     $longitud = strlen($cadena);
     for ($i = 0; $i < $longitud / 2; $i++) {
            if ($cadena[$i] !== $cadena[$longitud - $i - 1]) {
                return false;
            }
        }
    return true;
 
}

$texto = "ana";
$resultado = esPalindromo($texto);
echo "La cadena '$texto' " . ($resultado ? "es" : "no es") . " un palíndromo.\n";
?>