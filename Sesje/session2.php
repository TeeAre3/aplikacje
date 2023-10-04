<?php
    session_start();

    echo "Welcome to page #2<br>";

    echo "Ulubiony kolor: ".$_SESSION["favColor"];
    echo "Ulubione zwierzę: ".$_SESSION["animal"]."<br>";
    echo date("Y m d H:i:s".$_SESSION["favColor"])."<br>";

    echo $_SESSION["bzdura"];
?>