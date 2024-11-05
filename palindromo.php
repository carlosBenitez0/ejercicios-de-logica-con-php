<?php 

/* Problema de Palíndromos:
Implementa una función llamada esPalindromo que determine si una cadena de texto
dada es un palíndromo. Un palíndromo es una palabra, frase o secuencia
que se lee igual en ambas direcciones. */

function palindromo($str_value):string {
    $str_value_reverse = strrev($str_value);
    if($str_value == $str_value_reverse) {
        return (string)$str_value." - es palindromo" . "\n";
    }
    return (string)$str_value." - no es palindromo". "\n";
}
echo '<pre>';
echo palindromo("Hola mundo");
echo palindromo("radar");
echo '</pre>';