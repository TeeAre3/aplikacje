<?php
    $wzorzec = '/((\bul\.)|(\bos\.))[A-z]+[0-9]+[A-z]/';//nie działa

    $tekst="adres: ul.Kwiatowa 3a";
    if(preg_match($wzorzec, $tekst, $matches))
        echo "znaleziono adres ".$matches[0];
    else
        echo "nie znaleziono adresu ";
?>