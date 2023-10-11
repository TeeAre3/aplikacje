<?php
    $wzorzec = '/((\bhttps?:\/\/)|(\bwww\.))\S*/';

    $tekst="adres: www.zsgsucha.pl";
    if(preg_match($wzorzec, $tekst))
        echo "znaleziono adres www";
    else
        echo "nie znaleziono adresu www";
?>