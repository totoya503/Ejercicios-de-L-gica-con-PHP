<?php 
function fizzBuzz($n): array {
    $result[] = [];
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            $result[$i] = "FizzBuzz";
        } elseif ($i % 3 == 0) {
            $result[$i] = "Fizz";
        } elseif ($i % 5 == 0) {
            $result[$i] = "Buzz";
        } else {
            $result[$i] = $i;
        }
    }
    return $result;
}
$number = 15;
$fizzBuzzArray = fizzBuzz($number);

foreach ($fizzBuzzArray as $value) {
    //no se porque pone el array al principio
    //pero funciona
    echo $value;
}
?>