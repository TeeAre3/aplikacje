<?php
    $wzorzec = '/\d{11}/';

    $tekst="mój pesel to 05230101279";
    if(preg_match($wzorzec, $tekst))
        echo "znaleziono pesel";
    else
        echo "nie znaleziono numeru pesel";
?>