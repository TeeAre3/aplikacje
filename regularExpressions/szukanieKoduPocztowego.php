<?php //szukanie kodu pocztowego
    $wzorzec='/\d{2}-\d{3}/';
    $tekst="poczta 34-200 Sucha Beskidzka";
    if(preg_match($wzorzec, $tekst, $matches))
        echo "znaleziono kod pocztowy ".$matches[0];//wyświetlanie wartości szukanej
    else
        echo "nie znaleziono kodu pocztowego";
?>