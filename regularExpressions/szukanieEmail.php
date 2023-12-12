<?php
    $wzorzec = '/[-\w\.]+@([-A-z0-9]+\.)+[A-z]/';

    $tekst="john.fasola@gmail.com";
    if(preg_match($wzorzec, $tekst))
        echo "jest";
    else
        echo "nie ma";
?>