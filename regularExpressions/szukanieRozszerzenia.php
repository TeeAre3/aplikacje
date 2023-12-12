<?php
    $wzorzec = '/\S*\.gif/i'; // i - ignorowanie wielkości liter
    $text = "w pliku obrazek.gif jest ikona";
    if(preg_match($wzorzec, $text))
        echo "znaleziono obrazek";
    else
        echo "nie znaleziono obrazka";
?>