<?php 
/* Problema de números Primos:
Crea una función llamada esPrimo que determine si un número dado
es primo o no. Un número primo es aquel que solo es divisible por 1 y por sí mismo. */

function primo($n): string{
    if($n <= 1){
        return (string)$n ." no es primo";
    }

    for($i = 2; $i < $n; $i++){
        if($n % $i == 0){
            return (string)$n . " no es primo";
        }
    }
    return (string)$n." es primo";
}

echo '<pre>';
echo primo(7);
echo '</pre>';