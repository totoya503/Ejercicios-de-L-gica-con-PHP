<?php
function generarFibonacci($numero) {
    $fibonacci = [];

    if ($numero <= 0) {
        // Devuelve un array vacio si n es menor o igual a 0
        return $fibonacci; 
    }

    // Primer término
    $fibonacci[] = 0;

    if ($numero == 1) {
        return $fibonacci;
    }

    // Segundo término
    $fibonacci[] = 1;

    // Generar los siguientes términos
    for ($i = 2; $i < $numero; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Ejemplo de uso:
$prueba = 10;
$resultado = generarFibonacci($prueba);
echo "Los primeros $prueba términos de la serie Fibonacci son:\n";
echo implode(", ", $resultado);
?>