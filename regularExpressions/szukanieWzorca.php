<?php
    $wzorzec = "/być/";
    $tekst = "być albo nie być";
    if(preg_match($wzorzec, $tekst))
        echo "znaleziono wzorzec";
    else
        echo "nie znaleziono wzorca";
    echo "<br>Znaleziono: ". preg_match_all($wzorzec, $tekst);
?>