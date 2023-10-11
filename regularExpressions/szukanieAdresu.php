<?php
    $wzorzec = '/((\bul\.)|(\bos\.))\S*/';

    $tekst="adres: ul.Kwiatowa 3a";
    if(preg_match($wzorzec, $tekst, $matches))
        echo "znaleziono adres ".$matches[0];
    else
        echo "nie znaleziono adresu ";
?>