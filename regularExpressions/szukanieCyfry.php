<?php
    $wzorzec = "/\d/";
    $tekst = "mam 4 zeszyty";
    if(preg_match($wzorzec, $tekst))
        echo "znaleziono cyfrę";
    else
        echo "nie znaleziono cyfry";
    echo "<br>Znaleziono: ". preg_match_all($wzorzec, $tekst);
?>