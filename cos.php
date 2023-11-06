<?php
$string = 'adfg';

function is_palindrom ($string){
    $odwroconystring = strrev($string);
    if ($string = $odwroconystring){
        echo $string, 'jest palindromem';
    } else {
        echo $string, 'nie jest palindromem';
    }
}
?>

1. echo
2. print
3. join/implode/explode 
4. str_contains/chr - Funkcja zwraca znak odpowiadający liczbie "number" wg. tablicy ASCII.
5. strlen/substr 
6. strtolower/upper - Funkcja strtolower odpowiada za zamianę ciągu znaków wielkich liter na ciąg małych liter.
7. strtok/crypt - Funkcja zwraca ciąg zakodowany przy użyciu standardowego Unix'owego algorytmu DES lub innego dostępnego w systemie.
8. lcfirst - Funkcja lcfirst w PHP zamienia pierwszą literę w przekazanym argumencie na małą literę.
9. strrev - odwrócony string
10. strpos - służy do znajdowania podciągu znaków w badanym tekście, rozpoczynając od wskazanego miejsca. Funkcja zwraca numer pierwszej pozycji odnalezionego ciągu.
11. str_replace - daje możliwość wymiany część tekstu na inny.
12. str_repeat
13. str_shuffle
14. str_word_count
15. is_string