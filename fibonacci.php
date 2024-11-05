<?php 

/* Problema de la serie Fibonacci:
Escribe una función llamada generar Fibonacci que reciba un número n como parámetro y genere
una lista con los primeros n términos de la serie Fibonacci. La serie comienza
con 0 y 1, y cada término subsiguiente es la suma de los dos anteriores.
 */

 function fibonacci($n):array {
        $fibonacci = [0, 1];
        for($i = 0; $i <= $n; $i++){
            array_push($fibonacci, $fibonacci[$i] + $fibonacci[$i+1]);
        }
        return $fibonacci;
    }

    $fibonacci = fibonacci(8);
    $new_fibo = "Serie fibonacci: ";
    foreach($fibonacci as $n){
        $new_fibo .=  (string)$n . ", ";
    }

    $new_fibo = rtrim($new_fibo, ", ");

    echo '<pre>';
    echo (string)$new_fibo . ".";
    echo '</pre>';

   